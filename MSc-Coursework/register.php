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
    
    <title>Registration</title>
</head>
<body>
    <div class="container active">
        <div class="forms">

         <!-- Registration Form -->
            
         <div class="form register">
                <span class="title">Registration</span>
                
                <form method="POST" action="register.php" name="regg" onsubmit="return validateForm()">
                <?php include('errors.php') ?>

                    <div class="input-field">
                        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your name" required>
                        <i class="uil uil-user-square"></i>
                        </div>

                    <div class="input-field">
                        <input type="number" name="ID" value="<?php echo $ID; ?>" placeholder="Enter your Student ID" required>
                        <i class="uil uil-at icon"></i>
                        </div>    

                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Create New Password" required>
                        <i class="uil uil-padlock icon"></i> 
                        </div>

                    <div class="input-field">
                        <input type="password" class="password" name="cpassword" placeholder="Confirm New Password" required>
                        <i class="uil uil-padlock icon"></i>
                        <i class="uil uil-eye-slash showpw"></i> 
                        </div>

                    <div class="input-field button">
                        <button type="submit" class="button" name="reg_user" value="Register Now!">Register Now!</button>
                        <i class="uil uil-signin Go"></i>
                        </div>
                </form>

                <div class="login-register">
                    <span class="text">Already have an Account?
                        <a href="login.php" id="LRG" class="text login-link">Login Here!</a>
                    </span>
                </div>
 
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>
