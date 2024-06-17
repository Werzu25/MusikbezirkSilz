<link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link href="../node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<?php
session_start();

// Hashed values of 'root' for username and password
$correct_username = password_hash('root' /*Replace with correct username */, PASSWORD_DEFAULT); // or replace with correct hash for the the username sha264
$correct_password = password_hash('root' /*Replace with correct password */, PASSWORD_DEFAULT); // or replace with correct hash for the the pw sha264

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the username and password
  if (
    password_verify($username, $correct_username) &&
    password_verify($password, $correct_password)
  ) {
    $_SESSION['logedIn'] = true;
    header('Location: scene-builder.php');
    exit();
  } else {
    $error = 'Invalid username or password';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body data-bs-theme="dark">
<div class="container-fluid d-flex justify-content-center align-items-center">
    <div>
        <h2 class="text-center">Login</h2>
        <?php if (isset($error)) {
          echo "<p style='color:red;'>$error</p>";
        } ?>
        <form method="post" action="" class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
</body>
</html>