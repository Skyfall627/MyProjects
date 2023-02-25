<?php
session_start();

// STEP 1: Initializing the variables

$username = "";
$ID    = "";
$errors = array(); 


// STEP 2: Connection to the Database
$db = mysqli_connect('localhost', 'root', '', '');

// Check Connection

if(!$db) {
  die('Unable to connect to database'.mysqli_connect_error());
}


// LOAD DATABASE
// get data from the SQL file
$getSqlFile = file_get_contents("CourseworkDB.sql");

// execute the SQL
if (mysqli_multi_query($db, $getSqlFile)){
  echo "Success";
  $db = mysqli_connect('localhost', 'root', '', 'coursework');
}
else {
  echo "Fail";
}



// PART I: REGISTRATION..... Reminder: Commit option

if (isset($_POST['reg_user'])) {

// STEP 3: Receival of all input values from the Registration form to a legal SQL string that can be used in an SQL statement

  $username = mysqli_real_escape_string($db, $_POST['username']);

  $ID = mysqli_real_escape_string($db, $_POST['ID']);
  
  $rpassword = mysqli_real_escape_string($db, $_POST['password']);
  
  $cpass = mysqli_real_escape_string($db, $_POST['cpassword']);

// STEP 4: Additional Form validation
  
  if ($rpassword !== $cpass) { array_push($errors, "The two passwords do not match"); }

// STEP 5: First let's check the database to make sure that a user does not already exist with the same username or ID or both

  $verify_query = "SELECT * FROM members WHERE username='$username' OR ID='$ID' LIMIT 1";
  $result = mysqli_query($db, $verify_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['ID'] === $ID) {
      array_push($errors, "ID already exists");
    }
    
  }

// STEP 6: Registeration of the user if there are no errors

  if (count($errors) == 0) {
  	$password = md5($rpassword);  // Adding a password encryption before sending it to the database for better security

  	$query = "INSERT INTO members (username, ID, password) VALUES ('$username', '$ID', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['ID'] = $ID;
  	$_SESSION['success'] = "You are now logged in";
    echo "Data Successfully Entered";
  	header('location: login.php');

  }
  
}
 
// PART I: LOGIN USER

if (isset($_POST['login_user'])) {
  
  $ID = mysqli_real_escape_string($db, $_POST['ID']);
  $rpassword = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($ID)) {
      array_push($errors, "User ID is required");
  }
  if (empty($rpassword)) {
      array_push($errors, "Password is required");
  }
 
  if (count($errors) == 0) {
      $password = md5($rpassword);
      $query = "SELECT * FROM members WHERE ID='$ID' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['ID'] = $ID;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
          array_push($errors, "Wrong ID or Password, Please try again");
      }
  }
}

if(ISSET($_POST['save'])){
  $name = $_POST['name'];
  $prelim = $_POST['prelim'];
  $midterm = $_POST['midterm'];
  $endterm = $_POST['endterm'];


}

  ?>