<?php



	header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
	include ("config.php");
  /* Принимаем данные из формы */
  
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности

  
  
  
  $query = "INSERT INTO `comment` (`name`, `page_id`, `text_comment`)
	VALUES ('$name', '$page_id', '$text_comment')";
	
	$q = mysqli_query($db,$query);
	echo mysqli_error($db);
	
	 /* oleg ebashit kostyl */
  $oleg_does_shit = "DELETE FROM `comment` WHERE `name` = ''";
	$q2 = mysqli_query($db,$oleg_does_shit);
?>