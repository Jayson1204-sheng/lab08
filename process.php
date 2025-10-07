<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'password123') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Invalid Login</title>
    </head>
    <body>
      <p>Invalid login. <a href="login.php">Try again</a>.</p>
    </body>
    </html>';
}
?>
