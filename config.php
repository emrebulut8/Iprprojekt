<?php

// DB Daten
$user = 'mm7w_62fuch1bif';
$password = 'bla12345';
$db = 'mm7w_62fuch1bif';
$host = '193.196.143.168';


//DB connect
$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>

