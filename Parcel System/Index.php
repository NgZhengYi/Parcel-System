<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src=JS/Index.js></script>
    <link rel="stylesheet" type="text/css" href="CSS/Styles.css">
    <link rel="stylesheet" type="text/css" href="CSS/IndexStyle.css">

    <title>UUM Parcel System</title>
</head>

<body>
    <div class="container" align="center">
        <div class="row">
            <button class="Index_Button" onclick="document.getElementById('Index_Model_SignIn').style.display='block'"
                    style="width:auto;">Sign In</button>
            <button class="Index_Button" onclick="document.getElementById('Index_Model_SignUp').style.display='block'"
                    style="width:auto;">Sign Up</button>
        </div>
    </div>

    <!-- Model for Sign In -->
    <div id="Index_Model_SignIn" class="Modal">
        <!-- Action PHP -->
        <form class="Modal-content animate" action="ProcessSignIn.php">
            <!-- Upper Part -->
            <div class="imgcontainer">
                <!-- X close model icon -->
                <span onclick="document.getElementById('Index_Model_SignIn').style.display='none'" class="Close"
                      title="Close">&times;</span>
            </div>
            <!-- Middle Input Part -->
            <div class="container">
                <label for="signin_username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="signin_username" required>
                <br>
                <label for="signin_password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="signin_password" required>
                <br>
                <label><b>Role</b></label>
                <br>
                <input type="radio" class="ModalRadioGroup" name="role" value="Staff"> Staff
                <input type="radio" class="ModalRadioGroup" name="role" value="Student"> Student
            </div>
            <!-- Bottom Button Part -->
            <div class="container" style="background-color:aquamarine" align="center">
                <button class="Index_Sign_Button" type="submit">Sign In</button>
                <button class="Index_Cancel_Button" type="button"
                        onclick="document.getElementById('Index_Model_SignIn').style.display='none'">Cancel</button>
                <!--
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw">Forgot <a href="#">password?</a></span>
                -->
            </div>
        </form>
    </div>

    <!-- Model for Sign Up -->
    <div id="Index_Model_SignUp" class="Modal">
        <!-- Action PHP -->
        <form class="Modal-content animate" action="ProcessSignUp.php">
            <div class="imgcontainer">
                <!-- X close model icon -->
                <span onclick="document.getElementById('Index_Model_SignUp').style.display='none'" class="Close"
                      title="Close">&times;</span>
            </div>

            <div class="container">
                <label for="signup_username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="signup_username" id="signup_username"
                       autocomplete="off" required>

                <label for="signup_password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="signup_password" id="signup_password"
                       required>

                <label for="signup_matrics"><b>Matrics</b></label>
                <input type="number" placeholder="Matrics Number" name="signup_matrics" id="signup_matrics"
                       autocomplete="off" required>

                <label for="signup_email"><b>Email Address</b></label>
                <input type="email" placeholder="Email Address" name="signup_email" id="signup_email"
                       autocomplete="off" required>

                <label for="signup_phone"><b>Phone Number</b></label>
                <input type="text" placeholder="Phone Number" name="signup_phone" id="signup_phone"
                       autocomplete="off" required>
            </div>

            <div class="container" style="background-color:aquamarine" align="center">
                <button class="Index_Sign_Button" type="submit">Sign Up</button>
                <button class="Index_Cancel_Button" type="button"
                        onclick="document.getElementById('Index_Model_SignUp').style.display='none'">Cancel</button>
            </div>

        </form>

</body>
</html>