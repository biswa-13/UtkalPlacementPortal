<?php
	deactivate_user($user_id);
	session_destroy();
	header ("Location: index.php");
?>