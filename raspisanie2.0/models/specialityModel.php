<?php
class Speciality
{
    public $id_speciality;
    public $name_speciality;
    public $short_name_speciality;


    public function __construct($db)
    {
        if(isset($_POST['add_spec']))
        {
            $this->addSpecialityInDb($_POST, $db);
        }

        if(isset($_POST['del_spec']))
        {
            $this->delSpecialityInDb($_POST, $db);
        }

        if(isset($_POST['save_spec']))
        {
            $this->saveSpecialityInDb($_POST, $db);
        }

        $this->rez = $db->db_query("SELECT * FROM `speciality`");
    }

    //добавление специальностей в базу
    public function addSpecialityInDb($POST, $db)
    {
        $short_name_speciality = $POST['short_name_speciality'];
        $name_speciality = $POST['name_speciality'];
        $db->db_query("INSERT INTO `speciality` SET 
            `name_speciality` = '$name_speciality',
            `short_name_speciality`  = '$short_name_speciality'      
            ");
    }

//удаление специальностей из базы
    public function delSpecialityInDb($POST,$db)
    {
            $id_speciality = $POST['del_spec'];
            $db->db_query("DELETE FROM `speciality` WHERE `id_speciality`='$id_speciality'");
    }

    //сохранение специальностей в базу
    public function saveSpecialityInDb($POST,$db)
    {
        $name_speciality = $POST['name_speciality'];
        $short_name_speciality = $POST['short_name_speciality'];
        $id_speciality = $POST['save_spec'];

        $db->db_query("UPDATE `speciality` SET 
        `name_speciality`='$name_speciality',
        `short_name_speciality` = '$short_name_speciality'
        WHERE `id_speciality`='$id_speciality'");
    }


}
$speciality_tb = new Speciality($db);