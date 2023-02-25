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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    
    <title>Marking Page</title> 
</head>
<body>

<!-- Navigation Bar -->

<div id="Hamburger" class="rightbar">
  <a>Welcome <?php echo $name['username'] ?> !</a>
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


<!-- Gradings -->
<div class="container">
<div class="form">
        <div class="grade_form">
                <span class="title">Grades :</span>

                <form method="GET" action="profile.php">
        
            <table class="marking_page">
            <thead>
            <tr class="active_row">
                <th>Module ID</th>
                <th>Module Name</th>
                <th>Credits</th>
                <th>Marks</th>
                <th>Grades</th>
                <th>Award</th>
            </tr>
            </thead>
            <tbody>

                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($AB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($AC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($AD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($AE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($AF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($AG)) {echo $row['award'];} ?> </td>
                </tr>
                            
                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($BB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($BC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($BD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($BE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($BF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($BG)) {echo $row['award'];} ?> </td>
                </tr>
                
                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($CB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($CC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($CD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($CE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($CF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($CG)) {echo $row['award'];} ?> </td>
                </tr>

                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($DB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($DC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($DD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($DE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($DF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($DG)) {echo $row['award'];} ?> </td>
                </tr>

                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($EB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($EC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($ED)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($EE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($EF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($EG)) {echo $row['award'];} ?> </td>
                </tr>

                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($FB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($FC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($FD)) {echo $row['credit'];} ?> </td>
                
                    <td class="grade"> <?php while($row = mysqli_fetch_array($FE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($FF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($FG)) {echo $row['award'];} ?> </td>
                </tr>

                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($GB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($GC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($GD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($GE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($GF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($GG)) {echo $row['award'];} ?> </td>
                </tr>
                
                <tr> 
                    
                    <td> <?php while($row = mysqli_fetch_array($HB)) {echo $row['MID'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($HC)) {echo $row['module_name'];} ?> </td>
                    
                    <td class="credit"> <?php while($row = mysqli_fetch_array($HD)) {echo $row['credit'];} ?> </td>
                    
                    <td class="grade"> <?php while($row = mysqli_fetch_array($HE)) {echo $row['grade'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($HF)) {echo $row['grade_letter'];} ?> </td>
                    
                    <td> <?php while($row = mysqli_fetch_array($HG)) {echo $row['award'];} ?> </td>
                </tr>


            </tbody>
            </table>

            <table class="marking_page" id="total">
            <thead>
            <tr class="active_row">
                <th>Total of Credits</th>
                <th>Award</th>
                <th>Average</th>
                <th>Classification</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                    <td><?php echo $sum['SUM(`credit`)'] ?></td>
                    
                    <td>
                    <?php if($sum['SUM(`credit`)'] == 180){
                            echo $master;
                            } else if($sum['SUM(`credit`)'] >= 120 && $sum['SUM(`credit`)'] < 179){
                            echo $pgdip;
                            } else if($sum['SUM(`credit`)'] < 120) {
                            echo $fail;
                            } ?>
                    </td>
                    
                    <td><?php echo $avg['AVG(`grade`)']; ?></td>
                    
                    <td>
                    <?php if( $avg['AVG(`grade`)'] >= 70 && $tech >= 68){
                            echo $distinct;
                            } else if($avg['AVG(`grade`)'] >= 60 && $avg['AVG(`grade`)'] <= 69 && $tech >= 58 ){
                            echo $merit;
                            } else if($avg['AVG(`grade`)'] >= 50 && $avg['AVG(`grade`)'] <= 59){
                            echo $pass;
                            } else {
                            echo $failed;
                            } ?>
                    </td>
            
            </tr>
            </tbody>
            </table>
            

                </form>
            </div>
        </div>    
</div>
</div>


<script src="script.js"></script>
</body>
</html>