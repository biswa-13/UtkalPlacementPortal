<?php
	if (isset($_GET['accnt_msg']))	{
		print_r($_GET['accnt_msg']);
	}
	require 'Pages/Common/dbconnect.php';
	require 'pages/Common/core.php';
	include 'Pages/Common/login_page.php';
?>
