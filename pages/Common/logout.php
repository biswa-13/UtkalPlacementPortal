<?php
	if (isset($_GET['settings_msg']))	{
		$msg = $_GET['settings_msg'];
		deactivate_user($user_id);
		session_destroy();
		header ("Location: index.php?accnt_msg=$msg");
	}
	deactivate_user($user_id);
	session_destroy();
	header ("Location: index.php");
?>
