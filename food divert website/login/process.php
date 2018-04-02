<?php


//vikas 
session_start();
$db = mysqli_connect("localhost","root","","login");
if(isset($_POST['submit'])){
	
	$user= $_POST['user'];
	$password= $_POST['pass'];
	$query= mysqli_query($db, "SELECT * FROM users WHERE username= '$user' && password= '$password'");
	if(mysqli_num_rows($query) == 0 ){
		echo '<script type="text/javascript"> alert("Error!!!")</script>';
		//header('Location: login.php');
	}else{
		$_SESSION['user'] = $user ;
		header('Location: /final/donation/donor_home.php');
	}
}

?>
