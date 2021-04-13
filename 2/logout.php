<?php
session_start();
$_SESSION["auth"] = "guest";
$_SESSION["name"] = null;
header("Location:login.php");
?>