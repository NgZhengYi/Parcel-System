<?php

session_start();
require_once ("Include/dbconnect.php");

function check_input($data) {
    $data = trim($data);
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

    $sq1check = "SELECT COUNT(username) FROM users WHERE username='$username'";

    if(mysqli_num_rows($sq1check) > 0) {
        echo "
            <script>
                window.alert('Username or Email had already exist');
				window.history.back();
			</script>";
    }

    $sqlregister = "INSERT INTO users VALUES ('$username', '$password', '$matrics', '$email', '$phone', '$role')";
    if($sqlregister) {
        echo "<script>
				  window.alert('Successfully registered');
				  window.location.href = 'Home.php';
				  </script>";
    }
    else {
        echo "
            <script>
                window.alert('Failed to register your account');
				window.history.back();
			</script>";
    }
}

?>
