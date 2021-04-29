<?php

class Teacher
{
    public $id_teacher;
    public $name_teacher;

    public function __construct($db)
    {
        if (isset($_POST['add_teacher']))
        {
            $this->addTeacherInDb($_POST, $db);
        }

        if(isset($_POST['del_teacher']))
        {
            $this->delTeacherInDb($_POST, $db);
        }

        if(isset($_POST['save_teacher'])) {
            $this->saveTeacherInDb($_POST, $db);
        }

        $this->rez = $db->db_query("SELECT * FROM `teacher`");
    }

//добавление преподавателей
    public function addTeacherInDb($POST, $db)
    {
        print_r($POST);
        $name_teacher = $POST['name_teacher'];
        $db->db_query("INSERT INTO `teacher` SET 
            `name_teacher`='$name_teacher'           
        ");
    }
// удаление преподавателей
        public function delTeacherInDb($POST, $db)
    {
            $id_teacher = $POST['del_teacher'];
            $db->db_query("DELETE FROM `teacher` WHERE `id_teacher`='$id_teacher'");
    }

    //сохранение преподавателя
    public function saveTeacherInDb($POST, $db)
    {
        print_r($POST);
            $name_teacher = $POST['name_teacher'];
            $id_teacher = $POST['save_teacher'];
            $db->db_query("UPDATE `teacher` SET `name_teacher`='$name_teacher' WHERE `id_teacher`='$id_teacher'");
            echo "UPDATE `teacher` SET `name_teacher`='$name_teacher' WHERE `id_teacher`='$id_teacher'";
    }
}

$teacher_tb = new Teacher($db);