<?php 
session_start();
echo "Logout Successfully";
session_destroy(); 
header("location:log.php");
?>