<?php


namespace Engine\Core\Ldap;


class Ldap
{
    private $host ="ldap://192.168.10.6";
    private $port = 389;
    public $Role = [];
    public $ISA_group = [];
    public $authStatus = 0;
    public function getRoleAd($login, $password)
    {
        error_reporting(E_ALL &~E_WARNING&~E_NOTICE);
        $ad = ldap_connect($this->host,$this->port);
              ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
              ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
              ldap_bind($ad, $login."@agrohold.ru", $password);
              //print_r(ldap_error($ad));
              $sr=ldap_search($ad, "dc=agrohold,dc=ru", "(mail=$login@agrohold.ru)", ["*"]);
              $entry = ldap_get_entries($ad, $sr);
              array_push($this->Role, $entry);
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
            $isa = strpos($value, 'ISAWeb');
            if ($isa === 0)
            {
                array_push($this->ISA_group, ['admin' => $value]);
                $this->authStatus = true;
                break;
            }elseif ($isa != 0){
                array_push($this->ISA_group, ['admin' => 'NaN']);
                break;
            }
        }
        foreach ($groupnames as $value)
        {
            $isa = strpos($value, 'ISA');
            if ($isa === 0)
            {
                array_push($this->ISA_group, $value);
            }
        }


    }
    public function checkAD()
    {
        $arr = [];
        //error_reporting(E_ALL &~E_WARNING&~E_NOTICE);
        $ad = ldap_connect($this->host,$this->port);
        ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
        ldap_bind($ad, "am.fesenko@agrohold.ru", 'vInc093290193');
        $sr=ldap_search($ad, "dc=agrohold,dc=ru", "(mail=*)", ["mail","memberof",'cn']);
        $entry = ldap_get_entries($ad, $sr);
        array_push($arr, $entry);
        ldap_unbind($ad);
        $a = [];
        $q = [];
        foreach ($arr[0] as $keys) {
            $cn = [$keys['cn'][0]];
            $mail = [$keys['mail'][0]];
            $group = [$keys['memberof']];
            unset($group[0]['count']);
            if(!isset($group[0])){
                continue;

            }else $res = ['user'=>['name'=>$cn,'mail'=>$mail,'group'=>explode('CN=',implode('',$group[0]))]];
            if($res['user']['group'] ='ISAAdm,OU=Groups,DC=agrohold,DC=ru'){
                array_push($a, ['SU'=>$res['user']]);
            }
        }
        foreach ($a as $key =>$value){
            array_push($q, "{$value['SU']['name'][0]}: {$value['SU']['mail'][0]}({$value['SU']['group']})");
        }
        return $q;

    }

}
