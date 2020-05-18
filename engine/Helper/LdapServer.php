<?php


namespace Engine\Helper;


use Engine\Controller;

class LdapServer extends Controller
{
    public function getLdapServersList()
    {
        $sql = $this->queryBuilder->select()->from('ldap_server')->sql();
        return (array)$this->db->query($sql)[0];
    }
    public function getLdapServer($server_id)
    {
        $sql = $this->queryBuilder->select()->from('ldap_server')->wheres('id',$server_id)->sql();
        return (array)$this->db->query($sql)[0];
    }
}