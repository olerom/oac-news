<?php
	include ("../config.php");
?>

<html>
<head>
<title>Administrator tools</title>
<link href="../img/favicon.jpg" rel="icon" type="image/jpg" />
<link href="../css/admin.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">

tinymce.init({
        selector: ".add_fulltext",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
		
		//toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
       	
		
		menubar: false,
        toolbar_items_size: 'big',
		
        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});</script>
</script>
	

</head>
<body>
	<div id="container_manager" align="center">
		<div style="font-size:25px; color:B8A784;" align="center">Add News</div>
		<form action="add_news_action.php" method="post">
			<input type="textbox" name="tittle" required placeholder="Add tittle">
			<input type="textbox" name="author" required placeholder="Author">
			<input type="textbox" name="date" required placeholder="Date 2014-12-31">
			<input type="textbox" name="big_img" required placeholder="img/logo/ *bigimg* .jpg">
			<input type="textbox" name="small_img" required placeholder="img/logo/ *smallimg* .jpg">	
			<textarea required name="text" placeholder="Add brief trailer"></textarea>	
			<textarea required name="fulltext" placeholder="Add full ready-to-go text" class="add_fulltext"></textarea>	
			<input type="submit" name="submit" value="You sure?!">		
		</form>
	</div>
</body>
</html>