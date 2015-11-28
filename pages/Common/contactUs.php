<div class="modal" id="contactUsModal">
  <!-- Start : Rendering Of  Modal-->
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <center><h3><p >Contact Us</p></h3></center>
      </div>
      <div class="modal-body"><!-- action = "admin_homepage.php?pid=xi905sy2" -->
        <form class="form-horizontal" id="contactUsForm"  method="post">
          <div class="form-group">
            <p class="centerText"><span class="valueRequired">* Marked fields are mandatory fields .</span></p>
            <label for="yourName" class="col-sm-3 control-label">Your Name <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" mandatory ="yes" id="yourName" placehoder="Your Name">
            </div>
          </div>
          <div class="form-group">
            <label for="yourContactNo" class="col-sm-3 control-label">Your Contact Number <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="number" class="form-control " numberType = "mobile" mandatory ="yes" id="yourContactNo" placehoder="Your Contact Number">
            </div>
          </div>
           <div class="form-group">
            <label for="yourEmailId" class="col-sm-3 control-label">Your Email Id <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <input type="email" class="form-control " mandatory ="yes" id="yourEmailId" placehoder="Your Email Id">
            </div>
          </div>
          <div class="form-group">
            <label for="deptName" class="col-sm-3 control-label">Category <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <select class="form-control select2 select2-hidden-accessible" id="contactCategory"  mandatory ="yes" style="width: 100%;" tabindex="-1" aria-hidden="true" placeholder="Category">
                <option>-- Select One --</option>
                <option>Placement Related</option>
                <option>Portal Related</option>
                <option>Don't Know</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="yourEmailId" class="col-sm-3 control-label">Descriptiion <span class="valueRequired">*</span></label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="4" placehoder="Enter Description..." id="contactDescription"  mandatory ="yes"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer" >
         <center><div>
            <button type="submit" class="btn btn-primary" id="submitContactBtn" onClick="submitContacForm()">Submit  <i class="fa fa-check"></i></button>
            <button type="reset" class="btn btn-warning" > Reset <i class="glyphicon glyphicon-refresh"></i></button>
            <button type="button" class="btn btn-danger"  data-dismiss="modal">Close <i class="fa fa-times"></i></button>
            
        </div></center>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function submitContacForm(){
    var formId = "contactUsForm";
    if(formValidator(formId)){

    }
  }
</script>