<?php

	session_start();

	if (empty ($_SESSION['user']) )
		header ("Location: login.php");

	$con = mysql_connect("localhost", "root", "");

	//select db
	mysql_select_db("random",$con);
	$nae = $_POST['dname'];
	$sql = "DELETE FROM testing WHERE Name = '$nae'";
	$query = "INSERT INTO testing1 (donorname,receivername,status)VALUES('".$nae."','".$_SESSION['user']."','Booked Successfully')";
	//echo $sql;
	if(mysql_query($sql,$con)){
	 echo '<script type="text/javascript"> alert("Booked Successfully")</script>';
	}
	else{
	 echo '<script type="text/javascript"> alert("Errors")</script>';

	}

	if(mysql_query($query,$con)){
	 echo '<script type="text/javascript"> alert("Please Check your status")</script>';
	}
	else{
	 echo '<script type="text/javascript"> alert("Errors")</script>';

	}


	//header('Location: /final/donation_status/dstatus.php');
	mysql_close();
	//echo $_POST['dname'];

?>
