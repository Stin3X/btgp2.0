<?php
class Group
{
    public $id_group;
    public $kurs;
    public $specialty_id_specialty;


    public function __construct($db)
    {
        if(isset($_POST['add_group']))
        {
            $this->AddGroupInDb($_POST,$db);
        }

        if(isset($_POST['del_group']))
        {
            $this->delGroupInDb($_POST,$db);
        }

        $this->rez = $db->db_query("SELECT * FROM `group` 
            LEFT JOIN `speciality` 
            ON `group`.`specialty_id_specialty`=`speciality`.`id_speciality`");


        //выборка данных для выпадающих списков
        $this->speciality_list = $db->db_query("SELECT * FROM `speciality`");

        while($row = $this->speciality_list->fetch_assoc()) {
            $this->speciality_list_array[] = $row;
        };
    }


    //добавление групп в базу
    public function AddGroupInDb($POST, $db)
    {
            $kurs = $POST['select_kurs'];
            $specialty_id_specialty = $POST['selects_group'];
            $db->db_query("INSERT INTO `group` SET 
            `kurs` = '$kurs',
            `specialty_id_specialty`  = '$specialty_id_specialty'      
            ");
    }

    //удаление групп из базы
    public function delGroupInDb($POST, $db)
    {
            $id_group = $POST['del_group'];
            $db->db_query("DELETE FROM `group` WHERE `id_group`='$id_group'");
    }
}
$group_tb = new Group($db);
