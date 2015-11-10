<?php
	$name = $_FILES['file']['name'];
	$extension = strtolower(substr($name, strpos($name, '.') + 1));
	$tmp_name = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$maxsize = 5242880;

	$_SESSION['cv_ext'] = $extension;
	
	if (isset($name))
	{
		if (!empty($name))
		{
			//header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$extension");
			if ($extension == 'doc' || $extension == 'docx' ||  $extension == 'pdf')
			{
				if ($filesize < $maxsize)
				{
					$location = 'uploads/';
					$newname = $user_id.'_cv';
					if (file_exists('uploads/'.$newname.'.doc'))
					{
						$newname1 = $user_id . '_cv1';
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{							
							$msg = "File successfully uploaded.";
							unlink($location.$newname.'.doc');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.docx'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $user_id . '_cv';
							$msg = "File successfully uploaded.";
							unlink($location.$newname.'.docx');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.pdf'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $user_id . '_cv';
							$msg = "File successfully uploaded.";
							unlink($location.$newname.'.pdf');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
					}
					else
					{
						$newname = $user_id . '_cv';
						if (move_uploaded_file($tmp_name, $location.$newname.'.'.$extension))
						{							
							$msg = "File successfully uploaded.";
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
						}
					}
				}
				else
				{
					$msg = "Invalid file size.";
					header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
				}
			}
			else
			{
				$msg = "Invalid file type.";
				header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
			}
		}
		else
		{
			$msg = "Please choose a file.";
			header("Location: student_homepage.php?pid=2ac17nw3&academic_msg=$msg");
		}
	}
?>
