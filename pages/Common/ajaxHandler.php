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
    elseif ($reqId == 14) {
      getDepartmentDetails();
    }
    elseif ($reqId == 15) {
      editDepartment($_POST["formData"],$_POST["id"]);
    }
    elseif ($reqId == 16) {
      deleteDepartment($_POST["deptId"]);
    }
    elseif ($reqId == 17) {
      getDeptBasicDetails();
    }
    else if($reqId == 18){
      addNewEmployer($_POST["formData"]);
    }
    else if($reqId == 19){
      getEmployerDetails();
    }
    elseif ($reqId == 20) {
      editEmployer($_POST["formData"],$_POST["id"]);
    }
    elseif ($reqId == 21) {
      deleteEmployer($_POST["employerId"]);
    }
    elseif ($reqId == 22) {
      getAdminDashboardInfo();
    }
    elseif($reqId == 23){
      getEmployerBasicDetails();
    }
 }
}// end of Controller

function addNewDepartment($data){
 /*
  echo "addNewDepartment() called ...";
  echo "formData// deptName -->".$_POST["formData"]['deptName'];*/
  $status = 'fail';
  //print_r(array_values($data));
  try{
    $form_data = 
    array(
     // 'id' => 0,
      'dept_name' => $_POST["formData"]['dept_name'],
      'dept_type'=> $_POST["formData"]['dept_type'],
      'head_name' => $_POST["formData"]['head_name'],
      'head_contact_no' => $_POST["formData"]['head_contact_no'],
      'head_email_id'=> $_POST["formData"]['head_email_id'],
      'dept_contact_no' => $_POST["formData"]['dept_contact_no'],
      'dept_email_id' => $_POST["formData"]['dept_email_id']
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

}// end of addNewDepartment()

function getDepartmentDetails(){
  try{
    $query = "SELECT * FROM department_info ORDER BY id";
    $result = mysql_query($query);
    $data = array('ok');
    if($result){
      while ($row = mysql_fetch_array($result))
      {
        array_push($data, $row);
      }
      echo json_encode($data);
    }
  }catch(Exception $ex){
     echo "<script>
      var msg = '<b>* Error Occured While Fetching Departments ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";
  }

}// end of getDepartmentDetails()

function getDeptBasicDetails(){
  try{
    $query = "SELECT dept_name, dept_type, head_name, dept_email_id , dept_contact_no FROM department_info ORDER BY id";
    $result = mysql_query($query);
    $data = array('ok');
    if($result){
      while ($row = mysql_fetch_array($result))
      {
        array_push($data, $row);
      }
      echo json_encode($data);
    }
  }catch(Exception $ex){
     echo "<script>
      var msg = '<b>* Error Occured While Fetching Departments ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";
  }

}// Finish getDeptBasicDetails()

function editDepartment($data){
  try{
    $status = 'fail';
    $id = $_POST["id"];
    $tableName = "department_info";
    $where_clause = "where id = $id ";
    $result = dbRowUpdate($tableName,  $_POST["formData"], $where_clause);
    if($result >= 1){
      $status = "ok";
    }

  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Updating Department ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";

  }
  echo $status;

}// end of editDepartment()

function deleteDepartment($deptId){
  try{
  $status = 'fail';
  $id = $deptId;
  $tableName = "department_info";
  $where_clause = "where id = $id ";
  $result = dbRowDelete($tableName, $where_clause);
  if($result >= 1){
    $status = "ok";
  }

  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Updating Department ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";

  }
  echo $status;

}// end of deleteDepartment()

function addNewEmployer($data){
  $status = 'fail';
  //print_r(array_values($data));
  try{
    $form_data = 
    array(
     // 'id' => 0,
      'user_name' => $_POST["formData"]['user_name'],
      'mail_id'=> $_POST["formData"]['mail_id'],
      'contact' => $_POST["formData"]['contact'],
      'alternate_contact'=> $_POST["formData"]['alternate_contact'],
      'website' => $_POST["formData"]['website'],
      );
    $tableName = "employer_personal_info";
    $result = dbRowInsert($tableName, $form_data);
    if ($result) {
      $status = "ok";
    }
  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Inserting New Employer ...</b>';
      showWarning(msg);
    </script>"; 
    echo"fail";
  }
  echo $status;

}//  end of addNewEmployer()

function getEmployerDetails(){
  try{
    $query = "SELECT * FROM employer_personal_info ORDER BY id";
    $result = mysql_query($query);
    $data = array('ok');
    if($result){
      while ($row = mysql_fetch_array($result))
      {
        array_push($data, $row);
      }
      echo json_encode($data);
    }
  }catch(Exception $ex){
     echo "<script>
      var msg = '<b>* Error Occured While Fetching Employer's ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";
  }

}// end of getEmployerDetails()

function editEmployer($data){
  try{
    $status = 'fail';
    $id = $_POST["id"];
    $tableName = "employer_personal_info";
    $where_clause = "where id = $id ";
    $result = dbRowUpdate($tableName,  $_POST["formData"], $where_clause);
    if($result >= 1){
      $status = "ok";
    }

  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Updating Employer ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";

  }
  echo $status;

}// end of editDepartment()

function deleteEmployer($employerId){
  try{
  $status = 'fail';
  $id = $employerId;
  $tableName = "department_info";
  $where_clause = "where id = $id ";
  $result = dbRowDelete($tableName, $where_clause);
  if($result >= 1){
    $status = "ok";
  }

  }catch(Exception $ex){
    echo "<script>
      var msg = '<b>* Error Occured While Updating Employer ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";

  }
  echo $status;

}// end of deleteEmployer()

function getAdminDashboardInfo(){
  $query = "SELECT COUNT(*) FROM department_info";
  $result = mysql_fetch_row(mysql_query($query));
  $deptCount = $result[0];

  $query = "SELECT COUNT(*) FROM user_private_info";
  $result = mysql_fetch_row(mysql_query($query));
  $studentCount = $result[0];

  $query = "SELECT COUNT(*) FROM employer_personal_info";
  $result = mysql_fetch_row(mysql_query($query));
  $employerCount = $result[0];

  $data = array('ok',
    'studentCount' => $studentCount,
    'deptCount' => $deptCount,
    'employerCount' => $employerCount
    );
  $data = json_encode($data);
  echo $data;

}//end of getAdminDashboardInfo()

function getEmployerBasicDetails(){
  try{
    $query = "SELECT user_name, website FROM employer_personal_info ORDER BY id";
    $result = mysql_query($query);
    $data = array('ok');
    if($result){
      while ($row = mysql_fetch_array($result))
      {
        array_push($data, $row);
      }
      echo json_encode($data);
    }
  }catch(Exception $ex){
     echo "<script>
      var msg = '<b>* Error Occured While Fetching Employers ...</b>';
      showWarning(msg);
    </script>";
    echo"fail";
  }

}// Finish getEmployerBasicDetails()

?>