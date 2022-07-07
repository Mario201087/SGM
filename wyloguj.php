<?php
session_start();

unset($_SESSION['funkcje']);
header('Location: index.php');

?>