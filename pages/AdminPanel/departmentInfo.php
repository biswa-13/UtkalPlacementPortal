<!-- Start : Including Necessary Files -->

<!-- Finish : Including Necessary Files -->
<script type="text/javascript">

function deleteDeptInfo(deptId){
  var deptId = deptId;
  var data = {"reqId":16, "deptId":deptId};
  $.ajax({
    url : "Pages/Common/ajaxHandler.php",
    type : "Post",
    data : data,
    success : function(data, status){
      if(data == "ok"){
        showInformation("<b>Succesfully Deleted Department .</b>");
        $("#deptModal").modal("hide");
      }else{
        showWarning("<b>! Failed to Delete Department .</b>");
      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Delete Department .</b>");
      console.log("!!! Ajax Fails @ Admin/departmentInfo/deleteDeptInfo .");
    }

  })

 // fetchDepartments();
}// end of deleteDeptInfo()

function fetchDepartments(){
  //var table = $('#myTable').DataTable();
  //table.destroy();
    var formData = {};
     var data = {"reqId" : 14,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          var data = JSON.parse(data);
          if(data[0] != "ok"){
            showWarning("<b>! Failed to Load Departments .</b>");
          }else{
            tempData = data.splice(1,data.length);
            var table = $('#deptTable')
            /*.on('page.dt',function(){ updateToolTips(table); })*/
            .DataTable( {
                destroy: true,
                "scrollY":"600px",
                "scrollCollapse": true,
                data: tempData,
                columns: [
                    { title: "id", "class" :"wrapText"},
                    {title: "Dept. Name", "class" :"wrapText" },
                    { title: "Dept. Type", "class" :"wrapText" },
                    { title: "HOD Name", "class" :"wrapText" },
                    { title: "HOD Contact No.", "class" :"wrapText" },
                    { title: "HOD Email", "class" :"wrapText" },
                    { title: "Dept Contact No.", "class" :"wrapText" },
                    { title: "Dept Email", "class" :"wrapText" }
                ]
            } );
              $("#deptTable").find("tr").mousemove(function(){
                var tdCount = $(this).find("td:nth-child(1)").text();
                var showData = " Dept Name : "+$(this).find("td:nth-child(2)").text()+"\n Dept Type : "+$(this).find("td:nth-child(3)").text()+"\n HOD Name : "+$(this).find("td:nth-child(4)").text()+"\n HOD Contact : "+$(this).find("td:nth-child(5)").text()+
              "\n HOD Email : "+$(this).find("td:nth-child(6)").text()+"\n Dept Contact : "+$(this).find("td:nth-child(7)").text()+"\n Dept Email : "+$(this).find("td:nth-child(8)").text();
               
                $(this).attr("title",showData);

              });
            $('#deptTable tbody').find("tr").click(function () {
                var data = [];
                data.push($(this).find("td:nth-child(1)").text())
                data.push($(this).find("td:nth-child(2)").text())
                data.push($(this).find("td:nth-child(3)").text())
                data.push($(this).find("td:nth-child(4)").text())
                data.push($(this).find("td:nth-child(5)").text())
                data.push($(this).find("td:nth-child(6)").text())
                data.push($(this).find("td:nth-child(7)").text())
                data.push($(this).find("td:nth-child(8)").text());
                showDeptInformation(data);
            } );

          }
        },
        error : function(){
          showWarning("<b>!!! Failed to Load Department .</b>");
          console.log("!!! Ajax Fails @ Admin/departmentInfo/fetchDepartments .");

        }
      })
}// end of fetchDepartments()

function getDeptFormData(formId){
    var elemName = "#"+formId;
    var formData = {};
    //formData.id = formId;
    formData.dept_name = $("#deptName").val() ;
    formData.dept_type = $("#deptType").val();
    formData.head_name = $("#headName").val();
    formData.head_email_id = $("#headEmailId").val();
    formData.head_contact_no = $("#headContactNo").val();
    formData.dept_email_id = $("#deptEmailId").val();
    formData.dept_contact_no = $("#deptContactNo").val();
    return formData;
}// end of getDeptFormData()

