<?php
    
    $dept = $_POST['inputDept'];
    $roll = $_POST['inputRoll'];
    $regno = $_POST['inputRegno'];
    $board10 = $_POST['inputBoard10'];
    $pass10 = $_POST['inputPass10'];
    $percent10 = $_POST['inputPercent10'];
    $boardinter = $_POST['inputBoardInter'];
    $passinter = $_POST['inputPassInter'];
    $percentinter = $_POST['inputPercentInter'];
    $graduniv = $_POST['inputGradUniv'];
    $gradcourse = $_POST['inputGradCourse'];
    $gradjoindate = $_POST['inputGradJDate'];
    $gradpassdate = $_POST['inputGradPDate'];
    $gradpercent = $_POST['inputGradPercent'];
    $pgcourse = $_POST['inputPGCourse'];
    $pgjoindate = $_POST['inputPGJDate'];
    $pgpassdate = $_POST['inputPGPDate'];
    $pgpercent = $_POST['inputPGPercent'];

     $status = load_academics($user_id, $dept, $roll, $regno, $board10, $pass10, $percent10, $boardinter, $passinter, $percentinter, $graduniv, $gradcourse, $gradjoindate, $gradpassdate, $gradpercent, $pgcourse, $pgjoindate, $pgpassdate, $pgpercent);

     if ($status)
     {
          $msg = "Updation Successful";
          header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
     }
     else
     {
          $msg = "Updation Failed";
          header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
     }

?>