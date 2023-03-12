  <?php
    
session_start();

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
        $filedata=file_get_contents("../data/users.json");
        $phpobj=json_decode($filedata);

        // echo gettype($filedata);
        // echo $filedata;


       
if($phpobj->email==$_REQUEST["email"] && $phpobj->password==$_REQUEST["password"])
{
   
    $_SESSION["email"]=$phpobj->email;
    // header("Location: ../view/profile.php");
    $match=1;
    // // echo "login Successfull";
    echo '<script>alert("Login Succesful")</script>';
    // header("Location: ../view/login.php");
     // exit;
    // ob_start();
       header("Location:../view/dashboard.php");
      
}


    
    if($match==0)
    {
         echo '<script>alert("Login Failed")</script>';
        // ob_start();
       header("Location:../view/login.php");
       $err="Login Failed";
       // exit();
    }

}
}
?> 



