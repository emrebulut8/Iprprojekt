<?php

//config File einlesen
require_once 'config.php';

//Database connection
$email = $mysqli->real_escape_string($_POST['email']);
$password = $_POST['password'];

// $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");

$stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

$user = $result->fetch_assoc();

if ($user != null && $user['password'] == $password) {
    $_SESSION['userid'] = $user['name'];
    die('Login erfolgreich. Weiter zu <a href="Einkaufswagen.php">Warenkorb</a>');
} else {
    $errorMessage = "Username oder Passwort war ungültig!<br>";
}

?>