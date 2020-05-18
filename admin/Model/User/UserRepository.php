<?php


namespace Admin\Model\User;


use Engine\Core\Ldap\Ldap;
use Engine\Model;

class UserRepository extends Model
{
    public function getUsers()
    {
        $sql = $this->queryBuilder->select()
            ->from('user')
            ->orderBy('id', 'DESC')
            ->sql();

        return $this->db->query($sql);
    }
    public function getUserData($id)
    {
        $user = new User($id);

        return $user->findOne();
    }
    /**
     * @param $params
     * @return mixed
     */
    public function gcreateUser($params)
    {
        $sql = $this->queryBuilder->
        insert('user')->add(
            [
                'email'=>$params['email'],
                'password'=>md5($params['password']),
                'role'=>$params['role']
            ]
        )->sql();
        $this->db->execute($sql);
        return ;
    }
    public function createUser($params)
    {
        $ldap = new Ldap($params['email'], $params['password']);
        $user = new User;
        $user->setEmail($params['email']."@agrohold.ru");
        $user->setPassword(md5($params['password']));
        $user->setRole($params['role']);
        $user->setAdRole($ldap->ISA_group[0]['admin']);
        $userId = $user->save();
        return $userId;
    }

    public function updateUser($params)
    {
        if (isset($params['id'])) {
            $user = new User($params['id']);
            $user->setEmail($params['email']);
            $user->setPassword(md5($params['password']));
            $user->setRole($params['role']);
            $user->save();
        }
    }
    public function deleteUser($params)
    {
        $sql = $this->queryBuilder->delete()->from('user')->wheres('id',$params['id'])->sql();
        $this->db->execute($sql);

    }
}