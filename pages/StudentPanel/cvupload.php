<?php
	$allowedExts = array("pdf", "doc", "docx");
	$allowedMimeTypes = array("application/msword", "text/pdf");

	$extension = end (explode(".", $_FILES["file"]["name"]));

	if ($_FILES["file"]["size"] < 5242880)
	{
		die ("File size exceeding.");
	}
	else
	{
		if (! (in_array($extension, $allowedExts)))
		{
			die ("Extension Violated.");
		}
		else
		{
			if (!(in_array($_FILES["file"]["type"] , $allowedMimeTypes)))
			{
				die("Not a CV  File");
			}
		}
	}
?>