<?php

$param = $_GET['p'];

$session_name = '';
if ( $param === 'd1' ) {
    $session_name = 'SESS1'; 
} elseif ( $param === 'd2' ) {
    $session_name = 'SESS2';
} else {
    echo 'no param';
    exit;
}

echo "session_select==>". $session_name;
session_name($session_name);
session_start();
var_dump($_SESSION);

// セッション変数を全て解除する
$_SESSION = array();

// セッションを切断するにはセッションクッキーも削除する。
// Note: セッション情報だけでなくセッションを破壊する。
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 最終的に、セッションを破壊する
session_destroy();


