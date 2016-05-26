<?php

include_once('../config/init.php');

$_SESSION = array();

//set cookie to expire
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-86400, '/');
}
//finally destroy
session_destroy();

header("Location: login.html");
?>