function updateDeptInfo(deptId){ ;
  formId = "addDeptForm" ;
  if(formValidator(formId)){
    var formData = getDeptFormData(formId);
    var data = {"reqId" : 15,"formData" : formData, "id":deptId};
    $.ajax({
    url : "Pages/Common/ajaxHandler.php",
    type : "post",
    data : data,
    success : function(data, status){
      if(data == "ok"){
        showInformation("<b> Depatrtment Updated Succesfully .</b>");
        resetForm('addDeptForm');
        $("#deptModal").modal("hide");
        fetchDepartments();
      }else{
        showWarning("<b>! Failed to Update Department .</b>");
      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Update Department .</b>");
      console.log("!!! Ajax Fails @ Admin/departmentInfo .");

    }
   })

  }
  //location.reload();
}// end of updateDeptInfo()

function editDeptInfo(deptId){
  $("#addDeptForm input, select").removeAttr("readonly","readonly");
  $("#addDeptForm  select").removeAttr('disabled');

  var htmlContent = '<button type="submit" class="btn btn-primary"  onClick="updateDeptInfo('+deptId+')">Update <i class="fa fa-pencil"></i></button><button type="button" class="btn btn-warning"  data-dismiss="modal">Cancel <i class="fa fa-times"></i></button>';
  $("#deptModalFooter").html(htmlContent);
}// end of editDeptInfo()

function showDeptInformation(data){
  $("#addDeptForm input, select").attr("readonly","readonly");
  $("#addDeptForm  select").prop('disabled', 'disabled');
  $("#deptModal").modal("show");
  var deptId = data[0];
  $("#deptName").val(data[1]) ;
  $("#deptType").val(data[2]) ;
  $("#headName").val(data[3]) ;
  $("#headEmailId").val(data[5]) ;
  $("#headContactNo").val(data[4]) ;
  $("#deptEmailId").val(data[7]) ;
  $("#deptContactNo").val(data[6]) ;
  $("#deptModalHeader").text("Department Information");
  var htmlContent = '<button type="submit" class="btn btn-primary"  onClick="editDeptInfo('+deptId+')">Edit  <i class="fa fa-pencil"></i></button><button type="reset" class="btn btn-danger" onClick="deleteDeptInfo('+deptId+')"> Delete <i class="glyphicon glyphicon-trash"></i></button><button type="button" class="btn btn-warning"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>';

  $("#deptModalFooter").html(htmlContent);
}// end of showDeptInformation()

  
  $(document).ready(function(){
    fetchDepartments();
  });
</script>
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
              <li class="dropdown-togle bg-aqua color-palette"><a id="addEmployer" data-toggle="dropdown" aria-expanded="true" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Depts.</a></li>
            </ul>
            <div class="tab-content">
              <!-- Start : View Depatrtment -->
              <div class="tab-pane active" id="viewDept" >
                <!-- <div class="table-responsive"> -->
                <div>
                  <!-- <table class="table table-hover table-striped" id="deptTable"> -->
                  <table  id="deptTable" class="display" cellspacing="0" width="100%">
                    <thead>
                    </thead>
                    <!-- <tbody></tbody> -->
                  </table>
                </div>
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
        $("#addEmployer").click(function(){
          $("#deptModal").modal("show");
          $("#deptModalHeader").text("Department Information");
          var htmlContent = '<button type="submit" class="btn btn-primary" id="deptSubmitBtn"  onClick = "addDepartment()">Submit  <i class="fa fa-check"></i></button><button type="reset" class="btn btn-warning" onClick = "resetForm()"> Reset <i class="glyphicon glyphicon-refresh"></i></button><button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>';
          $("#deptModalFooter").html(htmlContent);
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
        <center><h3><p id="deptModalHeader">Add New Department</p></h3></center>
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
            <button type="submit" class="btn btn-primary" id="deptSubmitBtn"  onClick = "addDepartment()">Submit  <i class="fa fa-check"></i></button>
            <button type="reset" class="btn btn-warning" onClick = "resetForm()"> Reset <i class="glyphicon glyphicon-refresh"></i></button>
            <button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>
            
        </div></center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of  Modal-->
<script type="text/javascript">
  function addDepartment(formId){
    formId = 'addDeptForm';
    if(formValidator(formId)){
<<<<<<< HEAD
      event.preventDefault();
      var formData = getDeptFormData(formId);
      /*
=======
      //event.preventDefault();
>>>>>>> origin/master
      var elemName = "#"+formId;
      var formData = {};
      formData.deptName = $("#deptName").val() ;
      formData.deptType = $("#deptType").val();
      formData.headName = $("#headName").val();
      formData.headEmailId = $("#headEmailId").val();
      formData.headContactNo = $("#headContactNo").val();
      formData.deptEmailId = $("#deptEmailId").val();
      formData.deptContactNo = $("#deptContactNo").val();*/

      var data = {"reqId" : 13,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          if(data == "ok"){
            showInformation("<b>New Depatrtment Added Succesfully .</b>");
            resetForm('addDeptForm');
            $("#deptModal").modal("hide");
            fetchDepartments();
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
