<?php
session_start();

// Check if the user is already logged in and redirect them based on their role
if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
    switch ($role) {
        case 'admin':
            header('Location: admin/admin.php');
            break;
        case 'employee':
            header('Location: employee/employee.php');
            break;
        case 'customer':
            header('Location: customer/customer.php');
            break;
    }
}

// Check for special characters or login failure messages
$specialCharacters = isset($_SESSION['special_characters']) && $_SESSION['special_characters'];
$loginFailure = isset($_SESSION['login_failure']) && $_SESSION['login_failure'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="row col-6" style="margin-left: 25%; margin-top: 15%;">
        <form action="login.php" method="post">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control" placeholder="Username" name="username" required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary col-12 mb-4">Sign in</button>

            <?php
            if ($specialCharacters) {
                echo "<button class='btn btn-primary col-12 mb-4' disabled>Special characters are not allowed</button>";
                $_SESSION['special_characters'] = false;
            } elseif ($loginFailure) {
                echo "<button class='btn btn-primary col-12 mb-4' disabled>Invalid username or password</button>";
                $_SESSION['login_failure'] = false;
            }
            ?>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
