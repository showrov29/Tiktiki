<?php

$printcookie="";
setcookie("visit","1",time()+36000);
if(isset($_COOKIE["visit"]))
{
    $printcookie= "visited";
}
else
{
    $printcookie= "welcome";
}

$fnameerror="";
$lnameerror="";
$courseErr="";
$genderErr="";
$passErr="";
$fileErr="";
$phoneErr="";
$emailErr="";
if(isset($_REQUEST["Submit"]))
{
$fname=$_REQUEST["firstname"];
$haserror=0;
if(empty($fname))
{
    $fnameerror= " first name not found";
    $haserror=1;
}
else{
    $fnameerror= "your first name is ". $fname;

}
if(empty($_REQUEST["lastname"]))
{
    $lnameerror= " last name not found";
    $haserror=1;
}
else{
    $lnameerror= "your first name is ". $_REQUEST["lastname"];

}


if ($_REQUEST['pass'] != $_REQUEST['repass']) {

    $haserror=1;
    $passErr= "Password dosen't match ";
    // code...
}


if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
    $genderErr= "<br>your gender is ". $gender;
}
else{
    $genderErr ="<br>your gender is not set";
    $haserror=1;
}

if(!empty($_REQUEST["email"]))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    $emailErr= "<br>please enter a valid email address";
    $haserror=1;
}
else{
   $emailErr="<br>your email address is ".$_REQUEST["email"];
}
}
else{
    $emailErr= "<br>Enter your email address";
    $haserror=1;

}



if(!empty($_REQUEST["phone"]))
{
   if(!preg_match("/^(?:\+88|01)?\d{11}\r?$/",$_REQUEST["phone"]))
{
    $phoneErr= "<br>please enter a valid phone number";
    $haserror=1;
}
else{
   $phoneErr="<br>your phone number is ".$_REQUEST["phone"];
}
}
else{
    $phoneErr= "<br>Enter your Phone Number";
    $haserror=1;

}




if(isset($_REQUEST["course"]))
{
    $course=$_REQUEST["course"];
    if($course=="Course")
    {
       $courseErr= "<br>please select a course";
        $haserror=1;
    }
    else{
         $courseErr="<br>your course is ". $course;
    }
   
}
else{
     $courseErr= "<br>your course is not set";
}
if(empty($_FILES["image"]["name"]))
{
    $fileErr= "enter a file";
    $haserror=1;
}
else{
   $fileErr= "<br>".$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["email"].".jpg");
}
if($haserror==0)
{
$existingdata=file_get_contents("../data/users.json");
$phpdata=json_decode($existingdata);
    $formdata=array(
        "fname"=>$_REQUEST["firstname"],
        "lname"=>$_REQUEST["lastname"],
        "gender"=>$_REQUEST["gender"],
        "email"=>$_REQUEST["email"],
        "password"=>$_REQUEST["pass"],
        "course"=>$_REQUEST["course"],
        "file"=>"../uploads/".$_REQUEST["email"].".jpg",
    );
    $phpdata=$formdata;

    $users=json_encode($phpdata,JSON_PRETTY_PRINT);

if(file_put_contents("../data/users.json",$users))
{
    echo "file written successfully";
}
else{
    echo "file written failed";
}

}


}

?>