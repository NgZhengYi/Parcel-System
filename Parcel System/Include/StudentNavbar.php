<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-toggler-icon leftmenutrigger"></span>
    <a class="navbar-brand" href="#">UUM Parcel System</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">

        <ul class="navbar-nav animate side-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View Recieved Parcel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View Sending Parcel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feedback</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-md-auto d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="../Student/StudentProfile.php">
                    <?php
                        echo $_SESSION['username'];
                    ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logoutProcess.php">Logout</a>
            </li>
        </ul>

    </div>
</nav>
</body>
</html>