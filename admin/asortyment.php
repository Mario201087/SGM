<?php
session_start();


if ($_SESSION['funkcje'] != 'admin') {
    header("location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="col-12 d-flex justify-content-end" action="../wyloguj.php" method="post">
        <button class='btn-primary col-2 m-1' type="submit">Wyloguj</button>
        <div style="width: 8vw;"></div>
    </form>
    <div id="container" class="col-10 mx-auto">
    <div class="col-12 d-flex justify-content-between mt-3"  style='height: 7vh;'>
        <btn class="btn-primary mr-1 text-center" onclick="magazyn()" style='width: 24.8%;'>Magazyn</btn>
        <btn class="btn-primary  mr-1 text-center" onclick="zamowienia()"  style='width: 24.8%;'>Zamowienia</btn>
        <btn class="btn-secondary  mr-1 text-center active " onclick="klient()" style='width: 24.8%;'>Klient</btn>
        <btn class="btn-primary  mr-1 text-center" onclick="pracownik()" style='width: 24.8%;'>Pracownik</btn>
    </div>
    
    <div class="col-12 d-flex justify-content-between mt-1 mx-auto" style='height: 6vh;'>
        <btn class="btn-primary text-center " onclick="klient()"  style='width: 49%;'>Dodaj</btn>
        <btn class="btn-primary mr-1 text-center active" style='width: 49%;' onclick="asortyment()"  >Asortyment</btn>
    </div>
    <div style="width:100% ; height: 15vh;"></div>
    <form action="przyjecie.php" method="post" class="col-md-6 mx-auto">
        <input type="text" class="btn-primary" name='nazwa'>
        
        <button type="submit" class="btn-primary col-12 mt-2">Dodaj</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function magazyn()
    {
        window.location.href = 'admin.php';
    }
    function pracownik()
    {
        window.location.href = 'pracownik.php';
    }
    function klient()
    {
        window.location.href = 'klient.php';
    }
    function zamowienia()
    {
        window.location.href = 'zamowienia.php';
    }
    function asortyment()
    {
        window.location.href = 'asortyment.php';
    }
</script>
</html>