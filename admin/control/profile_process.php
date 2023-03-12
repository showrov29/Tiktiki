<?php
session_start();
$fname=$lname=$email="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}

$users = file_get_contents("../data/users.json");
$phpdata= json_decode($users);
foreach($phpdata as $myobj)
{
    if($_SESSION["email"]==$myobj->email)
    {
        $fname= $myobj->fname."<br>";
        $lname= $myobj->lname."<br>";
        $email= $myobj->email."<br>";
    }
}


?>