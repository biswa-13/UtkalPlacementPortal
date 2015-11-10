<?php
	if (isset($_POST['cpasswordce']))
	{
		$current_password = $_POST['cpasswordce'];
	}
	if (isset($_POST['newemail']))
	{
		$new_email = $_POST['newemail'];
	}

	if ($current_password === getuserfield_settings('password', $user_id))
	{
		if (update_email($user_id, $new_email))
		{
			$msg = "Your email changed successfully.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
		else
		{
			$msg = "Sorry, Your email could not be changed.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
	}
	else
	{
		$msg = "Your current password is invalid.";
		header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$settings_msg");
	}
?>