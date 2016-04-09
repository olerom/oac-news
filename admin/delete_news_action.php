<?php
	include ("../config.php");
	$id = $_GET['id'];
	$q = mysqli_query($db,"DELETE FROM news WHERE id='$id'");
	if (q == true)
		{
		echo"<html><head><meta http-equiv='Refresh' content='0; URL=../news.php'</head></html>";
		}
		else
		{
		echo mysqli_error ();
		}



?>