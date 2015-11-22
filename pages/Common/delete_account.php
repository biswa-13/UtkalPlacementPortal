<?php
	if (isset($_POST['cpassworddl']))	{
		$current_password = $_POST['cpassworddl'];
	}

	if ($current_password === getuserfield_settings('password', $user_id))	{
		if (delete_account($user_id))	{
			$msg = "Account Deleted Successfully";
			header("Location: student_homepage.php?pid=81fgc3tx&settings_msg=$msg");
		}
		else
		{
			$msg = "Your account could not be deleted.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
	}
	else
	{
		$msg = "Your current password is invalid.";
		header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
	}
?>