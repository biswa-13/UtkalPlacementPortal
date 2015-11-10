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
			if ($extension == 'jpg' || $extension == 'jpeg' ||  $extension == 'JPG' || $extension == 'JPEG')
			{				
				if ($size < $maxsize)
				{
					echo "processing";
					$newname = $user_id . '_dp';
					$location = 'uploads/';
					if (file_exists($location.$newname.'.jpg'))
					{
						$newname1 = $user_id . '_dp1';
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							unlink($location.$newname.'.jpg');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							if (add_image($user_id, $location.$newname.'.'.$extension))
							{
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
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists($location.$newname.'.jpeg'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $user_id . '_dp';
							unlink($location.$newname.'.jpeg');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							if (add_image($user_id, $location.$newname.'.'.$extension))
							{
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
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists($location.$newname.'.JPG'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $user_id . '_dp';
							$msg = "File successfully uploaded.";
							unlink($location.$newname.'.JPG');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							if (add_image($user_id, $location.$newname.'.'.$extension))
							{
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
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else if (file_exists('uploads/'.$newname.'.JPEG'))
					{
						
						if (move_uploaded_file($tmp_name, $location.$newname1.'.'.$extension))
						{
							$newname = $user_id . '_dp';
							unlink($location.$newname.'.JPEG');
							clearstatcache();
							rename($location.$newname1.'.'.$extension, $location.$newname.'.'.$extension);
							if (add_image($user_id, $location.$newname.'.'.$extension))
							{
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
							$msg = "Sorry, file not uploaded.";
							header("Location: student_homepage.php?pid=6st16yz9&settings_msg=$msg");
						}
					}
					else
					{
						$newname = $user_id . '_dp';
						if (move_uploaded_file($tmp_name, $location.$newname.'.'.$extension))
						{
							clearstatcache();
							if (add_image($user_id, $location.$newname.'.'.$extension))
							{
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