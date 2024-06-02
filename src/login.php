<?php
session_start();

// Hashed values of 'root' for username and password
$correct_username = password_hash('root', PASSWORD_DEFAULT);
$correct_password = password_hash('root', PASSWORD_DEFAULT);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if (password_verify($username, $correct_username) && password_verify($password, $correct_password)) {
        $_SESSION['logedIn'] = true;
        header('Location: scene-builder.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
