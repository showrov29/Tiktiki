<?php
include ("../model/mydb.php");

$email=$_REQUEST["email"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("customer", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $email=$row["email"];
        $gender=$row["gender"];
        $course=$row["course"];
        $file=$row["file"];
        echo "name: ".$fname.$lname.$email.$gender.$course.$file;
    }
}
else
{
    echo "no data found";
}


?>