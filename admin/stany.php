<?php
session_start();
include('../polaczenie.php');

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
        <btn class="btn-secondary mr-1 text-center active" onclick="magazyn()" style='width: 33%;'>Magazyn</btn>
        <btn class="btn-primary  mr-1 text-center" onclick="zamowienia()"  style='width: 33%;'>Zamowienia</btn>
        <btn class="btn-primary  mr-1 text-center" onclick="administracja()" style='width: 33%;'>Administracja</btn>
    </div>
    
    <div class="col-12 d-flex justify-content-between mt-3 mx-auto" style='height: 6vh;'>
        <btn class="btn-primary ml-1 text-center" onclick="magazyn()"  style='width: 33%;'>Przyjecie</btn>
        <btn class="btn-primary text-center" style='width: 33%;' onclick="wydanie()"  >Wydanie</btn>
        <btn class="btn-secondary mr-1 text-center active" style='width: 33%;' onclick="stany()" >Stany</btn>
    </div>
    <div class="col-12 mt-4">
    <table class="table">
        <?php
          $wyswietl= mysqli_query($conn ,'SELECT * FROM orginal ');
          
          foreach($wyswietl as $key )
          {
            echo "<tr><td>".$key['nazwa']."</td><td>".$key['waga'] ."kg</td></tr>";
             
          }
        ?>
    </table>
    </div>
    </div>
    </div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function magazyn()
    {
        window.location.href = 'admin.php';
    }
    function administracja()
    {
        window.location.href = 'administracja.php';
    }
    function zamowienia()
    {
        window.location.href = 'zamowienia.php';
    }
    function wydanie()
    {
        window.location.href = 'wydanie.php';
    }
    function stany()
    {
        window.location.href = 'stany.php';
    }
</script>
</html>
