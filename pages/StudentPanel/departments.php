<!-- Start : Including Necessary Files -->

<!-- Finish : Including Necessary Files -->
<script type="text/javascript">
function getDepartments(){
    var formData = {};
     var data = {"reqId" : 17,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          var data = JSON.parse(data);
          //console.log("data -->",data);
          if(data[0] != "ok"){
            showWarning("<b>! Failed to Load Departments .</b>");
          }else{
            tempData = data.splice(1,data.length);
            var table = $('#deptTable1')
            /*.on('page.dt',function(){ updateToolTips(table); })*/
            .DataTable( {
                destroy: true,
                "scrollY":"600px",
                "scrollCollapse": true,
                data: tempData,
                columns: [
                    {title: "Dept. Name", "class" :"wrapText" },
                    { title: "Dept. Type", "class" :"wrapText" },
                    { title: "HOD Name", "class" :"wrapText" },
                    { title: "Dept Email", "class" :"wrapText" },
                    { title: "Dept Contact No.", "class" :"wrapText" }
                ]
            } );
            

             $('#deptTable1 tbody').on('mouseover', 'tr', function () {
                var data = table.row( this ).data();
                var showData = " Dept Name : "+data[0]+"\n Dept Type : "+data[1]+"\n HOD Name : "+data[2]+"\n Dept Email : "+data[3]+"\n Dept Contact : "+data[4];
                $(this).attr("title",showData);
            } );

          }
        },
        error : function(){
          showWarning("<b>!!! Failed to Load Department .</b>");
          console.log("!!! Ajax Fails @ student/departmentInfo/getDepartments .");

        }
      })
  }

    
  $(document).ready(function(){
    getDepartments();
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
              <li class="active"><a href="#viewDept1" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-eye-open"></i> View Depts.</a></li>
            </ul>
            <div class="tab-content">
              <!-- Start : View Depatrtment -->
              <div class="tab-pane active" id="viewDept1" >
                <!-- <div class="table-responsive"> -->
                <div>
                  <!-- <table class="table table-hover table-striped" id="deptTable1"> -->
                  <table  id="deptTable1" class="display" cellspacing="0" width="100%">
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
        $("#addDept").click(function(){
          $("#deptModal").modal("show");
        });
    });
    </script>
</div>
<!-- Finish : Parent Container -->
