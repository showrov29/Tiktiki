<?php
include ('../control/login_control.php');
?>

<html>
<head>   
<title>  
Login Page  
</title> 
<link rel="stylesheet" type="text/css" href="../../css/mystyle.css"> 
</head>  
<body bgcolor="white">  
<?php include '../../layout/header.php';?>

<form action="../control/login_control.php" method="POST">
Email: <input type="email" name="email"> 
Password: <input type="password" name="password">
<input type="submit" name="login" value="Log In">
<br>
</form>

<?php include '../../layout/footer.php';?>
</body>

</html>