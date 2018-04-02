<?php
//session_start();
//get values pass from form in login.php file
/*$username = $_POST['user'];
$password = $_POST['pass'];

error_reporting(0);
//to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect( "localhost", "root", "");
mysql_select_db("login");
//Query the database for user

$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){

	//echo "login succcessful!!!!welcome";
	header('Location: /final/donation/donor_home.php');
}
else
{
	echo "failed to login!";
}*/

//vikas 
session_start();
$db = mysqli_connect("localhost","root","","login");
if(isset($_POST['submit'])){
	
	$user= $_POST['user'];
	$password= $_POST['pass'];
	$query= mysqli_query($db, "SELECT * FROM users WHERE username= '$user' && password= '$password'");
	if(mysqli_num_rows($query) == 0 ){
		echo '<script type="text/javascript"> alert("Error!!!")</script>';
	}else{
		$_SESSION['user'] = $user ;
		header('Location: /final/donation/donor_home.php');
	}
}

?>
