<?php


session_start();
if(!isset($_SESSION['user'])){
   header("location: /final/login/login.php");
}

//make connection
$con = mysql_connect("localhost", "root", "");

//select db
mysql_select_db("random",$con);

$sql = "SELECT * FROM testing";
$records = mysql_query($sql,$con);


 while ($donate = mysql_fetch_array($records)) {
      echo "<tr>";

      echo "<td>".$donate['Name']."</td>";

      echo "<td>".$donate['CONTACT']."</td>";

      echo "<td>".$donate['ADDRESS']."</td>";

      echo "<td>".$donate['FOODNAME']."</td>";

      echo "<td>".$donate['QUANTITY']."</td>";

      echo "<td>".$donate['BESTBEFORE']."</td>";


      echo "</tr>";
    }


?>