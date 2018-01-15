<?php

//DatenBank connecten
try {
    $dbc=new PDO("mysql:host=193.196.143.168;dbname=mm7w_62fuch1bif","mm7w_62fuch1bif","bla12345")
    or die("Unable to connect.");
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

?>