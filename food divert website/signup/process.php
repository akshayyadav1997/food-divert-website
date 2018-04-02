<?php

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
mysql_select_db('login',$con);

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

    $Username = $_POST['user'];
    $Password = $_POST['pass'];
    $Cpassword = $_POST['cpass'];


    if ($Password == $Cpassword) {
        
        $query = "select * from users where username = '$Username'";
        $query_run = mysql_query($query,$con);


        if (mysql_num_rows($query_run)>0) {
        	//there is already a user with the same username
        	echo '<script type="text/javascript"> alert("User already exist....try another username")</script>';
        }
        else
        {
        	$query = "insert into users values('$Username','$Password')";
        	$query_run = mysql_query($query,$con);

        	if ($query_run) {
        		echo '<script type="text/javascript"> alert("User registered....go to login page to login")</script>';
        	}
        	else
        	{

        		echo '<script type="text/javascript"> alert("Error!!!")</script>';
        	}	


        }
    }

}


?>
