<?php 
	include ("../config.php");
					
	/*
		function filter_data($var)
		{
			$var = mysqli_real_escape_string($db, trim($var));
			$var = htmlspecialchars($var);
			$var = trim($var);
			//return $var;
		}
	*/
	$tittle = mysqli_real_escape_string($db,$_POST['tittle']);
	$tittle = htmlspecialchars($tittle);
	$tittle = trim($tittle);
	
	$text = mysqli_real_escape_string($db,$_POST['text']);
	$text = htmlspecialchars($text);
	$text = trim($text);
	
	
	$fulltext = mysqli_real_escape_string($db,$_POST['fulltext']);
	$fulltext = trim($fulltext);
	
	$author = mysqli_real_escape_string($db,$_POST['author']);
	$author = htmlspecialchars($author);
	$author = trim($author);
	
	$date = mysqli_real_escape_string($db,$_POST['date']);
	$date = htmlspecialchars($date);
	$date = trim($date);
	
	$big_img = mysqli_real_escape_string($db,$_POST['big_img']);
	$big_img = htmlspecialchars($big_img);
	$big_img = trim($big_img);
	
	$small_img = mysqli_real_escape_string($db,$_POST['small_img']);
	$small_img = htmlspecialchars($small_img);
	$small_img = trim($small_img);
	
	$query = "INSERT INTO news (`tittle`,`text`,`fulltext`,`author`,`date`,`big_img`,`small_img`)
	VALUES ('$tittle','$text','$fulltext','$author','$date','$big_img','$small_img')";
	
	$q = mysqli_query($db,$query);
	echo mysqli_error($db);
	/*if (q == true)
		{
			echo"<html><head><meta http-equiv='Refresh' content='0; URL=../news.php'</head></html>";
		}
	else
		{
			echo mysqli_error ();
		}*/
?>