<?php

//config File einlesen
require_once 'config.php';

//Database connection
global $dbc;

$stmt = $dbc->prepare("SELECT username,password from dca_users WHERE
username='".$_POST['username']."' && password='".  md5($_POST['password'])."'");

$stmt->execute();

$row = $stmt->rowCount();

if ($row > 0){
echo 'correct';
} else{
echo 'wrong';
}

?>