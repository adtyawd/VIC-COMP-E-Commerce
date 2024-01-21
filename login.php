<?php
session_start();
require_once("config/koneksi.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo 'Data tidak boleh kosong';
    } else {
        $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

        $result = mysqli_fetch_array($sql);

        if ($result) {
            $_SESSION['email'] = $email;
            header('Location: index.php');
            exit(); // Make sure to exit after header redirection
        } else {
            echo 'Email atau password salah. Silakan coba lagi.';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3 class="title">login now</h3>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>don't have an account? <a href="register.php">register now!</a></p>
    </form>
</div>

</body>
</html>
