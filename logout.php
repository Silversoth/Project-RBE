<?php
session_start();

//unset all session variables
$_SESSION = array();
session_unset();
session_destroy();
header("Location:index.php");
//header("Location:test.php");
exit;
?>