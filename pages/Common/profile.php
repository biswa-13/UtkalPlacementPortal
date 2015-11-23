   <script type=text/javascript>
      function validate()
      {
          var name_exp = /^[a-zA-Z]+$/;

          if (document.getElementById("inputFName").value == '')  {
            return true;
          }
          else if (document.getElementById("inputFName").value.charAt(0) == ' ') {
            alert("First name must not contain spaces in front.")
            document.getElementById("inputFName").value = '';
            document.getElementById("inputFName").focus();
            return false;
          }
          else if (!document.getElementById("inputFName").value.match(name_exp))  {
            alert("First name must contain alphabets only.")
            document.getElementById("inputFName").value = '';
            document.getElementById("inputFName").focus();
            return false;
          }

          if (document.getElementById("inputLName").value == '')  {
            return true;
          }
          else if (document.getElementById("inputLName").value.charAt(0) == ' ') {
            alert("Last name must not contain spaces.")
            document.getElementById("inputLName").value = '';
            document.getElementById("inputLName").focus();
            return false;
          }
          else if (!document.getElementById("inputLName").value.match(name_exp))  {
            alert("Last name must contain alphabets only.")
            document.getElementById("inputLName").value = '';
            document.getElementById("inputLName").focus();
            return false;
          }


          var parent_name_exp = /^[a-z A-Z]+$/;
          if (document.getElementById("inputFatherName").value == '')  {
            return true;
          }
          else if (document.getElementById("inputFatherName").value.charAt(0) == ' ') {
            alert("Father's name must not contain spaces in front.")
            document.getElementById("inputFatherName").value = '';
            document.getElementById("inputFatherName").focus();
            return false;
          }
          else if (!document.getElementById("inputFatherName").value.match(parent_name_exp))  {
            alert("Father's name must contain alphabets only.")
            document.getElementById("inputFatherName").value = '';
            document.getElementById("inputFatherName").focus();
            return false;
          }


          if (document.getElementById("inputMotherName").value == '')  {
            return true;
          }
          else if (document.getElementById("inputMotherName").value.charAt(0) == ' ') {
            alert("Mother's name must not contain spaces in front.")
            document.getElementById("inputMotherName").value = '';
            document.getElementById("inputMotherName").focus();
            return false;
          }
          else if (!document.getElementById("inputMotherName").value.match(parent_name_exp))  {
            alert("Mother's name must contain alphabets only.")
            document.getElementById("inputMotherName").value = '';
            document.getElementById("inputMotherName").focus();
            return false;
          }


          if (document.getElementById("inputMName").value == '')  {
            return true;
          }
          else if (document.getElementById("inputMName").value.charAt(0) == ' ') {
            alert("Middle name must not contain spaces.")
            document.getElementById("inputMName").value = '';
            document.getElementById("inputMName").focus();
            return false;
          }
          else if (!document.getElementById("inputMName").value.match(name_exp))  {
            alert("Middle name must contain alphabets only.")
            document.getElementById("inputMName").value = '';
            document.getElementById("inputMName").focus();
            return false;
          }

          var inputDate = new Date(document.getElementById("inputDOB").value);
          var today = new Date();

          if (inputDate.getFullYear() >= today.getFullYear() - 16)  {
            alert("Invalid Date");
            document.getElementById("inputDOB").value = '';
            document.getElementById("inputDOB").focus();
            return false;
          }
      }
      $(document).ready(function(){
        console.log("jquery...");
        $("#sameaddr").change(function(){
          if($(this).is(":checked")){
            $("#permanentaddress").text($("#presentaddress").text());
          }else{
            $("#permanentaddress").text("");
          }
        })
      });
      function same_address() {
          if(!document.getElementById("sameaddr").checked)
          {
            document.getElementById("permanentaddress").value = '';
            $(document.getElementById("permanentaddress")).prop("readonly",false);
          }
          else  {
            document.getElementById("permanentaddress").value = document.getElementById("presentaddress").value;
            $(document.getElementById("permanentaddress")).prop("readonly",true);
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
            User's Profile
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
                  
                  <div class="tab-pane active" id="view" active>
                    <div class="row">
                      <div class="col-md-6">

                        <!-- Profile Image -->
                        <div class="box box-primary">
                          <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo $dp_name;?>" alt="User profile picture" style="height: 110px;
    width: 110px;">
                            <h3 class="profile-username text-center"><?php echo get_name($user_id); ?></h3>
                            <p class="text-muted text-center"><?php $dept=getuserfield_academics('dept_id', $user_id); echo getdept('dept_name', $dept);?></p>
                            <!--
                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>Followers</b> <a class="pull-right">1,322</a>
                              </li>
                              <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">543</a>
                              </li>
                              <li class="list-group-item">
                                <b>Friends</b> <a class="pull-right">13,287</a>
                              </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            -->
                          </div>
                        </div><!-- /.box -->

                        <!-- About Me Box -->
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Find Me</h3>
                          </div>
                          <div class="box-body">
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Present Address</strong>
                            <p class="text-muted"><?php echo getuserfield_profile('present_add', $user_id); ?></p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Permanent Address</strong>
                            <p class="text-muted"><?php echo getuserfield_profile('permanent_add', $user_id); ?></p>

                          </div>
                          
                        </div><!-- /.box -->
                      </div><!-- /.col -->
                      <div class="col-md-6">
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                          </div><!-- /.box-header -->
                          <div class="box-body">
                            <strong><i class="fa fa-user">&nbsp;&nbsp;</i>  Gender</strong>
                            <p class="text-muted">
                              <?php echo (getuserfield_profile('gender',$user_id)==NULL)?'':((getuserfield_profile('gender',$user_id)=='M')?'Male':'Female'); ?>
                            </p>

                            <hr>

                            <strong><i class="fa fa-calendar">&nbsp;&nbsp;</i>  Date of Birth</strong>
                            <p class="text-muted">
                              <?php echo getuserfield_profile('dob', $user_id); ?>
                            </p>

                            <hr>

                            <strong><i class="fa fa-male">&nbsp;&nbsp;</i>  Father's Name</strong>
                            <p class="text-muted">
                              <?php echo getuserfield_profile('father_name', $user_id); ?>
                            </p>

                            <hr>

                            <strong><i class="fa fa-female">&nbsp;&nbsp;</i>  Mother's Name</strong>
                            <p class="text-muted">
                              <?php echo getuserfield_profile('mother_name', $user_id); ?>
                            </p>
                              
                          </div><!-- /.box-body -->
                        </div>
                      </div>
                    </div>
                  </div>
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
                          <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="First Name" value="<?php echo getuserfield_profile('first_name', $user_id); ?>" onkeyup="return validate_firstname(this.value)" required>
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
                          <input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="Last Name" value="<?php echo getuserfield_profile('last_name', $user_id); ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDOB" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputDOB" name="inputDOB" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_profile('dob', $user_id); ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputGender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="inputGender" value="Male" <?php echo (getuserfield_profile('gender',$user_id)=='M')?'checked':'';?> required> Male <br>
                          <input type="radio" name="inputGender" value="Female" <?php echo (getuserfield_profile('gender',$user_id)=='F')?'checked':'';?> required> Female
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputFatherName" class="col-sm-2 control-label">Father's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFatherName" name="inputFatherName"  placeholder="Father's Name" value="<?php echo getuserfield_profile('father_name', $user_id); ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputMotherName" class="col-sm-2 control-label">Mother's Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMotherName" name="inputMotherName" placeholder="Mother's Name" value="<?php echo getuserfield_profile('mother_name', $user_id); ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="presentaddress" class="col-sm-2 control-label">Present Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="presentaddress" name="presentaddress" placeholder="Present Address" required><?php echo getuserfield_profile('present_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Same as Permanent Address</label>
                        <div class="col-sm-10">
                          <input type="checkbox" id="sameaddr" value="yes" onclick="return same_address()"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="permanentaddress" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="permanentaddress" name="permanentaddress" placeholder="Permanent Address" required><?php echo getuserfield_profile('permanent_add', $user_id); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-flat" onclick="return validate()">Submit</button>&nbsp; &nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger btn-flat">Cancel</button>
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
