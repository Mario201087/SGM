<?php
session_start();


if (isset($_SESSION['funkcje'])) {
    if ($_SESSION['funkcje'] == 'admin') {
        header('Location: admin/admin.php');
    } elseif ($_SESSION['funkcje'] == 'pracownik') {
        header('Location: pracownik/pracownik.php');
    } elseif ($_SESSION['funkcje'] == 'klient') {
        header('Location: klient/klient.php');
    }
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

    <div class="row col-6" style="margin-left: 25%; margin-top: 15%;">
        <form action="logowanie.php" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" placeholder="Login" name='login'  required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" placeholder="Haslo" name='haslo' required/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary col-12 mb-4">Sign in</button>

            <?php
            if (isset($_SESSION['znaki']) && $_SESSION['znaki'] == true) {
                echo "<button class='btn btn-primary col-12 mb-4'disabled >Używasz znaków specjalnych</button>";
                $_SESSION['znaki'] = false;
            } elseif (isset($_SESSION['blad']) && $_SESSION['blad'] == true) {
                echo "<button class='btn btn-primary col-12 mb-4' disabled >Nie poprawny login lub hasło</button>";
                $_SESSION['blad'] = false;
            }
            ?>
        </form>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>