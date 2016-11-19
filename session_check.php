<?php

$param = $_GET['p'];

$session_name = '';
if ( $param === 's1' ) {
    $session_name = 'SESS1'; 
} elseif ( $param === 's2' ) {
    $session_name = 'SESS2';
} else {
    echo 'no param';
    exit;
}

echo "session_select==>". $session_name;
session_name($session_name);
session_start();
var_dump($_SESSION);
