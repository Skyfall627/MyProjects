<?php include('server2.php') ?>
<?php 

  if (!isset($_SESSION['ID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['Logout'])) {
  	session_destroy();
  	unset($_SESSION['ID']);
  	header("location: login.php");
  }
?>

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
    <link rel="stylesheet" href="style.css">

    <title>Marking Page </title>
</head>
<body>

<!-- Navigation Bar -->

<div id="Hamburger" class="rightbar">
  <a> Welcome <?php echo $name['username'] ?> !</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="profile.php" class="PP">Grades</a>
  <a href="index.php" class="II">Home</a>
  <a <?php /* WHEN SESSION IS DONE
        $deleteG = "DELETE FROM grades";
        $deleteM = "DELETE FROM members";
        mysqli_query($db, $deleteG);
        mysqli_query($db, $deleteG);
        */ ?>
href="login.php?logout='1'" class="LL">Logout</a>
</div>

<div class="burger">
<i onclick="openNav()" class="uil uil-bars"></i>
</div>

<!-- Grade Form -->
<div class="container">
        <div class="forms"> 

            <div class="form grade">
                <span class="title">Grading</span>

                <form method="POST" action="index.php" name="grader" onsubmit="return validateForm()">
                <?php include('errors.php') ?>
                <div class="input-field">
                        <input type="text" name="MID" placeholder="Enter your Module ID" required>
                        <i class="uil uil-books"></i>
                        </div>

                <div class="input-field">
                        <input type="number" name="credit" placeholder="Enter your Module Credit" required>
                        <i class="uil uil-percentage"></i>
                        </div>

                <div class="input-field">
                        <input type="number" name="MG" placeholder="Enter your Module Mark" required>
                        <i class="uil uil-bookmark"></i>
                        </div>

                <div class="input-field button">
                        <button type="submit" class="button" name="grade_user" value="Submit Now!">Submit Now!</button>
                        <i class="uil uil-archive"></i>
                        </div>  

                </form>
            </div>
        </div>
            
</div>


<script src="script.js"></script>
</body>
</html>