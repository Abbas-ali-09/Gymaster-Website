<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = new mysqli ($servername,$username,$password,$dbname);

if (!$conn) {
    echo "error";
}

?>