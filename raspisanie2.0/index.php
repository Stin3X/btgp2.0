<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';
require_once 'models/db.php';


include "template/header.php";
include "template/left_menu.php";


if (!isset($_GET['page'])){
    include "views/homeView.php";
} else {
    include "models/{$_GET['page']}Model.php";
    include "views/{$_GET['page']}View.php";
}

include "template/footer.php";
?>
