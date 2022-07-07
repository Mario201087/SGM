<?php
include('../polaczenie.php');

$name = $_POST['rodzaj'];
$waga= $_POST['waga'];

$przyj = mysqli_query($conn,"SELECT waga FROM orginal WHERE nazwa='$name'");

$waga3= mysqli_fetch_assoc($przyj);

$waga2 = $waga3['waga'] + $waga;

$przyj2 = mysqli_query($conn, "UPDATE orginal SET waga='$waga2' WHERE nazwa='$name'");

mysqli_close($conn);

header("location: stany.php");

?>