<script type="text/javascript">

function deleteEmployerInfo(employerId){
  var employerId = employerId;
  var data = {"reqId":21, "deptId":employerId};
  $.ajax({
    url : "Pages/Common/ajaxHandler.php",
    type : "Post",
    data : data,
    success : function(data, status){
      if(data == "ok"){
        showInformation("<b>Succesfully Deleted Employer .</b>");
        $("#employerModal").modal("hide");
      }else{
        showWarning("<b>! Failed to Delete Employer .</b>");
      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Delete Employer .</b>");
      console.log("!!! Ajax Fails @ Admin/employerInfo/deleteEmployerInfo .");
    }

  })

 // fetchEmployers();
}// end of deleteEmployerInfo()

function getEmployerFormData(formId){
  var elemName = "#"+formId;
  var formData = {};
  //formData.id = formId;
  formData.user_name = $("#employerName").val() ;
  formData.mail_id = $("#employerEmailId").val();
  formData.contact = $("#employerContactNo").val();
  formData.alternate_contact = $("#empAlterContactNo").val();
  formData.website = $("#employerWebsite").val();
  return formData;
}//end of getEmployerFormData()

function updateEmployerInfo(employerId){ 
  formId = "addEmployerForm" ;
  if(formValidator(formId)){
    var formData = getEmployerFormData(formId);
    var data = {"reqId" : 20,"formData" : formData, "id":employerId};
    $.ajax({
    url : "Pages/Common/ajaxHandler.php",
    type : "post",
    data : data,
    success : function(data, status){
      if(data == "ok"){
        showInformation("<b> Employer Updated Succesfully .</b>");
        resetForm('addEmployerForm');
        $("#employerModal").modal("hide");
        fetchEmployers();
      }else{
        showWarning("<b>! Failed to Update Employer .</b>");
      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Update Employer .</b>");
      console.log("!!! Ajax Fails @ Admin/employerInfo .");

    }
   })
  }
  //location.reload();
}// end of updateEmployerInfo()

function editEmployerInfo(employerId){
  $("#addEmployerForm input, select").removeAttr("readonly","readonly");
  $("#addEmployerForm  select").removeAttr('disabled');
  var htmlContent = '<button type="submit" class="btn btn-primary"  onClick="updateEmployerInfo('+employerId+')">Update <i class="fa fa-pencil"></i></button><button type="button" class="btn btn-warning"  data-dismiss="modal">Cancel <i class="fa fa-times"></i></button>';
  $("#employerModalFooter").html(htmlContent);
}// end of editEmployerInfo()

function showEmployerInformation(data){
  $("#addEmployerForm input, select").attr("readonly","readonly");
  $("#employerModal").modal("show");
  var employerId = data[0];
  $("#employerName").val(data[1]) ;
  $("#employerEmailId").val(data[2]) ;
  $("#employerContactNo").val(data[3]) ;
  $("#empAlterContactNo").val(data[4]) ;
  $("#employerWebsite").val(data[5]) ;
  $("#employerModalHeader").text("Employer Information");
  var htmlContent = '<button type="submit" class="btn btn-primary"  onClick="editEmployerInfo('+employerId+')">Edit  <i class="fa fa-pencil"></i></button><button type="reset" class="btn btn-danger" onClick="deleteEmployerInfo('+employerId+')"> Delete <i class="glyphicon glyphicon-trash"></i></button><button type="button" class="btn btn-warning"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>';
  $("#employerModalFooter").html(htmlContent);
}// end of showEmployerInformation

function fetchEmployers(){
  var formData = {};
  var data = {"reqId" : 19,"formData" : formData};
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
        var table = $('#employerTable')
        /*.on('page.dt',function(){ updateToolTips(table); })*/
        .DataTable( {
            destroy: true,
            "scrollY":"600px",
            "scrollCollapse": true,
            data: tempData,
            columns: [
                { title: "id", "class" :"wrapText"},
                {title:  "Employer Name", "class" :"wrapText" },
                { title: "Email Id", "class" :"wrapText" },
                { title: "Contact No.", "class" :"wrapText" },
                { title: "Alternate Contact No.", "class" :"wrapText" },
                { title: "Website", "class" :"wrapText" }
            ]
        } );
          $("#employerTable").find("tr").mousemove(function(){
            var tdCount = $(this).find("td:nth-child(1)").text();
            var showData = " Employer Name : "+$(this).find("td:nth-child(2)").text()+"\n Email Id : "+$(this).find("td:nth-child(3)").text()+"\n Contact No : "+$(this).find("td:nth-child(4)").text()+"\n Alternate Contact No : "+$(this).find("td:nth-child(5)").text()+
          "\n Website : "+$(this).find("td:nth-child(6)").text();
            $(this).attr("title",showData);

          });
        $('#employerTable tbody').find("tr").click(function () {
            var data = [];
            data.push($(this).find("td:nth-child(1)").text())
            data.push($(this).find("td:nth-child(2)").text())
            data.push($(this).find("td:nth-child(3)").text())
            data.push($(this).find("td:nth-child(4)").text())
            data.push($(this).find("td:nth-child(5)").text())
            data.push($(this).find("td:nth-child(6)").text())
            showEmployerInformation(data);
        } );

      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Load Department .</b>");
      console.log("!!! Ajax Fails @ Admin/departmentInfo/fetchEmployers .");

    }
  })
}// end of fetchEmployers()
</script>
<script type="text/javascript">
  $(document).ready(function(){
    fetchEmployers();
  });
