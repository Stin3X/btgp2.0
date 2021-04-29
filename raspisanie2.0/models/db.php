<?php
class Database{
private $host;
private $user;
private $pass;
public $db;
public $mysqli;

public function __construct($conf) {
$this->db_connect($conf);
}

private function db_connect($conf){
$this->mysqli = new mysqli($conf['hostDb'], $conf['userDb'], $conf['passDb'], $conf['nameDb']);
return $this->mysqli;
}

public function db_query($sql){
$result = $this->mysqli->query($sql);
return $result;
}

}

$db = new Database($conf);
//$db->db_num("SELECT * FROM `config`");

?>