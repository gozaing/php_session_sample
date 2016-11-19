<?php
session_name('SESS2');
session_start();

$_SESSION['bbb']="BBB";

header("Location: ./session_check.php");
exit;
?>
