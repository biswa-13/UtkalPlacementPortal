
<script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<?php
 require 'Pages/Common/showInformation.php';

	function check_user_login($email, $password)
	{
		$query = "SELECT id, user_name, mobile_no FROM user_private_info WHERE mail_id='$email' AND password='$password'";
		if ($query_run = mysql_query($query))
		{
			$num_rows = mysql_num_rows($query_run);
			if ($num_rows == 0)
			{
				
        echo '<script>
          var msg = "<span>* Invalid UserName or Password.</span>";
          showInformation(msg);
        </script>';
				//header("Location: index.php");
      
			}
			else
			{
				$user_id = mysql_result($query_run, 0, 'id');
        $username = mysql_result($query_run, 1, 'user_name');
        $user_mobile = mysql_result($query_run, 4, 'mobile_no');
				$_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $username;
        $_SESSION['user_mobile'] = $user_mobile;
				header("Location: student_homepage.php");
			}
		}
	}

  function getuserfield_academics($field, $user_id)
  {
    $query = "SELECT $field FROM user_academic_info WHERE id=$user_id";
    $query_run = mysql_query($query);
    if ($query_run)
    {
      if ($query_res = mysql_result($query_run, 0, $field))
      {
      	return $query_res;
      }
      else
      {
      	return NULL;
      }
    }
    else
    {
    	return NULL;
    }
  }

  function add_image($user_id, $image)
  {
    $query = "UPDATE user_private_info SET image='".mysql_real_escape_string($image)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function getuserfield_profile($field, $user_id)
  {
    $query = "SELECT $field FROM user_personal_info WHERE id=$user_id";
    $query_run = mysql_query($query);
    if ($query_run)
    {
      if ($query_res = mysql_result($query_run, 0, $field))
      {
        return $query_res;
      }
      else
      {
        return NULL;
      }
    }
    else
    {
      return NULL;
    }
  }

  function load_profile($user_id, $fname, $mname, $lname, $dob, $gender, $father, $mother, $preadd, $peradd)
  {
    $query = "UPDATE user_personal_info SET first_name='".mysql_real_escape_string($fname)."', mid_name='".mysql_real_escape_string($mname)."', 
          last_name='".mysql_real_escape_string($lname)."', dob='".mysql_real_escape_string($dob)."',gender='".mysql_real_escape_string($gender)."',
          father_name='".mysql_real_escape_string($father)."', mother_name='".mysql_real_escape_string($mother)."', 
          present_add='".mysql_real_escape_string($preadd)."', permanent_add='".mysql_real_escape_string($peradd)."' WHERE id=$user_id";
          
    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function getuserfield_settings($field, $user_id)
  {
    $query = "SELECT $field FROM user_private_info WHERE id=$user_id";
    $query_run = mysql_query($query);
    if ($query_run)
    {
      if ($query_res = mysql_result($query_run, 0, $field))
      {
        return $query_res;
      }
      else
      {
        return "No rows found";
      }
    }
    else
    {
      return "Not run";
    }
  }

  function getdept($field, $dept_id)
  {
    $query = "SELECT $field FROM department_info WHERE id=$dept_id";
    $query_run = mysql_query($query);
    if ($query_run)
    {
      if ($query_res = mysql_result($query_run, 0, $field))
      {
        return $query_res;
      }
      else
      {
        return "No rows found";
      }
    }
    else
    {
      return "Not run";
    }
  }

  function load_academics($user_id, $dept, $roll, $regno, $board10, $pass10, $percent10, $boardinter, $passinter, $percentinter, $graduniv, $gradcourse, $gradjoindate, $gradpassdate, $gradpercent, $pgcourse, $pgjoindate, $pgpassdate, $pgpercent)
  {
  	$query = "UPDATE user_academic_info SET dept_id='".mysql_real_escape_string($dept)."', dept_roll_no='".mysql_real_escape_string($roll)."', 
  			  reg_no='".mysql_real_escape_string($regno)."', x_board='".mysql_real_escape_string($board10)."',
  			  x_pass='".mysql_real_escape_string($pass10)."', x_percent='".mysql_real_escape_string($percent10)."', 
  			  intermed_board='".mysql_real_escape_string($boardinter)."', intermed_pass='".mysql_real_escape_string($passinter)."',
  			  intermed_percent='".mysql_real_escape_string($percentinter)."', grad_university='".mysql_real_escape_string($graduniv)."',
  			  grad_course='".mysql_real_escape_string($gradcourse)."', grad_join='".mysql_real_escape_string($gradjoindate)."',
  			  grad_pass='".mysql_real_escape_string($gradpassdate)."', grad_percent='".mysql_real_escape_string($gradpercent)."', 
  			  pg_course='".mysql_real_escape_string($pgcourse)."', pg_join='".mysql_real_escape_string($pgjoindate)."',
  			  pg_pass='".mysql_real_escape_string($pgpassdate)."', pg_percent='".mysql_real_escape_string($pgpercent)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
    	return FALSE;
    }
  }

  function update_password($user_id, $new_pass)
  {
    $query = "UPDATE user_private_info SET password='".mysql_real_escape_string($new_pass)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function activate_user($user_id)
  {
    $stat = 1;
    $query = "UPDATE user_private_info SET user_active='".mysql_real_escape_string($stat)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function deactivate_user($user_id)
  {
    $stat = 0;
    $query = "UPDATE user_private_info SET user_active='".mysql_real_escape_string($stat)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function check_activation($user_id)
  {
    $query = "SELECT user_active FROM user_private_info WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      if ($query_res = mysql_result($query_run, 0, 'user_active'))
      {
        return $query_res;
      }
      else
      {
        return "Not found";
      }
    }
    else
    {
      return "Query failure";
    }
  }

  function get_name($user_id)
  {
    $query = "SELECT first_name, mid_name, last_name FROM user_personal_info WHERE id=$user_id";
    $query_run = mysql_query($query);
    if ($query_run)
    {
      if (mysql_num_rows($query_run) == NULL)
      {
        return "Name not found.";
      }
      else
      {
        while ($query_res = mysql_fetch_assoc($query_run))
        {
          $name = $query_res['first_name'].'  '.$query_res['mid_name'].'  '.$query_res['last_name'];
        }
        return $name;
      }
    }
    else
    {
      return "Not run";
    }
  }

  function update_email($user_id, $new_email)
  {
    $query = "UPDATE user_private_info SET mail_id='".mysql_real_escape_string($new_email)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function update_mobile($user_id, $new_mobile)
  {
    $query = "UPDATE user_private_info SET mobile_no='".mysql_real_escape_string($new_mobile)."' WHERE id=$user_id";

    $query_run = mysql_query($query);
    if ($query_run)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

	function logged_in()
	{
		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
?>