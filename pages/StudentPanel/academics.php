<SCRIPT TYPE="text/javascript">
  function validate ()
  {
    if (document.getElementById("inputDept").value == "000")
    {
      alert("Please enter your department.");
      document.getElementById("inputDept").focus();
      return false;
    }
    if (!document.getElementById("inputRoll").value)
    {
      alert("Please enter your department roll number.");
      document.getElementById("inputRoll").focus();
      return false;
    }
    if (!document.getElementById("inputBoard10").value)
    {
      alert("Please enter your class 10 board.");
      document.getElementById("inputBoard10").focus();
      return false;
    }
    if (!document.getElementById("inputPass10").value)
    {
      alert("Please enter your class 10 date of passing.");
      document.getElementById("inputPass10").focus();
      return false;
    }
    if (!document.getElementById("inputPercent10").value)
    {
      alert("Please enter your class 10 percentage.");
      document.getElementById("inputPercent10").focus();
      return false;
    }
    if (!document.getElementById("inputBoardInter").value)
    {
      alert("Please enter your intermediate board.");
      document.getElementById("inputBoardInter").focus();
      return false;
    }
    if (!document.getElementById("inputPassInter").value)
    {
      alert("Please enter your intermediate date of passing.");
      document.getElementById("inputPassInter").focus();
      return false;
    }
    if (!document.getElementById("inputPercentInter").value)
    {
      alert("Please enter your intermediate percentage.");
      document.getElementById("inputPercentInter").focus();
      return false;
    }
    if (!document.getElementById("inputGradUniv").value)
    {
      alert("Please enter your graduation university.");
      document.getElementById("inputGradUniv").focus();
      return false;
    }
    if (!document.getElementById("inputGradCourse").value)
    {
      alert("Please enter your graduation course.");
      document.getElementById("inputGradCourse").focus();
      return false;
    }
    if (!document.getElementById("inputGradJDate").value)
    {
      alert("Please enter your graduation date of joining.");
      document.getElementById("inputGradJDate").focus();
      return false;
    }
    if (!document.getElementById("inputGradPDate").value)
    {
      alert("Please enter your graduation date of passing.");
      document.getElementById("inputGradPDate").focus();
      return false;
    }
    if (!document.getElementById("inputGradPercent").value)
    {
      alert("Please enter your graduation percentage.");
      document.getElementById("inputGradPercent").focus();
      return false;
    }
  }
</SCRIPT>

<?php
  if (isset($_GET['academic_msg']))
  {
    print_r($_GET['academic_msg']);
  }
?>

