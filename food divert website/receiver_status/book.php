<?php

$con = mysql_connect("localhost", "root", "");

//select db
mysql_select_db("random",$con);
$nae = $_POST['dname'];
$sql = "DELETE FROM testing WHERE Name = '$nae'";
//echo $sql;
if(mysql_query($sql,$con)){
 echo '<script type="text/javascript"> alert("Booked Successfully")</script>';
}
else{
 echo '<script type="text/javascript"> alert("Errors")</script>';

}
//header('Location: /final/donation_status/dstatus.php');
mysql_close();
//echo $_POST['dname'];

?>