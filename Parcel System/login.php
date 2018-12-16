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

<div class="container" align="center">
    <div class="Forms">
        <h2 id="LoginText">Login</h2>

        <form action="loginProcess.php" method="post">

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
                <label class="control-label">Role</label>
                <div class="controls">
                    <input name="role" required type="radio" value="Admin" autocomplete="off"> Admin
                    <input name="role" required type="radio" value="Student" autocomplete="off"> Student
                </div>
            </div>

            <div class="control-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>

        </form>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="StyleSheet/indexModelStyle.css">
</body>
</html>