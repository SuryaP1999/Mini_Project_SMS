<?php
session_start();
unset($_SESSION["adno"]);
header("Location:../login.php");
?>