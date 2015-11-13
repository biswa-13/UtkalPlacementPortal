<script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Start : Rendering Of Information Modal-->
 <div class="modal modalOnTop infoModal" id="infoModal" tabindex="-1"  >
  <div class="modal-dialog">
    <div class="modal-content " id="taskStep1" ng-show="taskAttachToList">
      <div class="modal-header bg-aqua">
        <center><h3>Information</h3></center>
      </div>
      <div class="modal-body" id="infoModalBody">
        <h1>hi</h1>
      </div>
      <div class="modal-footer">
         <center>
            <button type="submit" class="btn btn-primary"  data-dismiss="modal">Ok  <i class="glyphicon glyphicon-ok-sign"></i></button>
        </center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of Information Modal-->

<!-- Start : Rendering Of Warning Modal-->
 <div class="modal modalOnTop warningModal" id="warningModal" tabindex="-1"  >
  <div class="modal-dialog">
    <div class="modal-content " id="taskStep1" ng-show="taskAttachToList">
      <div class="modal-header bg-red">
        <center><h3>Warning</h3></center>
      </div>
      <div class="modal-body" id="warningModalBody">
        <h1>hi</h1>
      </div>
      <div class="modal-footer">
         <center>
            <button type="submit" class="btn btn-primary"  data-dismiss="modal">Ok  <i class="glyphicon glyphicon-ok-sign"></i></button>
        </center>
      </div>
    </div>
  </div>
 </div>
<!-- Finish : Rendering Of Warning Modal-->
<?php
/*  function showPhpInformation($msg){
    echo '<script> 
      $(document).ready(function(){
        console.log("jQuery is working @ showInformation.php ..");
        $("#infoModal").modal("show");
        $("#infoModalBody").html('+$msg+');
      });
    </script>';
  }*/
?>
