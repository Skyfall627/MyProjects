<?php 
session_start();

// STEP 1: Initializing the variables

$username = "";
$ID    = "";
$errors = array(); 

// STEP 2: Connection to the Database
$db = mysqli_connect('localhost', 'root', '', 'coursework');


$ID = mysqli_real_escape_string($db, $_SESSION['ID']);
$fname = "SELECT username FROM members WHERE ID = $ID";
$ffname = mysqli_query($db, $fname);
$name = mysqli_fetch_array($ffname);

// WHEN SESSION IS DONE

$deleteG = "DELETE FROM grades";
$deleteM = "DELETE FROM members";

// PART IV: SUBMITION IN INDEX.PHP

if (isset($_POST['grade_user'])) {
    
 $case = "UPDATE grades
 SET grade_letter = CASE WHEN grade >= 70 THEN 'A'
                         WHEN grade >= 60 AND grade <= 69 THEN 'B'
                         WHEN grade >= 50 AND grade <= 59 THEN 'C'
                         WHEN grade < 50 THEN 'F'
  END;";
  
 $case2 = "UPDATE grades
 SET	award =	 CASE WHEN grade_letter = 'A' THEN 'Distinction'
                      WHEN grade_letter = 'B' THEN 'Merit'
                      WHEN grade_letter = 'C' THEN 'Pass'
                      WHEN grade_letter = 'F' THEN 'Fail'
  END;";

 $case3 = "UPDATE grades
 SET	module_name = CASE WHEN MID = 'COMP7001' THEN 'Object Oriented Programming'
    WHEN MID = 'COMP7002' THEN 'Modern Computer Systems'
    WHEN MID = 'DALT7002' THEN 'Data Science Fondation'
    WHEN MID = 'DALT7011' THEN 'Introduction to Machine Learning'
    WHEN MID = 'SOFT7003' THEN 'Advanced Software Development'
    WHEN MID = 'TECH7004' THEN 'Cyber Security and the Web'
    WHEN MID = 'TECH7005' THEN 'Research, Scholarship and Professional Skills'
    WHEN MID = 'TECH7009' THEN 'MSc Dissertation in Computing Subjects'
  END;";



 $grade = mysqli_real_escape_string($db, $_POST['MG']);
 $MID = mysqli_real_escape_string($db, $_POST['MID']);
 $ID = mysqli_real_escape_string($db, $_SESSION['ID']);
 $credit = mysqli_real_escape_string($db, $_POST['credit']);

 $query = "SELECT * FROM modules WHERE MID='$MID' LIMIT 1";
 $results = mysqli_query($db, $query);
 $user = mysqli_fetch_assoc($results);

 $query2 = "DELETE FROM grades WHERE MID='$MID' LIMIT 1";
 $send = "INSERT INTO grades (ID, MID, grade, credit) VALUES ($ID, '$MID', '$grade', '$credit')";

 if (isset($user['MID']) && $user['MID'] === $MID) { 
    mysqli_query($db, $query2);
    mysqli_query($db, $send);
    mysqli_query($db, $case); 
    mysqli_query($db, $case2);
    mysqli_query($db, $case3); 
   } else if (!isset($user['MID'])){
      array_push($errors, "Module ID is incorrect");
   }
   else {
    mysqli_query($db, $send);
 }

}
 


// PART IV: SHOW GRADES IN PROFILE.PHP


$srq1 = "SELECT * FROM grades WHERE MID = 'COMP7001'";
$srq2 = "SELECT * FROM grades WHERE MID = 'COMP7002'";
$srq3 = "SELECT * FROM grades WHERE MID = 'TECH7004'";
$srq4 = "SELECT * FROM grades WHERE MID = 'TECH7005'";
$srq5 = "SELECT * FROM grades WHERE MID = 'TECH7009'";
$srq6 = "SELECT * FROM grades WHERE MID = 'DALT7002'";
$srq7 = "SELECT * FROM grades WHERE MID = 'DALT7011'";
$srq8 = "SELECT * FROM grades WHERE MID = 'SOFT7003'";

// Rows display but for each cell [look in profile.php]

$AB = mysqli_query($db, $srq1);
$AC = mysqli_query($db, $srq1);
$AD = mysqli_query($db, $srq1);
$AE = mysqli_query($db, $srq1);
$AF = mysqli_query($db, $srq1);
$AG = mysqli_query($db, $srq1);


$BB = mysqli_query($db, $srq2);
$BC = mysqli_query($db, $srq2);
$BD = mysqli_query($db, $srq2);
$BE = mysqli_query($db, $srq2);
$BF = mysqli_query($db, $srq2);
$BG = mysqli_query($db, $srq2);

$CB = mysqli_query($db, $srq3);
$CC = mysqli_query($db, $srq3);
$CD = mysqli_query($db, $srq3);
$CE = mysqli_query($db, $srq3);
$CF = mysqli_query($db, $srq3);
$CG = mysqli_query($db, $srq3);

$DB = mysqli_query($db, $srq4);
$DC = mysqli_query($db, $srq4);
$DD = mysqli_query($db, $srq4);
$DE = mysqli_query($db, $srq4);
$DF = mysqli_query($db, $srq4);
$DG = mysqli_query($db, $srq4);

$EB = mysqli_query($db, $srq5);
$EC = mysqli_query($db, $srq5);
$ED = mysqli_query($db, $srq5);
$EE = mysqli_query($db, $srq5);
$EF = mysqli_query($db, $srq5);
$EG = mysqli_query($db, $srq5);

$FB = mysqli_query($db, $srq6);
$FC = mysqli_query($db, $srq6);
$FD = mysqli_query($db, $srq6);
$FE = mysqli_query($db, $srq6);
$FF = mysqli_query($db, $srq6);
$FG = mysqli_query($db, $srq6);

$GB = mysqli_query($db, $srq7);
$GC = mysqli_query($db, $srq7);
$GD = mysqli_query($db, $srq7);
$GE = mysqli_query($db, $srq7);
$GF = mysqli_query($db, $srq7);
$GG = mysqli_query($db, $srq7);

$HB = mysqli_query($db, $srq8);
$HC = mysqli_query($db, $srq8);
$HD = mysqli_query($db, $srq8);
$HE = mysqli_query($db, $srq8);
$HF = mysqli_query($db, $srq8);
$HG = mysqli_query($db, $srq8);



// FINAL PART : MATH 

$pff = "SELECT AVG(`grade`) FROM grades";
$average = mysqli_query($db, $pff);
$avg = mysqli_fetch_assoc($average);

$more = "SELECT SUM(`credit`) FROM grades WHERE grade > 49";
$summon = mysqli_query($db, $more);
$sum = mysqli_fetch_assoc($summon);

$diss = "SELECT grade FROM grades WHERE MID = 'TECH7009'";
$disss = mysqli_query($db, $diss);
$tech = mysqli_fetch_assoc($disss);


$pass = " ";
$failed = "Fail";
$fail = "You have failed";
$master = "MSc in Computing Science";
$pgdip = "PG Diploma in Computing";
$merit = "Merit";
$distinct = "Distinction";



?>