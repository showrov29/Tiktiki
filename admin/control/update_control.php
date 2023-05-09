<?php
include ("../model/mydb.php");

$selected="";
$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->getUserInfo("student", $email, $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
    $fname=$row["firstname"];
    $lname=$row["lastname"];
    $gender=$row["gender"];
    $password=$row["password"];
    $course=$row["course"];
    $file= $row["file"];

}

}
if(isset($_REQUEST["update"]))
{
   
    if($_FILES["image"]["name"]!="")
    {
        echo $_FILES["image"]["name"];
        $file="../uploads/".$email.".jpg";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);
    }
    
$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->updateUser("student", $conobj, $_REQUEST["firstname"], 
$_REQUEST["lastname"], 
$_REQUEST["password"],
$_REQUEST["gender"],
$_REQUEST["course"],
 $file, $email);
}






?>