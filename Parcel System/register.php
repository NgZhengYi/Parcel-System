<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <!-- Bootsrap 4 CDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CDN -->
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <!-- Login Page CSS -->
    <link href="StyleSheet/IndexStyle.css" rel="stylesheet">
    <title>UUM Parcel System</title>
</head>

<body>
<?php include_once 'Include/indexNav.php' ?>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h2>Register Account</h2>
            </div>

            <div class="card-body">
                <form action="registerProcess.php" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input autocomplete="off" class="form-control" name="username" placeholder="Username"
                               required type="text">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" name="password" placeholder="password" required type="Password">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-signature"></i></span>
                        </div>
                        <input autocomplete="off" class="form-control" name="name" placeholder="Full Name"
                               required type="text">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                        </div>
                        <input autocomplete="off" class="form-control" name="matrics" placeholder="Matrics No"
                               required type="number">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input autocomplete="off" class="form-control" name="phone" placeholder="Phone No"
                               required type="number">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input autocomplete="off" class="form-control" name="email" placeholder="Email Address"
                               required type="email">
                    </div>

                    <div class="form-group">
                        <input type="reset" value="Reset" class="btn float-right reset_btn">
                        <input type="submit" value="Sign Up" class="btn float-right register_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>