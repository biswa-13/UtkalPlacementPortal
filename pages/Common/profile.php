    <div>
        <section class="content-header">
          <h1>
            Student's Profile
          </h1>
        <ol class="breadcrumb">
          <li><a href="student_homepage.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Profile</li>
        </ol>
        </section>
        <!-- Main content -->
        <section class="content">

          <div class="row">
            
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#view" data-toggle="tab"><b>View Profile</b></a></li>
                  <li><a href="#update" data-toggle="tab"><b>Update Profile</b></a></li>
                </ul>
                <div class="tab-content">
                  
                  <div class="tab-pane active" id="view">
                    <form class="form-horizontal box  box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Profile</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFName" placeholder="First Name" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMName" placeholder="Middle Name" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLName" placeholder="Last Name" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDOB" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputDOB" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="gender" value="male" checked> Male <br>
                          <input type="radio" name="gender" value="female"> Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Father's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFatherName" placeholder="Father's Name" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Mother's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMotherName" placeholder="Mother's Name" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Present Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="presentaddress" placeholder="Present Address" readonly></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Same as Permanent Address</label>
                        <div class="col-sm-10">
                          <input type="checkbox" name="sameaddr" value="yes"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="permanentaddress" placeholder="Permanent Address" readonly></textarea>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="update">
                    <form class="form-horizontal box  box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your Profile</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFName" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMName" placeholder="Middle Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLName" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDOB" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputDOB" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="gender" value="male" checked> Male <br>
                          <input type="radio" name="gender" value="female"> Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Father's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFatherName" placeholder="Father's Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Mother's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMotherName" placeholder="Mother's Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Present Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="presentaddress" placeholder="Present Address"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Same as Permanent Address</label>
                        <div class="col-sm-10">
                          <input type="checkbox" name="sameaddr" value="yes"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="permanentaddress" placeholder="Permanent Address"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
    </div>