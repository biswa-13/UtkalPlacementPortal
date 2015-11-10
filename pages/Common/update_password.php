<?php
	if (isset($_POST['cpassword']))
	{
		$current_password = $_POST['cpassword'];
	}
	if (isset($_POST['newpass']))
	{
		$new_password = $_POST['newpass'];
	}
	if (isset($_POST['confirmpass']))
	{
		$confirm_pass = $_POST['confirmpass'];
	}

	if ($current_password === getuserfield_settings('password', $user_id))
	{
		if (update_password($user_id, $new_password))
		{
			$msg = "Your password changed successfully.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
		else
		{
			$msg = "Sorry, Your password could not be changed.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
	}
	else
	{
		$msg = "Your current password is invalid.";
		header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
	}
?>