</script>

<!-- Start : Parent Container -->
<div>
	<!-- Start : Top BreadCrumb -->
	<section class="content-header">
      <h1>
       Employers Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Employeers</li>
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
              <li class="active"><a href="#viewEmployer" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-eye-open"></i> View Employer's</a></li>
              <li class="dropdown-togle bg-aqua color-palette"><a id="addEmployer" data-toggle="dropdown" aria-expanded="true" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Employeer's</a></li>
            </ul>
            <div class="tab-content">
              <!-- Start : View Depatrtment -->
              <div class="tab-pane active" id="viewEmployer">
                 <div>
                  <table  id="employerTable" class="display" cellspacing="0" width="100%">
                    <thead>
                    </thead>
                    <!-- <tbody></tbody> -->
                  </table>
                </div>
              </div>
              <!-- Finish : View Depatrtment -->
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
          $("#employerModal").modal("show");
          $("#employerModalHeader").text("Employer Information");
          var htmlContent = '<button type="submit" class="btn btn-primary" id="deptSubmitBtn"  onClick = "addEmployer()">Submit  <i class="fa fa-check"></i></button><button type="reset" class="btn btn-warning" onClick = "resetForm()"> Reset <i class="glyphicon glyphicon-refresh"></i></button><button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>';
          $("#employerModalFooter").html(htmlContent);
        });
    });
    </script>
    <div class="modal" id="employerModal">
<!-- Start : Rendering Of  Modal-->
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <center><h3><p id="employerModalHeader">Add New Employer</p></h3></center>
      </div>
      <div class="modal-body"><!-- action = "admin_homepage.php?pid=xi905sy2" -->
        <form class="form-horizontal" id="addEmployerForm"  method="post">
          <div class="form-group">
            <p class="centerText"><span class="valueRequired">* Marked fields are mandatory fields .</span></p>
            <label for="employerName" class="col-sm-3 control-label">Employer Name <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" mandatory ="yes" id="employerName" placehoder="Employer Name">
            </div>
          </div>
          <div class="form-group">
            <label for="employerEmailId" class="col-sm-3 control-label">Employer Email Id</label>
            <div class="col-sm-9">
              <input type="email" class="form-control " mandatory ="" id="employerEmailId" placehoder="Employer Email Id">
            </div>
          </div>
          <div class="form-group">
            <label for="employerContactNo" class="col-sm-3 control-label">Employer Contact Number</label>
            <div class="col-sm-9">
              <input type="number" class="form-control " numberType = "mobile" mandatory ="" id="employerContactNo" placehoder="Employer Contact Number">
            </div>
          </div>
          <div class="form-group">
            <label for="empAlterContactNo" class="col-sm-3 control-label">Alternate Contact Number </label>
            <div class="col-sm-9">
              <input type="number" class="form-control " mandatory ="" id="empAlterContactNo" placehoder="Alternate Contact Number">
            </div>
          </div>
          <div class="form-group">
            <label for="employerWebsite" class="col-sm-3 control-label">Employer Website <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="url" class="form-control " mandatory ="yes" id="employerWebsite" placehoder="Employer Website">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer" >
         <center><div id="employerModalFooter"><!-- onClick = "formValidator('addDeptForm')" -->
            <button type="submit" class="btn btn-primary" id="employerSubmitBtn"  onClick = "addEmployer()">Submit  <i class="fa fa-check"></i></button>
            <button type="reset" class="btn btn-warning" onClick = "resetForm()"> Reset <i class="glyphicon glyphicon-refresh"></i></button>
            <button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>
            
        </div></center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of  Modal-->
</div>
<!-- Finish : Parent Container -->
<script type="text/javascript">
  function addEmployer(){
    var formId = 'addEmployerForm';
    if(formValidator(formId)){
      event.preventDefault();
      var formData = getEmployerFormData(formId);
      var data = {"reqId" : 18,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          if(data == "ok"){
            showInformation("<b>New Employer Added Succesfully .</b>");
            resetForm('addDeptForm');
            $("#employerModal").modal("hide");
            fetchEmployers();
          }else{
            showWarning("<b>! Failed to Add New Employer .</b>");
          }
        },
        error : function(){
          showWarning("<b>!!! Failed to Add New Employer .</b>");
          console.log("!!! Ajax Fails @ Admin/employerInfo .");

        }
      })

    }
    
  }

</script>
