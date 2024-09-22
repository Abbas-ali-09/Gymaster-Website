<?php

session_start ();
include 'connect.php';

if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit;
}


$id= $_GET['id'];

$delete = "DELETE FROM reg_user WHERE id='$id' ";
$result_del = $conn->query($delete);

if ($result_del === TRUE) {
   header("Location:display.php");
   exit();
}
?>