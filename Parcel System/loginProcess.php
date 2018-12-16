<?php
session_start();
require_once("Include/DBconnect.php");
$dbc = db_connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST ['username']);
    $password = trim($_POST ['password']);
    $role = $_POST['role'];
    $hashed_password = md5($password);

    $sqlquerylogin = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$hashed_password' AND role LIKE '$role'";
    $sqllogin = mysqli_query($dbc, $sqlquerylogin);

    if(mysqli_num_rows($sqllogin) <= 0) {
        echo "<script>window.alert('Username / Password / Role not match');</script>";
        header("Location:login.php?mode=Invalid");
        exit();
    }

    // Passing SESSION value
    if ($sqlquerylogin && $role == 'Admin') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header("Location:Admin/AdminMainMenu.php");
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header("Location:Student/StudentMainMenu.php");
    }
}

mysqli_close($dbc);
exit();
?>