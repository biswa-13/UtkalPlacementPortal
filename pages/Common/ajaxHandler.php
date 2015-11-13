<?php
  include "dbFunctions.php";
	//echo '<script>console.log("Ajax Landing Page..")</script>';
 //Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
if(is_ajax()){
 if (isset($_POST["reqId"]) && !empty($_POST["reqId"])) { 
 //Checks if action value exists
    $reqId = $_POST["reqId"];
    //echo "reqId -->".$reqId;
    if($reqId == 13){

      addNewDepartment($_POST["formData"]);
    }
 }
}
 function addNewDepartment($data){
 /*
  echo "addNewDepartment() called ...";
  echo "formData// deptName -->".$_POST["formData"]['deptName'];*/
  $status = 'fail';
  //print_r(array_values($data));
  try{
    $form_data = 
    array(
      'id' =>9,
      'dept_name' => $_POST["formData"]['deptName'],
      'dept_type'=> $_POST["formData"]['deptType'],
      'head_name' => $_POST["formData"]['headName'],
      'head_contact_no' => $_POST["formData"]['headContactNo'],
      'head_email_id'=> $_POST["formData"]['headEmailId'],
      'dept_contact_no' => $_POST["formData"]['deptContactNo'],
      'dept_email_id' => $_POST["formData"]['deptEmailId']
      );
    $tableName = "department_info";
    $result = dbRowInsert($tableName, $form_data);
    if ($result) {
      $status = "ok";
    }
  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Inserting New Department ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";
  }
  echo $status;
 }

?>