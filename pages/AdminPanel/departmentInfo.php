<!-- Start : Including Necessary Files -->

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

 <div class="modal" id="deptModal">
<!-- Start : Rendering Of  Modal-->
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <center><h3>Add New Department</h3></center>
      </div>
      <div class="modal-body"><!-- action = "admin_homepage.php?pid=xi905sy2" -->
        <form class="form-horizontal" id="addDeptForm"  method="post">
          <div class="form-group">
            <p class="centerText"><span class="valueRequired">* Marked fields are mandatory fields .</span></p>
            <label for="deptName" class="col-sm-3 control-label">Dept. Name <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" mandatory ="yes" id="deptName" placehoder="Department Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Type <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <select class="form-control select2 select2-hidden-accessible" id="deptType" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option>-- Select One --</option>
                <option>Post Graduate</option>
                <option>Self Finance</option>
                <option>Graduation</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Name <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control " mandatory ="yes" id="headName" placehoder="Head Name">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Contact Number <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="number" class="form-control " numberType = "mobile" mandatory ="yes" id="headContactNo" placehoder="Head Contact Number">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Head Email Id <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="email" class="form-control " mandatory ="yes" id="headEmailId" placehoder="Head Email Id">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Contact Number <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="number" class="form-control " mandatory ="yes" id="deptContactNo" placehoder="Dept. Contact Number">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Dept. Email Id <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="email" class="form-control " mandatory ="yes" id="deptEmailId" placehoder="Dept. Email Id">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer" >
         <center><div id="deptModalFooter"><!-- onClick = "formValidator('addDeptForm')" -->
            <button type="submit" class="btn btn-primary" id="deptSubmitBtn"  onClick = "addDepartment('addDeptForm')">Submit  <i class="fa fa-check"></i></button>
            <button type="reset" class="btn btn-warning" onClick = "resetForm('addDeptForm')"> Reset <i class="glyphicon glyphicon-refresh"></i></button>
            <button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>
            
        </div></center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of  Modal-->
<!-- Start : Rendering Of DataTable -->
<!-- Finish : Rendering Of DataTable -->
<script type="text/javascript">
  function addDepartment(formId){
    if(formValidator(formId)){
      event.preventDefault();
      var elemName = "#"+formId;
      var formData = {};
      formData.deptName = $("#deptName").val() ;
      formData.deptType = $("#deptType").val();
      formData.headName = $("#headName").val();
      formData.headEmailId = $("#headEmailId").val();
      formData.headContactNo = $("#headContactNo").val();
      formData.deptEmailId = $("#deptEmailId").val();
      formData.deptContactNo = $("#deptContactNo").val();

      var data = {"reqId" : 13,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          console.log("data -->",data);
          if(data == "ok"){
            showInformation("<b>New Depatrtment Added Succesfully .</b>");
            resetForm('addDeptForm');
            $("#deptModal").modal("hide");
          }else{
            showWarning("<b>! Failed to Add New Department .</b>");
          }
        },
        error : function(){
          showWarning("<b>!!! Failed to Add New Department .</b>");
          console.log("!!! Ajax Fails @ Admin/departmentInfo .");

        }
      })

    }
    
  }

</script>
