<?php
//session_save_path("/tmp/session_a");
session_name('SESS1');
session_start();

$_SESSION['aaa']="AAA";

header("Location: ./session_check.php");
exit;
?>
