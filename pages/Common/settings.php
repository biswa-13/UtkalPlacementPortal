<SCRIPT TYPE="text/javascript">

  <script type="text/javascript">
      function process_cp(str)
      {
        var xhttp;

        if(window.XMLHttpRequest) {
        //code for modern browsers
        xhttp = new XMLHttpRequest();
        } else  {
        //code for IE6 and before
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xhttp.onreadystatechange = function() {

        if(xhttp.readyState == 4 && xhttp.status == 200)  {
            document.getElementById("cp_status").innerHTML = xhttp.responseText;
          }
        };

        xhttp.open("GET", "Pages/Common/check_currpass.php", true);
        xhttp.send();
      }
    </script>


</SCRIPT>

<?php
  if (isset($_GET['settings_msg']))
  {
    print_r($_GET['settings_msg']);
  }
?>

<div>
  <!-- Start : Top BreadCrumb -->
  <section class="content-header">
      <h1>
       Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="student_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Settings</li>
      </ol>
    </section>
    <!-- Finish : Top BreadCrumb -->

    <!-- Start : Main Content -->
    <section class="content">
      <div class="row">
        <!-- Start : Page Content Container -->
        <div class="col-md-12">
          <!-- Start : Page Content Codings -->
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#account" data-toggle="tab"><b>Your Account</b></a></li>
                  <li><a href="#changepassword" data-toggle="tab"><b>Change Password</b></a></li>
                  <li><a href="#changeemail" data-toggle="tab"><b>Change Email ID</b></a></li>
                  <li><a href="#changedp" data-toggle="tab"><b>Change Profile Picture</b></a></li>
                  <li><a href="#changemobile" data-toggle="tab"><b>Change Mobile Number</b></a></li>
                  <li><a href="#deleteaccount" data-toggle="tab"><b>Delete Account</b></a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="account">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Account</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="username" placeholder="Username" readonly value="<?php echo getuserfield_settings('user_name', $user_id);?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">EMail ID</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="emailid" placeholder="EMail ID" readonly value="<?php echo getuserfield_settings('mail_id', $user_id);?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Mobile Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="mobileno" placeholder="Mobile Number" readonly value="<?php echo getuserfield_settings('mobile_no', $user_id);?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Registeration Date</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="regdate"  readonly placeholder="Date of Registeration in Utkal Portal" value="<?php echo getuserfield_settings('today_date', $user_id);?>">
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                  <div class="tab-pane" id="changepassword">
                    <form class="form-horizontal box box-primary" id="changepassform" action="student_homepage.php?pid=9rmm32c6" method="POST">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your Password</h3>
                      </div>
                      <br>
                      <div class="form-group" action="update_password.php">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpasswordcp" required placeholder="Current Password" name="cpassword" onkeyup="process_cp(this.value)"><br>
                        </div>
                      </div>
                      <br>
                    <div id="newpassdiv">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="newpass" required placeholder="New Password" name="newpass">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Confirm New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="confirmpass" required placeholder="Confirm Password" name="confirmpass">
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>

                  <div class="tab-pane" id="deleteaccount">
                    <form class="form-horizontal box box-primary" action="student_homepage.php?pid=8cmp43e2" method="POST">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Delete Your Account</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Enter Your Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassworddl" required placeholder="Your Password" onkeyup="process(this.value)">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="changeemail">
                    <form class="form-horizontal box box-primary" action="student_homepage.php?pid=17yxc0pq" method="POST">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your EMail ID</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpasswordce" required name="cpasswordce" placeholder="Current Password" onkeyup="process(this.value)">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New EMail ID</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="newemail" required name="newemail" placeholder="New EMail">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="changedp">
                    <div class="box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your Profile Picture</h3>
                      </div>
                      <br>
                      <img src="<?php echo $dp_name;?>" class="img-responsive" alt="User Image" height=300 width=200>
                      <form action="student_homepage.php?pid=73bwr8fx" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputFile" >Browse Your File</label>
                            <input type="file" name="file">
                          </div>
                        </div>
                        <div class="box-footer">
                          <input type="submit" value="Upload" class="btn btn-primary">&nbsp; &nbsp;
                          <a href="student_homepage.php?pid=73bwr8fy" class="btn btn-danger"><span class="fa fa-trash"></span>&nbsp; Remove Picture</a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane" id="changemobile">
                    <form class="form-horizontal box box-primary" action="student_homepage.php?pid=69qrt3lw" method="POST">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your EMail ID</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpasswordmb" required name="cpasswordmb" placeholder="Current Password" onkeyup="process(this.value)">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New Mobile Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="newmobile" name="newmobile" required placeholder="New Mobile Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
        <!-- Finish : Page Content Codings -->
        </div>
        <!-- Finish : Page Content Container -->
      </div>

    </section>
    <!-- Finish : Main Content -->
</div>
<!-- Finish : Parent Container -->
