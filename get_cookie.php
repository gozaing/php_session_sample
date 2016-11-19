<?php

var_dump($_COOKIE);

$list = $_COOKIE;
foreach($list as $name => $value) {
    echo $name;
}

