
    <!-- Common Custom Javascript Files -->
    <script type="text/javascript" src="./js/common.js"></script>
<?php
	ob_start();
	session_start();
	require "dbconnect.php";
	require "backendfunctions.php";
	$current_file = $_SERVER['SCRIPT_NAME'];
?>