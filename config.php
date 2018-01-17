<?php

// DB Daten
$user = 'mm7w_62fuch1bif';
$password = 'bla12345';
$db = 'mm7w_62fuch1bif';
$host = '193.196.143.168';


//DB connect
$connect = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);}

if(isset($_GET['login'])) {
//Database connection
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $_POST['password'];

// $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");

    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");;

    $user = $result->fetch_assoc();

    if ($user != null && $user['password'] == $password) {
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="Einkaufswagen.php">Warenkorb</a>');
    } else {
        $errorMessage = "Username oder Passwort war ungültig!<br>";
    }
}
if(!isset($_SESSION['userid'])) {
    ');
}
?>
