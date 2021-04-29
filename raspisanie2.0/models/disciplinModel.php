<?php
class Discipline
{
    public $id_discipline;
    public $name_discipline;
    public $short_name_discipline;



    public function __construct($db)
    {

        if(isset($_POST['add_disp']))
        {
            $this->addDisciplineToDb($_POST,$db);
        }

        if(isset($_POST['del_discp']))
        {
            $this->delDisciplineInDb($_POST,$db);
        }
        $this->rez = $db->db_query("SELECT * FROM `discipline` 
            LEFT JOIN `teacher` 
            ON `discipline`.`teacher_id_teacher`=`discipline`.`id_discipline`");

        //выборка данных для выпадающих списков(ПРЕПОДАВАТЕЛЕЙ)
        $this->discipline_list = $db->db_query("SELECT * FROM `teacher`");

        while($row = $this->discipline_list->fetch_assoc()) {
            $this->discipline_list_array[] = $row;
        };
        //выборка данных для выпадающих списков(ГРУПП)
        $this->rez = $db->db_query("SELECT * FROM `discipline` 
            LEFT JOIN `group` 
            ON `discipline`.`group_id_group`=`group`.`id_group`");

        while($row = $this->discipline_list->fetch_assoc()) {
            $this->discipline_list_array[] = $row;
        };
    }


    //добавление дисциплин(предметов) в базу
    public function addDisciplineToDb($POST, $db)
    {
            $name_discipline = $POST['name_discipline'];
            $short_name_discipline = $POST['short_name_discipline'];
            $teacher_id_teacher = $POST['selects_teacher_in_db'];
            $group_id_group = $POST['selects_group_in_db'];
            $db->db_query("INSERT INTO `discipline` SET 
            `name_discipline` = '$name_discipline',
            `short_name_discipline`  = '$short_name_discipline',
            `teacher_id_teacher` = '$teacher_id_teacher',
            `group_id_group` = '$group_id_group'       
            ");
    }

    //Сохранение

    //удаление из Бд
    public function delDisciplineInDb($POST, $db)
    {
        $id_discipline = $POST['del_discp'];
        $db->db_query("DELETE FROM `discipline` WHERE `id_discipline`='$id_discipline'");
        echo "DELETE FROM `discipline` WHERE `id_discipline`='$id_discipline'";
    }

}

$discipline_tb = new Discipline($db);