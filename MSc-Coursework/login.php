<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">

    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="main.css">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="forms">

            <!-- Login Form -->

            <div class="form login">
                <span class="title">Login</span>

                <?php include('errors.php') ?>
                <form method="POST" action="login.php" name="loger" onsubmit="return validateForm()">

                    <div class="input-field">
                        <input type="number" name="ID" placeholder="Enter your Student ID" required>
                        <i class="uil uil-at icon"></i>
                        </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your Password" required>
                        <i class="uil uil-padlock icon"></i>
                        <i class="uil uil-eye-slash showpw"></i> 
                        </div>
                    <div class="input-field button">
                    <button type="submit" class="button" name="login_user" value="Login Now!">Login Now!</button>
                        <i class="uil uil-signin Go"></i>
                        </div>  
                </form>
                <div class="login-register">
                    <span class="text">No Account?
                        <a href="register.php" id="LRG" class="text register-link">Register Here!</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>