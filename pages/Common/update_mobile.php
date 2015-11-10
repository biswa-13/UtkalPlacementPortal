<?php
	if (isset($_POST['cpasswordmb']))
	{
		$current_password = $_POST['cpasswordmb'];
	}
	if (isset($_POST['newmobile']))
	{
		$new_mobile = $_POST['newmobile'];
	}

	if ($current_password === getuserfield_settings('password', $user_id))
	{
		if (update_mobile($user_id, $new_mobile))
		{
			$msg = "Your mobile number changed successfully.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
		else
		{
			$msg = "Sorry, Your mobile number could not be changed.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
	}
	else
	{
		$msg = "Your current password is invalid.";
		header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$settings_msg");
	}
?>