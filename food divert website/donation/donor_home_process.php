<?php

session_start();
if(!isset($_SESSION['user'])){
   header("location: /final/login/login.php");
}
//session_start();
//$query_run = mysql_query(query)
//get values pass from form in login.php file
/*$username = $_POST['user'];
$password = $_POST['pass'];

error_reporting(0);
//to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/

//connect to the server and select database
$con = mysql_connect( "localhost", "root", "");
mysql_select_db("random",$con);

//Query the database for user
/*$result = mysql_query("select username,password from users where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){

	echo "login success!!!  Welcome".$row['username'];
}
else
{
	echo "failed to login!";

}*/


if(isset($_POST['submit_btn']))
{
   //echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';

    $Name = $_POST['Name'];
    $Contact = $_POST['Contact'];
     $Email = $_POST['Email'];
    $Address = $_POST['Address'];
     $FoodName = $_POST['FoodName'];
      $Quantity = $_POST['Quantity'];
       $BestBefore = $_POST['BestBefore'];
      //  $Type = $_POST['Type'];
        // $Image = $_POST['Image'];


    
        
       // $query = "select * from donate where Contact = '$Contact'";
       // $query_run = mysql_query($query,$con);


       /* if (mysql_num_rows($query_run)>0) {
        	//there is already a user with the same Contact
        	echo '<script type="text/javascript"> alert("User already exist....try another username")</script>';
        }*/
        
        	$query = "INSERT INTO testing (Name,Contact,Email,Address,FoodName,Quantity,BestBefore)VALUES('".$Name."','".$Contact."','".$Email."','".$Address."','".$FoodName."','".$Quantity."','".$BestBefore."')";
        	$query_run = mysql_query($query,$con);

        	if ($query_run) {
        		echo '<script type="text/javascript"> alert("Donor registered...Thank you for donating...Please wait for receiver to book the donation")</script>';
				//header('Location: /donor_home.php');
			
        	
			}
        	else
        	{

        		echo '<script type="text/javascript"> alert("Error!!!")</script>';
        	}	


    
    

}

//session_unset();

//session_destroy();

?>
