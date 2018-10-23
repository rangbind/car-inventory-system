<?php

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

if($_FILES['file'])
{
	$img = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	// get uploaded file's extension
	$ext = pathinfo($img, PATHINFO_EXTENSION);

	$unique = date('YmdHis');
	// can upload same image using rand function
	$final_image = $unique.$img;
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{ 
		$path = $path.$final_image; 
		if(move_uploaded_file($tmp,$path)) 
		{
		echo $final_image;
		}
	} 
	else 
	{
		echo 0;
	}
}
?>
