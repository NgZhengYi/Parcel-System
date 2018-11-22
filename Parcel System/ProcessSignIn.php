<?php
session_start();
require_once ("Include/dbconnect.php");
$dbc = db_connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim ( $_POST ['username'] );
    $password = trim ( $_POST ['password'] );
    $role = $_POST['role'];
    $password = md5($password);

    $sqlquerylogin = "SELECT * FROM user WHERE username = '$username' AND password LIKE '$password' AND role = '$role'";
    $sqllogin = mysqli_query($dbc, $sqlquerylogin);

    if ($sqlquerylogin && $role == 'Admin') {
        header("Location:AdminMenu.php");
    } else if ($sqlquerylogin && $role == 'Student') {
        header("Location:StudentMenu.php");
    } else {
        echo "<script>
            window.alert('Username and password or role does not match');
		    window.history.back();
          </script>";
    }
}

mysqli_close($dbc);
exit();

?>