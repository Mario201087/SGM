<?php
session_start();
include('../polaczenie.php');

$uzyt = $_POST['uzyt'];

$usun = mysqli_query($conn , "DELETE  FROM uzytkownicy WHERE login='$uzyt'");

$conn -> close();

$_SESSION['flaga'] = $uzyt;
header("location: usunU.php");
?>