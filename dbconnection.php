<?php

$HOST = 'localhost:3306';
$USER = 'root';
$PASSWORD = '';
$DATABASE ='orderingschema';

$connection = mysqli_connect($HOST,$USER, $PASSWORD,$DATABASE);
if(! $connection ) {
die('Could not connect: ' .
mysqli_connect_errno());
}

echo 'Connected successfully';

?>