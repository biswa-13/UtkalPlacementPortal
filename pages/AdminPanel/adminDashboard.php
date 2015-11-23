<!-- Start : Parent Container -->
<div>
	<!-- Start : Top BreadCrumb -->
	<section class="content-header">
      <h1>
       Dashboard Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin_homepage.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Finish : Top BreadCrumb -->

    <!-- Start : Main Content -->
    <section class="content">
    	<div class="row" style="border-top:2px solid grey;">
    		<!-- Start : Page Content Container -->
    		<!-- <div class="col-md-12">
          <h3>Current Year  </h3>
          <div class="row" style="margin-top:5px;margin-bottom:5px;">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>00</h3>
                  <p>New Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>00</h3>
                  <p>Students Placed</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>00</h3>
                  <p>New  Departments</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>00</h3>
                  <p>New Employeer's.</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


          </div> -->

          <!-- Finish : Current Year Dashboard -->

          <!-- Start : All Total Dashboard -->
          <h3 style="margin:15px;">Total Figures </h3>
    			<div class="row" style="margin:5px;">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3 id="studentCount">00</h3>
                  <p>Registered Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>00</h3>
                  <p> Placed Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3 id="deptCount">00</h3>
                  <p>Registered Departments</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3 id="employerCount">00</h3>
                  <p>Registered Employeer's.</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


          </div>
          <!-- Finish : All Total Dashboard -->

	    		<!-- Finish : Page Content Codings -->
    		</div>
    		<!-- Finish : Page Content Container -->
    	</div>

    </section>
    <!-- Finish : Main Content -->
</div>
<!-- Finish : Parent Container -->
<script type="text/javascript">

function getDashboardData(){
  var data = {"reqId":22};
  $.ajax({
    url : "Pages/Common/ajaxHandler.php",
    type : "Post",
    data : data,
    success : function(data, status){
      var data = JSON.parse(data);
      if(data[0] == "ok"){
        $("#studentCount").text(data.studentCount);
        $("#deptCount").text(data.deptCount);
        $("#employerCount").text(data.employerCount);
      }else{
        showWarning("<b>! Failed to get Dashboard data .</b>");
      }
    },
    error : function(){
      showWarning("<b>!!! Failed to Delete Department .</b>");
      console.log("!!! Ajax Fails @ Admin/departmentInfo/deleteDeptInfo .");
    }

  })

}// end of getDashboardData()

$(document).ready(function(){
  getDashboardData();
});
</script>
