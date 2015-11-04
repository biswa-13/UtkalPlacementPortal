<!-- Start : Including Necessary Files -->
<?php 
  require 'Pages/Common/showInformation.php';
?>
<!-- Finish : Including Necessary Files -->

<!-- Start : Parent Container -->
<div>
	<!-- Start : Top BreadCrumb -->
	<section class="content-header">
      <h1>
       Departments Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Departments</li>
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
              <li class="active"><a href="#viewDept" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-eye-open"></i> View Depts.</a></li>
              <li class="dropdown-togle bg-aqua color-palette"><a id="addDept" data-toggle="dropdown" aria-expanded="true" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Depts.</a></li>
            </ul>
            <div class="tab-content">
              <!-- Start : View Depatrtment -->
              <div class="tab-pane" id="viewDept">
              </div>
              <!-- Finish : View Depatrtment -->

              <!-- Start : Edit/Add Depatrtment -->
              <!-- <div class="tab-pane" id="updateDept">
              </div> -->
              <!-- Finish : Edit/Add Depatrtment -->
            </div>
          </div>
	    		<!-- Finish : Page Content Codings -->
    		</div>
    		<!-- Finish : Page Content Container -->
    	</div>

    </section>
    <!-- Finish : Main Content -->

    <script>
      $(document).ready(function(){
        $("#addDept").click(function(){
          $("#deptModal").modal("show");
        });
    });
    </script>
</div>
<!-- Finish : Parent Container -->

<!-- Start : Rendering Of  Modal-->
 <div class="modal" id="deptModal">
  <div class="modal-dialog">
    <div class="modal-content " id="taskStep1">
      <div class="modal-header">
        <center><h3>Add New Department</h3></center>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Type</label>
            <div class="col-sm-9">
              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option>-- Select One --</option>
                <option>Post Graduate</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Contact Number</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Email Id</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Contact Nmber </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Email Id</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="deptName" placehoder="Department Name">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
         <center>
            <button type="submit" class="btn btn-primary" id="deptSubmitBtn" data-toggle="modal" onClick = "showInformation('New Dept Added ..')">Submit  <i class="fa fa-check"></i></button>
            <button type="reset" class="btn btn-warning" > Reset <i class="glyphicon glyphicon-refresh"></i></button>
            <button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>
            
        </center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of  Modal-->
<script type="text/javascript">
  function showInformation(text){
    console.log("text",text);
    $("#infoModal").modal("show");
  }
</script>