<div>
	<!-- Start : Top BreadCrumb -->
	<section class="content-header">
      <h1>
       Academic Trait
      </h1>
      <ol class="breadcrumb">
        <li><a href="student_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Academics</li>
      </ol>
    </section>
    <!-- Finish : Top BreadCrumb -->

    <!-- Start : Main Content -->
    <section class="content">
    	<div class="row">
    		<!-- Start : Page Content Container -->
    		<div class="col-md-12">
    			<!-- Start : Page Content Codings -->
    			 <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#view" data-toggle="tab"><strong>Your Academic Info</strong></a></li>
                  <li><a href="#update" data-toggle="tab"><strong>Update Academic Info</strong></a></li>
                  <li><a href="#cvview" data-toggle="tab"><strong>View CV</strong></a></li>
                  <li><a href="#cvupdate" data-toggle="tab"><strong>Update CV</strong></a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="view">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Academics</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Dept" placeholder="Department" readonly value="<?php $dept=getuserfield_academics('dept_id', $user_id); echo getdept('dept_name', $dept);?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department Roll Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Roll" placeholder="Roll Number" readonly value="<?php echo getuserfield_academics('dept_roll_no', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">University Registeration Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Regno" placeholder="Registeration Number" readonly value="<?php echo getuserfield_academics('reg_no', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Board10" placeholder="10th Board" readonly value="<?php echo getuserfield_academics('x_board', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Date of Passing</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="Pass10" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('x_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Percent10" placeholder="10th Percentage" readonly value="<?php echo getuserfield_academics('x_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="BoardInter" placeholder="Intermediate Board" readonly value="<?php echo getuserfield_academics('intermed_board', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Date of Passing</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="PassInter" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('intermed_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="PercentInter" placeholder="Intermediate Percentage" readonly value="<?php echo getuserfield_academics('intermed_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation University</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="GradUniv" placeholder="University" readonly value="<?php echo getuserfield_academics('grad_university', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="GradCourse" placeholder="Course" readonly value="<?php echo getuserfield_academics('grad_course', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="GradJDate" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('grad_join', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="GradPDate" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('grad_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="GradPercent" placeholder="Graduation Percentage" readonly value="<?php echo getuserfield_academics('grad_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="PGCourse" placeholder="Course" readonly value="<?php echo getuserfield_academics('pg_course', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="PGJDate" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('pg_join', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="PGPDate" placeholder="DD/MM/YYYY" readonly value="<?php echo getuserfield_academics('pg_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="PGPercent" placeholder="Post Graduation Percentage" readonly value="<?php echo getuserfield_academics('pg_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="update">
                    <FORM class="form-horizontal box box-primary" action="student_homepage.php?pid=4ib63ty7" method="post">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your Academics</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department</label>
                        <?php
                          $query = "SELECT DISTINCT id, dept_name FROM department_info ORDER BY id";
                          $res = mysql_query($query) or die("No data in departments");
                        ?>
                        <div class="col-sm-10">
                          <SELECT id="inputDept" name="inputDept" class="form-control" value="123">
                            <!-- <OPTION value="000">--SELECT A DEPARTMENT--</OPTION> -->
                            <?php
                                while ($row = mysql_fetch_array($res))
                                {
                                  echo "<option value=".$row['id'].">".$row['dept_name']."</option>";
                                }
                            ?>
                          </SELECT>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department Roll Number<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRoll" name="inputRoll" mandatory="yes" placeholder="Roll Number" value="<?php echo getuserfield_academics('dept_roll_no', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">University Registeration Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRegno" name="inputRegno" placeholder="Registeration Number" value="<?php echo getuserfield_academics('reg_no', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Board<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoard10" name="inputBoard10" mandatory="yes" placeholder="10th Board" value="<?php echo getuserfield_academics('x_board', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Pass-Out Date<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPass10" name="inputPass10" mandatory="yes" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('x_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Percentage<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercent10" numberType="" mandatory="yes" name="inputPercent10" placeholder="10th Percentage" value="<?php echo getuserfield_academics('x_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Board<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoardInter" name="inputBoardInter" mandatory="yes" placeholder="Intermediate Board" value="<?php echo getuserfield_academics('intermed_board', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Pass-Out Date<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPassInter" name="inputPassInter" mandatory="yes" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('intermed_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Percentage<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercentInter" name="inputPercentInter" mandatory="yes" placeholder="Intermediate Percentage" value="<?php echo getuserfield_academics('intermed_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation University<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradUniv" name="inputGradUniv" mandatory="yes" placeholder="University" value="<?php echo getuserfield_academics('grad_university', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Course<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradCourse" name="inputGradCourse" mandatory="yes" placeholder="Course" value="<?php echo getuserfield_academics('grad_course', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Joining Date<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradJDate" name="inputGradJDate" mandatory="yes" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('grad_join', $user_id); ?>">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Pass-Out Date<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradPDate" name="inputGradPDate" mandatory="yes" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('grad_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Percentage<span class="valueRequired">*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradPercent" name="inputGradPercent" mandatory="yes" placeholder="Graduation Percentage" value="<?php echo getuserfield_academics('grad_percent', $user_id); ?>">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGCourse" name="inputPGCourse" placeholder="Course" value="<?php echo getuserfield_academics('pg_course', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGJDate" name="inputPGJDate" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('pg_join', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGPDate" name="inputPGPDate" placeholder="DD/MM/YYYY" value="<?php echo getuserfield_academics('pg_pass', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGPercent" name="inputPGPercent" placeholder="Post Graduation Percentage" value="<?php echo getuserfield_academics('pg_percent', $user_id); ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-flat" onclick="return validate() ">Submit</button> &nbsp; &nbsp; &nbsp; &nbsp;
                          <button type="reset" class="btn btn-danger btn-flat">Cancel</button>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          
                        </div>
                      </div>
                      <br>
                    </FORM>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="cvview">
                    <div class="box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Your CV</h3>
                      </div>
                      <div class="form-group">
                        <div size=500>
                        <object src="uploads/111_cv.pdf"><embed src="uploads/111_cv.pdf" width="420" height="540"></embed></object>
                      </div>
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="tab-pane" id="cvupdate">
                    <div class="box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your CV</h3>
                      </div>
                      <br>
                      <form action="student_homepage.php?pid=3ca88io1" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputFile" >Browse Your File</label>
                            <input type="file" name="file">
                          </div>
                        </div>

                        <div class="box-footer">
                          <input type="submit" value="Upload" class="btn btn-primary">
                        </div>
                      </form>
                    </div><!-- /.box -->

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->

	    		<!-- Finish : Page Content Codings -->
    		</div>
    		<!-- Finish : Page Content Container -->
    	</div>

    </section>
    <!-- Finish : Main Content -->
    <script>
      $(document).ready(function(){
      })
    </script>
</div>
<!-- Finish : Parent Container -->
