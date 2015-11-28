<?php
  require "Pages/Common/core.php";
  require 'Pages/Common/showInformation.php';
  require 'Pages/Common/contactUs.php';

  $user_id = $_SESSION['user_id'];
  activate_user($user_id);

  $username = getuserfield_settings('user_name', $user_id);

  if (isset($_GET['pid']))
  {
    $page = $_GET['pid'];
  }
  else
  {
    $page = '1hm12ux7';
  }

  if (file_exists('uploads/'.$username.'_dp.jpg'))
  {
    $dp_ext = 'jpg';
    $dp_name = 'uploads/'.$username.'_dp.jpg';
  }
  elseif(file_exists('uploads/'.$username.'_dp.JPG'))
  {
    $dp_ext = 'JPG';
    $dp_name = 'uploads/'.$username.'_dp.JPG';
  }
  elseif(file_exists('uploads/'.$username.'_dp.jpeg'))
  {
    $dp_ext = 'jpeg';
    $dp_name = 'uploads/'.$username.'_dp.jpeg';
  }
  elseif(file_exists('uploads/'.$username.'_dp.JPEG'))
  {
    $dp_ext = 'JPEG';
    $dp_name = 'uploads/'.$username.'_dp.JPEG';
  }
  elseif(file_exists('uploads/'.$username.'_dp.PNG'))
  {
    $dp_ext = 'PNG';
    $dp_name = 'uploads/'.$username.'_dp.PNG';
  }
  elseif(file_exists('uploads/'.$username.'_dp.png'))
  {
    $dp_ext = 'png';
    $dp_name = 'uploads/'.$username.'_dp.png';
  }
  else
  {
    $dp_name = 'uploads/default_user_icon.jpg';
  }

  if(file_exists('uploads/'.$username.'_cv.doc')) {
    $cv_ext = 'doc';
    $cv_name = 'uploads/'.$username.'_cv.doc';
  }

  elseif(file_exists('uploads/'.$username.'_cv.docx'))  {
    $cv_ext = 'docx';
    $cv_name = 'uploads/'.$username.'_cv.docx';
  }

  elseif(file_exists('uploads/'.$username.'_cv.pdf'))  {
    $cv_ext = 'pdf';
    $cv_name = 'uploads/'.$username.'_cv.pdf';
  }
  else
  {
    $cv_name = 'uploads/cv_upload.jpg';
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="images/gif" sizes="16x16">
    <title>Utkal Placement Portal</title>

    <noscript>
      <meta http-equiv="Refresh" content="0;Pages/Common/enableJavaScript.php">
      <?php if(basename($_SERVER['REQUEST_URI']) != "Pages/Common/enableJavaScript.php"){ ?>
          <meta http-equiv="Refresh" content="0;Pages/Common/enableJavaScript.php">
      <?php } ?>
   </noscript>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
    
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link href="plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Style File  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!--Styles required for DataTable -->
    <link rel="stylesheet" type="text/css" href="plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">


    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <noscript>
  This page needs JavaScript activated to work. 
  </noscript>
    <div class="wrapper" style="margin-top:-20px;">

      <header class="main-header">

        <!-- Logo -->
        <a href="student_homepage.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="images/uulogo.png" height="50" width="50"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="images/uulogo.png" height="35" width="35">&nbsp;<b>Utkal University</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="nav navbar-nav">
                 <a href="student_homepage.php?pid=1hm12ux7" class="logo-lg">
                   <span class="fa fa-home"></span>
                 </a>
              </li>

              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have no messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <!-- <ul class="menu">
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul> -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 0 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                     <!--  <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li> -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 0 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                     <!--  <li>
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img id="toprightimg" src="<?php echo $dp_name;?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo getuserfield_settings('user_name', $user_id); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img id="toprightdropdownimg" src="<?php echo $dp_name;?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo get_name($user_id); ?>
                      <small>Registered since <?php echo getuserfield_settings('today_date', $user_id); ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left"><a href="student_homepage.php?pid=6st16yz9" class="btn btn-info "><i class="fa fa-cog"></i>&nbsp; Settings</a></div>
                    <div class="pull-right"><a href="student_homepage.php?pid=81fgc3tx" class="btn btn-default "><i class="fa fa-power-off"></i> Sign Out</a></div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img id="topleftimg" src="<?php echo $dp_name;?>" class="img img-circle user-image" alt="User Image" style="height : 50px !important;width:: 50px !important;">
            </div>
            <div class="pull-left info">
              <p><?php echo get_name($user_id); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form .....
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" id="studentMenu">
            <li class="header">YOUR MENU</li>
            <li class="treeview">
              <a href="student_homepage.php?pid=2ac17nw3">
                <i class="glyphicon glyphicon-education"></i> <span>Academics</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="student_homepage.php?pid=7pr8yhf0">
                <i class="glyphicon glyphicon-user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class=" treeview">
              <a href="student_homepage.php?pid=no90kl13">
                <i class="fa fa-institution"></i> <span>Departments</span></i>
              </a>
            </li>
            <li class=" treeview">
              <a href="student_homepage.php?pid=i29wls18">
                <i class="fa fa-user-secret"></i> <span>Employers</span></i>
              </a>
            </li>
            <li>
              <a href="student_homepage.php?pid=6st16yz9">
                <i class="fa fa-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <!--
            <li>
              <a href="Pages/Common/calender.php">
                <i class="fa fa-calender"></i>
                <span>Calendar</span>
                <small class="label pull-right bg-red">0</small>
              </a>
            </li>
            <li>
              <a href="student_homepage.php?pid=8xfh24kl">
                <i class="fa fa-envelope"></i> <span>Inbox</span>
                <small class="label pull-right bg-yellow">0</small>
              </a>
            </li>
            <!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-commenting"></i> <span>Chat with Placement Cell</span></i>
              </a>
            </li>
            --> 
            <li class="treeview">
              <a onClick = "showContactUsForm()">
                <i class="fa fa-phone"></i> <span>Contact Us</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="student_homepage.php?pid=5dp21t6b">
                <i class="fa fa-star"></i> <span>Developer's Page</span></i>
              </a>
            </li>            
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="studentContainer">
          <?php

              if ($page === '1hm12ux7')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/StudentPanel/home.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '2ac17nw3')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/StudentPanel/academics.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '3ca88io1')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/StudentPanel/cvupload.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '3ca88io2')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/StudentPanel/cvremove.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '4ib63ty7')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/StudentPanel/load_academics.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '5dp21t6b')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/developers.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '6st16yz9')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/settings.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '73bwr8fx')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/update_dp.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '73bwr8fy')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/remove_dp.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '7pr8yhf0')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/profile.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '8cmp43e2')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/compose.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '9rmm32c6')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/update_password.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '9rmm32c8')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/check_currpass.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '0kdi43c7')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/load_profile.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '17yxc0pq')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/update_email.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else
              if ($page === '69qrt3lw')
              {
                if (check_activation($user_id) == 1)
                {
                  include 'Pages/Common/update_mobile.php';
                }
                else
                {
                  include 'Pages/Common/logout.php';
                }
              }
              else if ($page === '81fgc3tx')
              {
                  include 'Pages/Common/logout.php';
              }  
              else if ($page === 'no90kl13')
              {
                  include 'Pages/StudentPanel/departments.php';
              }
              else if ($page === 'i29wls18')
              {
                  include 'Pages/StudentPanel/employers.php';
              }
             /* else if ($page === 'uz90po6g')
              {
                  include 'Pages/Common/contactUs.php';
              }*/
              else
              {
                include 'Pages/StudentPanel/home.php';
              }
          ?>
      </div>

    </div><!-- ./wrapper -->

    <footer class="main-footer">
        <center>
          <strong>Copyright &copy; <?php echo date ("Y") ?> <a href="#">PLACEMENT CELL UTKAL UNIVERSITY</a>.<br></strong>
          <strong>Developed & Maintained By</strong> 
          <strong><a href="#">Students of Integrated MCA & MTech-CSE, Utkal University</a></strong>
        </center>
      </footer>

    <aside class="control-sidebar control-sidebar-dark">
      <div class="tab-content">
        <div class="tab-pane" id="control-sidebar-home-tab">
        </div>
      </div>
    </aside>
      

    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- FormValidator Refernece -->
    <script type="text/javascript" src="js/formValidator.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
  </body>
</html>
