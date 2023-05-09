<?php
include "../model/mydb.php";
session_start();

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getAllUsers("student", $conobj);


?>