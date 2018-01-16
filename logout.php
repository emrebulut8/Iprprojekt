<?php
session_start();
session_destroy();

echo "Logout erfolgreich</br>";
echo '<a href="Login.php">Wieder einloggen</a>';
?>
