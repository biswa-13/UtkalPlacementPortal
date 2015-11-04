<?php
  if (isset($_GET['pid']))
  {
    $page = $_GET['pid'];
  }
  else
  {
    $page = '1hm12ux7';
  }
?>

<?php 
  require 'Pages/Common/dbconnect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student's Home</title>
    <!-- Tell the browser to be responsive to screen width -->
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
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
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
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Student's Name</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Student's Name
                      <small>Registered since Nov. 2012</small>
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
                    <div class="pull-right"><a href="#" class="btn btn-default "><i class="fa fa-power-off"></i> Sign Out</a></div>
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div> -->
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
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Student's Name</p>
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
            
            <li>
              <a href="student_homepage.php?pid=3ca88io1">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">0</small>
              </a>
            </li>
            <li>
              <a href="student_homepage.php?pid=4ib63ty7">
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
                include 'Pages/StudentPanel/home.php';
              }
              else
              if ($page === '2ac17nw3')
              {
                include 'Pages/StudentPanel/academics.php';
              }
              else
              if ($page === '3ca88io1')
              {
                include 'Pages/StudentPanel/cvupload_final.php';
              }
              else
              if ($page === '4ib63ty7')
              {
                include 'Pages/Common/inbox.php';
              }
              else
              if ($page === '5dp21t6b')
              {
                include 'Pages/Common/developers.php';
              }
              else
              if ($page === '6st16yz9')
              {
                include 'Pages/Common/settings.php';
              }
              else
              if ($page === '7pr8yhf0')
              {
                include 'Pages/Common/profile.php';
              }
              else
              if ($page === '8cmp43e2')
              {
                include 'Pages/Common/compose.php';
              }
              else
              if ($page === '9rmm32c6')
              {
                include 'Pages/Common/read-mail.php';
              }
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
      

        <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>


    
  </body>
</html>
