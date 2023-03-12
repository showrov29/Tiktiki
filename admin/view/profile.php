

<?php 
session_start();

if (!isset($_SESSION['email'])){
	header('Location:login.php');
}

?>

<h1>Logged in Successfully </h1>

<a href="../control/logout.php">log out </a>
<?php include '../../layout/footer.php';?>

