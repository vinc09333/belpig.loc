<?php


namespace Engine\Core\Auth;


class LdapAuth
{
    private $host ="ldap://192.168.10.6";
    private $port = 389;
    public $Role = [];
    public $ISA_group = [];
    public $authStatus = 0;
    public function __construct($login, $password)
    {
        error_reporting(E_ALL &~E_WARNING&~E_NOTICE);
        $ad = ldap_connect($this->host,$this->port);
              ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
              ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
              ldap_bind($ad, $login."@agrohold.ru", $password);
              //print_r(ldap_error($ad));
              $sr=ldap_search($ad, "dc=agrohold,dc=ru", "(mail=K.Vorobev@agrohold.ru)", ["*"]);
              $entry = ldap_get_entries($ad, $sr);
              $values = $entry[0]["memberof"];
              $groupnames = [];
        foreach ($values as $value)
        {
            $groupname = explode('CN=',$value)[1];
            $group= explode(',',$groupname)[0]."\n";

            array_push($groupnames, $group);

        }
        foreach ($groupnames as $value)
        {
            $isa = strpos($value, 'ISA');
            if ($isa === 0)
            {
                array_push($this->ISA_group, $value);
            }
        }
        foreach ($groupnames as $value)
        {
            $isa = strpos($value, 'ISAWeb');
            if ($isa === 0)
            {
                array_push($this->Role, $value);
                $this->authStatus = true;
            };
        }


    }

}
