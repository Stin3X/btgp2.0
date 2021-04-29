<?php
class Cabinets
{
    public $id_cabinet;
    public $number_cabinet;
    public $name_cabinet;
    public $group_id_group;



    public function __construct($db)
    {
        if(isset($_POST['add_cab']))
        {
            $this->AddCabToDb($_POST,$db);
        }

        if(isset($_POST['del_cab']))
        {
            $this->delCabInDb($_POST,$db);
        }

        if(isset($_POST['save_cab']))
        {
            $this->saveCabToDb($_POST,$db);
        }

        $this->rez = $db->db_query("SELECT * FROM `cabinets`");
        print_r($this->rez);
    }

    //добавление кабинетов в базу
    public function AddCabToDb($POST,$db)
    {
            $number_cabinet = $POST['number_cabinet'];
            $name_cabinet = $POST['name_cabinet'];
            $group_id_group = $POST['group_id_group'];
            $db->db_query("INSERT INTO `cabinets` SET 
            `number_cabinet` = '$number_cabinet',
            `name_cabinet`  = '$name_cabinet',
            `group_id_group` = '$group_id_group'
            ");
    }

    //удаление кабинетов из базы
    public function delCabInDb($POST,$db)
    {
        $id_cabinet = $POST['del_cab'];
        $db->db_query("DELETE FROM `cabinets` WHERE `id_cabinet`='$id_cabinet'");
    }

    //сохранение кабинетов
    public function saveCabToDb($POST,$db)
    {
            $number_cabinet = $POST['number_cabinet'];
            $name_cabinet = $POST['name_cabinet'];
            $group_id_group = $POST['group_id_group'];
            $id_cabinet = $POST['save_cab'];
            $db->db_query("UPDATE `cabinets` SET 
        `number_cabinet`='$number_cabinet',
        `name_cabinet` = '$name_cabinet',
        `group_id_group` = '$group_id_group'
        WHERE `id_cabinet`='$id_cabinet'");

            echo "UPDATE `cabinets` SET 
        `number_cabinet`='$number_cabinet',
        `name_cabinet` = '$name_cabinet',
        `group_id_group` = '$group_id_group'
        WHERE `id_cabinet`='$id_cabinet'";
    }
}

$cabinet_tb = new Cabinets($db);
?>