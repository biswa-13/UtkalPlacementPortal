<?php
	if($cv_name == 'uploads/cv_upload.jpg')
	{
		$msg = "No file to be deleted";
		header("Refresh:0; student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
	}
	else
	{
		unlink($cv_name);
		copy("images/cv_upload.jpg", "uploads/cv_upload.jpg");
		$cv_name = 'uploads/cv_upload.jpg';
		$msg = "File succcessfully deleted";
		header("Refresh:0; student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
	}
?>