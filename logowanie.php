<?php
session_start();

include 'polaczenie.php';

$_SESSION['znaki'] = '';
$_SESSION['blad'] = '';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$login1 = $_POST['login'];
$haslo1 = $_POST['haslo'];


$login = filter_var($login1, FILTER_SANITIZE_SPECIAL_CHARS);


if ($login === $login1 && isset($haslo1)) {
  $pyt = mysqli_query($conn, "SELECT funkcje FROM uzytkownicy WHERE login='$login' AND haslo='$haslo1'");
  $pyt3 = mysqli_num_rows($pyt);

  $conn->close();
  if ($pyt3 > 0) {
    $pyt1 = mysqli_fetch_assoc($pyt);
    if ($pyt1['funkcje'] === 'admin') {
      $_SESSION['funkcje'] = 'admin';
      header('Location: admin/admin.php');
    } else if ($pyt1['funkcje'] === 'pracownik') {
      $_SESSION['funkcje'] = 'pracownik';
      header('Location: pracownik/pracownik.php');
    } else if ($pyt1['funkcje'] === 'klient') {
      $_SESSION['funkcje'] = 'kient';
      header('Location: klient/klient.php');
    }
  } else {
    $_SESSION['blad'] = true;
    header('Location: index.php');
  }
} else {
  $conn->close();
  $_SESSION['znaki'] = true;
  header('Location: index.php');
}
$conn -> close();
?>