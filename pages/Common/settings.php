   <!-- Start : Parent Container -->
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
                          <input type="text" class="form-control" id="username" placeholder="Username" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">EMail ID</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="emailid" placeholder="EMail ID" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Mobile Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="mobileno" placeholder="Mobile Number" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Registeration Date</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="regdate"  readonly placeholder="Date of Registeration in Utkal Portal">
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                  <div class="tab-pane" id="changepassword">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your Password</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassword" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Verify</button>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="newpass" placeholder="New Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Confirm New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="confirmpass" placeholder="Confirm Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>

                  <div class="tab-pane" id="deleteaccount">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Delete Your Account</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Enter Your Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassword" placeholder="Your Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Verify</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="changeemail">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your EMail ID</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassword" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Verify</button>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New EMail ID</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="newemail" placeholder="New EMail">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="changemobile">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Change Your EMail ID</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassword" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Verify</button>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">New Mobile Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="newmobile" placeholder="New Mobile Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
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
