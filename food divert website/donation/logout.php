<?php
session_start();
session_destroy();
header("location: /final/login/login.php");
?>