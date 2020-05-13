<?php


namespace Engine\Core\Auth;

use Engine\Core\Database\QueryBuilder;
use Engine\Core\Database\Connection;
use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    /**
     * @var bool
     */
    protected $authorized = false;

    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;
    }

    public function setAuthorized()
    {
        $this->authorized = true;
    }

    /**
     * @return mixed
     */
    public function hashUser()
    {
        return Cookie::get('auth_user');
    }

    public function roleUser()
    {
        $cookies = $this->hashUser();
        $sql = new QueryBuilder();
        $que = new Connection();
        $sql->select('role')
            ->from('user')
            ->whereRole('hash', "$cookies")
            ->limit(1)
            ->sql();
        $role = $que->query($sql->sql());
        foreach ($role[0] as $value)
            return $value;
    }

    /**
     * User authorization
     * @param $user
     */
    public function authorize($user)
    {
        Cookie::set('auth_authorized', true);
        Cookie::set('auth_user', $user);
    }

    /**
     * User unAuthorization
     * @return void
     */
    public function unAuthorize()
    {
        Cookie::delete('auth_authorized');
        Cookie::delete('auth_user');
    }

    /**
     * Generates a new random password salt
     * @return int
     */
    public static function salt()
    {
        return (string)rand(10000000, 99999999);
    }

    /**
     * Generates a hash
     * @param string $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }
}
    //public function authorize($login, $password)
    //{
        //$ldap_valid = new LdapAuth($login, $password);
        //$access_keys = (array)$ldap_valid;
        //echo 'Role = '.implode('',$access_keys['Role']).'<br>Groups = '.implode(',', $access_keys['ISA_group']).'<br> Authstatus = '.$access_keys['authStatus'];
    //}
