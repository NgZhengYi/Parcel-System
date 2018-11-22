<?php
session_start();
require_once ("Include/dbconnect.php");
$dbc = db_connect();

function check_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = check_input($_POST["signup_username"]);
    $password = check_input($_POST["signup_password"]);
    $matrics = check_input($_POST["signup_matrics"]);
    $email = check_input($_POST["signup_email"]);
    $phone = check_input($_POST["signup_phone"]);
    $role = "student";

    $sqlquerycheck = "SELECT username FROM users WHERE username='$username'";
    $sqlcheck = mysqli_query($dbc, $sqlquerycheck);

    if(mysqli_num_rows($sqlcheck) > 0) {
        echo "
            <script>
                window.alert('Username or Email had already exist');
                window.location.href = 'Index.php';
			</script>";
        exit();
    }

    $password = md5($password);

    $sqlqueryregister = "INSERT INTO users VALUES ('$username', '$password', '$matrics', '$email', '$phone', '$role')";
    $sqlregister = mysqli_query($dbc, $sqlqueryregister);
    if($sqlregister) {
        echo "<script>
				  window.alert('Successfully registered');
				  window.location.href = 'Index.php';
				  </script>";
    } else {
        echo "
            <script>
                window.alert('Failed to register your account');
				window.history.back();
			</script>";
    }
}

?>
