<?php
class Users
{
    public $id_user;
    public $login;
    public $password;
    public $email;
    public $user_name;
    public $phone;

    public function __construct($db)
    {
        if(isset($_POST['add_user']))
        {
            $this->addUsersToDb($_POST, $db);
        }


        $this->rez = $db->db_query("SELECT * FROM `users`");
    }

    //добавление юзера в базу
    public function addUsersToDb($POST,$db)
    {
        $login = $POST['login'];
        $password = $POST['password'];
        $email = $POST['email'];
        $user_name= $POST['user_name'];
        $phone= $POST['phone'];
        $db->db_query("INSERT INTO `users` SET 
        `login` = '$login',
        `password`  = '$password',
        `email`  = '$email',
        `user_name`  = '$user_name',
        `phone`  = '$phone'
         ");
    }

}

$users_tb = new Users($db);
