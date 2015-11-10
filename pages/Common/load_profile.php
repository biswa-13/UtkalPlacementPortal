<?php
    require "Pages/Common/showInformation.php";
    $fname = $_POST['inputFName'];
    $mname = $_POST['inputMName'];
    $lname = $_POST['inputLName'];
    $dob = $_POST['inputDOB'];
    $father = $_POST['inputFatherName'];
    $mother = $_POST['inputMotherName'];
    $preadd = $_POST['presentaddress'];
    $peradd = $_POST['permanentaddress'];
    $gender = $_POST['inputGender'];
    
     $status = load_profile($user_id, $fname, $mname, $lname, $dob, $gender, $father, $mother, $preadd, $peradd);

     if ($status)
     {
          $msg = "Updation Successful";
          header("Location: student_homepage.php?pid=7pr8yhf0&msg=$msg");
     }
     else
     {
          $msg = "Updation Failure";
          header("Location: student_homepage.php?pid=7pr8yhf0&msg=$msg");
     }

?>



<div>
     <!-- Start : Top BreadCrumb -->
     <section class="content-header">
      <h1>
       Student's Redirection
      </h1>
      <ol class="breadcrumb">
        <li><a href="student_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
    <!-- Finish : Top BreadCrumb -->

    <!-- Start : Main Content -->
    <section class="content">
     <div class="row">
          <!-- Start : Page Content Container -->
          <div class="col-md-12">
               

               <!-- Finish : Page Content Codings -->
          </div>
          <!-- Finish : Page Content Container -->
     </div>

    </section>
    <!-- Finish : Main Content -->
</div>
<!-- Finish : Parent Container -->
