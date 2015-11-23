<!-- Start : Including Necessary Files -->

<!-- Finish : Including Necessary Files -->
<script type="text/javascript">
function getEmployers(){
    var formData = {};
     var data = {"reqId" : 23,"formData" : formData};
      $.ajax({
        url : "Pages/Common/ajaxHandler.php",
        type : "post",
        data : data,
        success : function(data, status){
          var data = JSON.parse(data);
          if(data[0] != "ok"){
            showWarning("<b>! Failed to Load Employers .</b>");
          }else{
            tempData = data.splice(1,data.length);
            var table = $('#empTable')
            /*.on('page.dt',function(){ updateToolTips(table); })*/
            .DataTable( {
                destroy: true,
                "scrollY":"600px",
                "scrollCollapse": true,
                data: tempData,
                columns: [
                    {title: "Employers Name", "class" :"wrapText" },
                    { title: "Website", "class" :"wrapText" }
                ]
            } );

             $('#empTable tbody').on('mouseover', 'tr', function () {
                var data = table.row( this ).data();
                var showData = " Employers Name : "+data[0]+"\n Website : "+data[1];
                $(this).attr("title",showData);
            } );

          }
        },
        error : function(){
          showWarning("<b>!!! Failed to Load Department .</b>");
          console.log("!!! Ajax Fails @ Admin/departmentInfo/getEmployers .");

        }
      })
  }

    
  $(document).ready(function(){
    getEmployers();
  });
</script>
<!-- Start : Parent Container -->
<div>
	<!-- Start : Top BreadCrumb -->
	<section class="content-header">
      <h1>
       Employer's Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Employers</li>
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
              <li class="active"><a href="#viewEmp" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-eye-open"></i> View Employers</a></li>
            </ul>
            <div class="tab-content">
              <!-- Start : View Depatrtment -->
              <div class="tab-pane active" id="viewEmp" >
                <!-- <div class="table-responsive"> -->
                <div>
                  <!-- <table class="table table-hover table-striped" id="deptTable"> -->
                  <table  id="empTable" class="display" cellspacing="0" width="100%">
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
