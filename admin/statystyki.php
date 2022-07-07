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
    <div class="col-12 d-flex justify-content-between mt-5"  style='height: 7vh;'>
        <btn class="btn-primary  mr-1 text-center" onclick="magazyn()" style='width: 33.2%;'>Magazyn</btn>
        <btn class="btn-primary  mr-1 text-center" onclick="zamowienia()"  style='width: 33.2;'>Zamowienia</btn>
        <btn class="btn-secondary mr-1 text-center active" onclick="administracja()" style='width: 33.2;'>Administracja</btn>
    </div>
    
    <div class="col-12 d-flex justify-content-between mt-3 mx-auto" style='height: 6vh;'>
        <btn class="btn-primary text-center" onclick="usunU()"  style='width: 33%;'>Dodaj/Usuń uzytkownika</btn>
        <btn class="btn-primary text-center" style='width: 33%;' onclick="usuunI()"  >Dodaj/usuń indeks</btn>
        <btn class="btn-secondary mr-1 text-center active" style='width: 33%;' onclick="statystyki()" >Statystki</btn>
    </div>
    <div style="width:100% ; height: 15vh;"></div>
    <form action="przyjecie.php" method="post" class="col-md-6 mx-auto">
        <select class="form-select" aria-label="Default select example" name="rodzaj">
            <option selected>Wybierz asortyment</option>
            <option value="Niemcy">Niemcy</option>
            <option value="Polska">Polska</option>
            <option value="Po Sklep">Po Sklep</option>
        </select>
        <input type="text" name="waga" class="form-control col-12 mt-1" placeholder="Waga">
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
    function aradministracja()
    {
        window.location.href = 'administracja.php';
    }
    function zamowienia()
    {
        window.location.href = 'zamowienia.php';
    }
    function usunU()
    {
        window.location.href = 'usunU.php';
    }
    function usunI()
    {
        window.location.href = 'usunI.php';
    }
    function statystyki()
    {
        window.location.href = 'statystyki.php';
    }
</script>
</html>