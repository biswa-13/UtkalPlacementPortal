<!-- Start : Parent Container -->
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
                          <input type="text" class="form-control" id="inputDept" placeholder="Department" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department Roll Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRoll" placeholder="Roll Number" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">University Registeration Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRegno" placeholder="Registeration Number" readonly>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoard10" placeholder="10th Board" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Date of Passing</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPass10" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercent10" placeholder="10th Percentage" readonly>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoardInter" placeholder="Intermediate Board" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Date of Passing</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPassInter" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercentInter" placeholder="Intermediate Percentage" readonly>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation University</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradUniv" placeholder="University" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradCourse" placeholder="Course" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradJDate" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradPDate" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradPercent" placeholder="Graduation Percentage" readonly>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGCourse" placeholder="Course" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGJDate" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGPDate" placeholder="DD/MM/YYYY" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGPercent" placeholder="Post Graduation Percentage" readonly>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="update">
                    <form class="form-horizontal box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Update Your Academics</h3>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputDept" placeholder="Department">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Department Roll Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRoll" placeholder="Roll Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">University Registeration Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputRegno" placeholder="Registeration Number">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoard10" placeholder="10th Board">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPass10" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Class 10 Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercent10" placeholder="10th Percentage">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Board</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputBoardInter" placeholder="Intermediate Board">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPassInter" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Intermediate Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPercentInter" placeholder="Intermediate Percentage">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation University</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradUniv" placeholder="University">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradCourse" placeholder="Course">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradJDate" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputGradPDate" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGradPercent" placeholder="Graduation Percentage">
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Course</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGCourse" placeholder="Course">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Joining Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGJDate" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Pass-Out Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPGPDate" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Post Graduation Percentage</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPGPercent" placeholder="Post Graduation Percentage">
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
                  <div class="tab-pane" id="cvview">
                    <div class="box box-primary">
                      <br>
                      <div class="box-header with-border">
                        <h3 class="box-title">Your CV</h3>
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
</div>
<!-- Finish : Parent Container -->
