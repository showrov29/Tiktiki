<?php
    
session_start();
include "../model/mydb.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $match=0;
    if(empty($_REQUEST["email"]))
    {
        echo "Please enter your email address";
        echo "<br>";
    }
    if(empty($_REQUEST["password"]))
    {
        echo "Please enter your password";
        echo "<br>";
    }
    else{
        $mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->checkUser("student",$_REQUEST["email"], $_REQUEST["password"],
        $conobj);  
        if($result->num_rows >0)
        {
            $_SESSION["email"]=$_REQUEST["email"];
            header("Location: ../view/profile.php");
        } 
        else
        {
            echo "Please correct email and password";
        }
        
        

       
if($phpobj->email==$_REQUEST["email"] && $phpobj->password==$_REQUEST["password"])
{
   
    $_SESSION["email"]=$phpobj->email;
    
    $match=1;
    
    echo '<script>alert("Login Succesful")</script>';

       header("Location:../view/dashboard.php");
      
}


    
    if($match==0)
    {
         echo '<script>alert("Login Failed")</script>';
        
       header("Location:../view/login.php");
       $err="Login Failed";
    
    }

}
}
?> 
