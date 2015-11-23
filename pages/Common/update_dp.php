<?php
	$name = $_FILES['file']['name'];
	$extension = strtolower(substr($name, strpos($name, '.') + 1));
	$type = $_FILES['file']['type'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$size = $_FILES['file']['size'];
	$maxsize = 2097152;
	
	if (isset($name))
	{
		if (!empty($name))
		{
			if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'JPG' || $extension == 'JPEG' || $extension == 'PNG')
			{				
				if ($size < $maxsize)
				{
					$newname = $username . '_dp';
					$location = 'uploads/';
					if (file_exists($location.$newname.'.jpg'))
					{
						$newname1 = $username . '_dp1';
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							unlink($location.$newname.'.jpg');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							clearstatcache();
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists($location.$newname.'.jpeg'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $username . '_dp';
							unlink($location.$newname.'.jpeg');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							clearstatcache();
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists($location.$newname.'.JPG'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $username . '_dp';
							$msg = "File successfully uploaded.";
							unlink($location.$newname.'.JPG');
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							clearstatcache();
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.JPEG'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $username . '_dp';
							unlink($location.$newname.'.JPEG');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");	
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.PNG'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $username . '_dp';
							unlink($location.$newname.'.PNG');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");		
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.png'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $username . '_dp';
							unlink($location.$newname.'.png');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							$msg = "File successfully uploaded.";
							header("Refresh:0; student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else
					{
						$newname = $username . '_dp';
						if (move_uploaded_file($tmp_name, $location.$newname.'.'.$extension))
						{
							echo "Operation successful";
							clearstatcache();
							$msg = "File successfully uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
						else
						{
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
				}
				else
				{
					$msg = "Invalid file size.";
					header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
				}
			}
			else
			{
				$msg = "Invalid file type.";
				header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$type");
			}

			
		}
		else
		{
			$msg = "Please choose a file.";
			header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
		}
	}
?>
