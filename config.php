<?php

//DatenBank connecten
try {
    $dbc=new PDO("mysql:host=localhost;dbname=databasename","username","password")
    or die("Unable to connect.");
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

?>