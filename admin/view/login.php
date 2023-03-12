<?php
include ('../control/login_control.php');
?>

<html>
<head>   
<title>  
Login Page  
</title>  
</head>  
<body bgcolor="white">  
<?php include '../../layout/header.php';?>

<form action="../control/login_control.php" method="POST">
Email: <input type="email" name="email"> 
Password: <input type="password" name="password">
<input type="submit" name="login" value="Log In">
<br>

 <!-- <a href="registration.php">Don't have an account</a> -->
</form>

<?php include '../../layout/footer.php';?>
</body>

</html>