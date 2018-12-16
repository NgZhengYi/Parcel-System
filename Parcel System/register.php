<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="StyleSheet/indexStyle.css">
    <title>UUM Parcel System</title>
</head>

<body>
<?php include_once 'Include/indexNav.php' ?>

<div class="container">
    <div class="Forms">
        <strong>Register Account</strong>

        <form action="registerProcess.php" method="post">

            <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="username" placeholder="Username"
                           required type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="password" placeholder="Password"
                           required type="password">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Full Name</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="name" placeholder="Your Name"
                           required type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Matrics Number</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="matrics" placeholder="Matrics No"
                           required type="number">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Phone Number</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="phone" placeholder="Phone No"
                           required type="number">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input autocomplete="off" class="form-control" name="email" placeholder="Email"
                           required type="email">
                </div>
            </div>

            <div class="control-group">
                <button type="submit" class="btn btn-success">Register</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>

        </form>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="StyleSheet/indexModelStyle.css">
</body>
</html>