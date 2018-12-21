<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <link href="../StyleSheet/ProfileStyle.css" rel="stylesheet">
    <title>Profile</title>
</head>

<?php
session_start();
require_once("../Include/DBconnect.php");
$dbc = db_connect();
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username ='$username'";
$search = mysqli_query($dbc, $sql);

if ($search) {
    $row = mysqli_fetch_array($search);
} else {
    die(mysqli_error($dbc));
}
?>

<body>
<?php
include_once '../Include/StudentNavbar.php';
?>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <img alt="photo"
                     class="img" src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png">
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                <div class="container" style="border-bottom:1px solid black">
                    <h2>Student Profile</h2>
                </div>
                <ul class="container details">
                    <li>
                        <p>
                            <span class="fas fa-user-alt" style="width: 50px;"></span>
                            <?php echo $row['name'] ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="fas fa-id-badge" style="width: 50px;"></span>
                            <?php echo $row['matrics'] ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="fas fa-phone" style="width: 50px;"></span>
                            <?php echo $row['phone'] ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="fas fa-envelope" style="width: 50px;"></span>
                            <?php echo $row['email'] ?>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="../JavaScript/navigate.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../StyleSheet/NavBarStyle.css">
</body>
</html>