<?php

session_start();
require_once ("Include/dbconnect.php");

$username = trim ( $_POST ['username'] );
$password = trim ( $_POST ['password'] );
$hased_password = md5($password);

$sql = "SELECT * FROM `users`, `roles` WHERE `username` LIKE '$username' 
        AND `password` LIKE '$hashed_pw' AND `users`.`roleid` = `roles`.`roleid`";

$result = mysqli_query($dbc, $sql);

if(mysqli_num_rows($result) <= 0) {
    // Message for Invalid Login
    exit();
}

$record = mysqli_fetch_array($result);

$_SESSION['userid'] = $record['userid'];
$_SESSION['fullname'] = $record['fullname'];
$_SESSION['roleid'] = $record['roleid'];

mysqli_close($dbc);

header("Location:");

exit();

?>