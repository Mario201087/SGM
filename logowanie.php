<?php
session_start();

include 'connection.php';  // Include the connection file

// Initialize session variables
$_SESSION['special_characters'] = '';
$_SESSION['error'] = '';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username1 = $_POST['username'];  // Rename 'login' to 'username'
$password1 = $_POST['password'];  // Rename 'haslo' to 'password'

// Sanitize the username
$username = filter_var($username1, FILTER_SANITIZE_SPECIAL_CHARS);

if ($username === $username1 && isset($password1)) {
  $query = mysqli_query($conn, "SELECT role FROM users WHERE username='$username' AND password='$password1'");
  $numRows = mysqli_num_rows($query);

  $conn->close();

  if ($numRows > 0) {
    $row = mysqli_fetch_assoc($query);
    
    // Redirect based on the user's role
    if ($row['role'] === 'admin') {
      $_SESSION['role'] = 'admin';
      header('Location: admin/admin.php');
    } elseif ($row['role'] === 'employee') {
      $_SESSION['role'] = 'employee';
      header('Location: employee/employee.php');
    } elseif ($row['role'] === 'customer') {
      $_SESSION['role'] = 'customer';
      header('Location: customer/customer.php');
    }
  } else {
    $_SESSION['error'] = true;
    header('Location: index.php');
  }
} else {
  $conn->close();
  $_SESSION['special_characters'] = true;
  header('Location: index.php');
}
$conn->close();  // Close the database connection
?>
