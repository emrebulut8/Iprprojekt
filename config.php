<?php

// DB Daten
$user = 'mm7w_62fuch1bif';
$password = 'bla12345';
$db = 'mm7w_62fuch1bif';
$host = '193.196.143.168';
$port = 8889;

//DB Connection
$mysqli = new mysqli($host, $user, $password, $db, $port);

if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>

