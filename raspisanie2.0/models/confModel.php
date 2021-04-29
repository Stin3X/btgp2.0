<?php
class Config
{
    public $id_config;
    public $name_oo;
    public $name_zav;
    public $rez;

    public function __construct($db)
    {
        if(isset($_POST['add_conf']))
        {
            $this->saveConfInDb($_POST,$db);
        }

        $this->rez=$db->db_query("SELECT * FROM `config`");
    }


    public function saveConfInDb($POST,$db)
    {
        //print_r($POST);
        $name_oo = $POST['name_oo'];
        $name_zav = $POST['name_zav'];
        $db->db_query("UPDATE `config` SET `name_oo`='$name_oo',`name_zav`='$name_zav'");
    }
}

$conf_tb = new Config($db);