<?php
	if($dp_name == 'uploads/default_user_icon.jpg')
	{
		$msg = "No file to be deleted";
		header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
	}
	else
	{
		unlink($dp_name);
		copy("images/default_user_icon.jpg", "uploads/default_user_icon.jpg");
		$dp_name = 'uploads/default_user_icon.jpg';
		$msg = "File succcessfully deleted";
		header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
	}
?>