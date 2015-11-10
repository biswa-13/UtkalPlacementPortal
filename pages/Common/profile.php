   <script type=text/javascript>
      function validate_profile()
      {
          if (!document.getElementById("inputFName").value)
          {
              alert("Please enter your First Name.");
              document.getElementById("inputFName").focus();
              return false;
          }
          if (!document.getElementById("inputLName").value)
          {
              alert("Please enter your Last Name.");
              document.getElementById("inputLName").focus();
              return false;
          }
          if (!document.getElementById("inputDOB").value)
          {
              alert("Please enter your Date of Birth.");
              document.getElementById("inputDOB").focus();
              return false;
          }
          if (!document.getElementById("inputFatherName").value)
          {
              alert("Please enter your Father Name.");
              document.getElementById("inputFatherName").focus();
              return false;
          }
          if (!document.getElementById("inputMotherName").value)
          {
              alert("Please enter your Mother Name.");
              document.getElementById("inputMotherName").focus();
              return false;
          }
          if (!document.getElementById("presentaddress").value)
          {
              alert("Please enter your Present Address.");
              document.getElementById("presentaddress").focus();
              return false;
          }
          if (!document.getElementById("permanentaddress").value)
          {
              alert("Please enter your Permanent Address.");
              document.getElementById("permanentaddress").focus();
              return false;
          }
      }
   </script>
    <?php
      if (isset($_GET['msg']))
      {
          print_r($_GET['msg']);
      }
    ?>
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
                          <input type="text" class="form-control" id="FName" placeholder="First Name" readonly value="<?php echo getuserfield_profile('first_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="MName" placeholder="Middle Name" readonly value="<?php echo getuserfield_profile('mid_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="LName" placeholder="Last Name" readonly value="<?php echo getuserfield_profile('last_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDOB" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="DOB" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_profile('dob', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputGender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="gender" value="Male" <?php echo (getuserfield_profile('gender',$user_id)=='M')?'checked':'';?>> Male <br>
                          <input type="radio" name="gender" value="Female" <?php echo (getuserfield_profile('gender',$user_id)=='F')?'checked':'';?>> Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="FatherName" placeholder="Father's Name" readonly value="<?php echo getuserfield_profile('father_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="MotherName" placeholder="Mother's Name" readonly value="<?php echo getuserfield_profile('mother_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="presentaddress" class="col-sm-2 control-label">Present Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="vpresentaddress" placeholder="Present Address" readonly ><?php echo getuserfield_profile('present_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="permanentaddress" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="vpermanentaddress" placeholder="Permanent Address" readonly ><?php echo getuserfield_profile('permanent_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="update">
                    <form class="form-horizontal box  box-primary" action="student_homepage.php?pid=0kdi43c7" method="post">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your Profile</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="inputFName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="First Name" value="<?php echo getuserfield_profile('first_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMName" name="inputMName" placeholder="Middle Name" value="<?php echo getuserfield_profile('mid_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="Last Name" value="<?php echo getuserfield_profile('last_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDOB" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputDOB" name="inputDOB" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_profile('dob', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputGender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="inputGender" value="Male" <?php echo (getuserfield_profile('gender',$user_id)=='M')?'checked':'';?>> Male <br>
                          <input type="radio" name="inputGender" value="Female" <?php echo (getuserfield_profile('gender',$user_id)=='F')?'checked':'';?>> Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFatherName" name="inputFatherName"  placeholder="Father's Name" value="<?php echo getuserfield_profile('father_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMotherName" name="inputMotherName" placeholder="Mother's Name" value="<?php echo getuserfield_profile('mother_name', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="presentaddress" class="col-sm-2 control-label">Present Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="presentaddress" name="presentaddress" placeholder="Present Address" ><?php echo getuserfield_profile('present_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Same as Permanent Address</label>
                        <div class="col-sm-10">
                          <input type="checkbox" name="sameaddr" value="yes"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="permanentaddress" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="permanentaddress" name="permanentaddress" placeholder="Permanent Address" ><?php echo getuserfield_profile('permanent_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" onclick="return validate()">Submit</button>&nbsp; &nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger btn-flat">Clear</button>
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
    
   <script>
      $(document).ready(function(){
        $("#update").submit(function(){
          $("#infoModal").modal("show");
        });
    });
    </script>
