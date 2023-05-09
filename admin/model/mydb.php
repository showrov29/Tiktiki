<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","secg");
return $conn;
}
function insertData($tablename, $firstname,$lastname,$gender,$email,
$password,$course,$file,$conn){
$sql="INSERT INTO $tablename (firstname,lastname,gender, email,password
,course, file) VALUES ('$firstname','$lastname','$gender','$email',
'$password','$course','$file')";
$result=$conn->query($sql);
return $result;
}
function checkUser($tablename, $email, $password, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' AND 
    password='$password'";
    $result=$conn->query($sql);
return $result;
}
function getUserInfo($tablename, $email, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' ";
    $result = $conn->query($sql);
    return $result;
}

function getAllUsers($tablename, $conn)
{
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
}
function updateUser($tablename, $conn, $fname, $lname, $password, $gender,
$course, $file, $email){


$sql= "UPDATE $tablename SET firstname='$fname', lastname='$lname', password='$password',
gender='$gender',
course='$course'
file='$file'
 WHERE email = '$email' ";
 $result = $conn->query($sql);
 return $result;
}
function deleteUser($tablename, $conn, $email){
$sql= "DELETE FROM $tablename WHERE email = '$email' ";
$result=$conn->query($sql);
return $result;
}

function searchUser($tablename, $conn, $email)
{
    $sql="SELECT * FROM $tablename WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;
}




}


?>