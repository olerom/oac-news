<?php
	include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			$id = $_GET["id"];
			$sql = "SELECT * FROM news WHERE id='$id'"; 
			$result = mysqli_query ($db, $sql);
			$row = mysqli_fetch_array($result) ;
			echo
			'
				'.$row['tittle'].'
			'
		?> | Order &amp; Chaos Online
	</title>
<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet">
<script>	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53673795-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<div class="logo1">
	<header>
		<div class="line_top">
		</div>
		<a href="http://oac-news.com/">
			<div align="center" class="href_main_logo">			
			</div>
		</a>
		<div align="center" class="page_tittle">
			<h1>Order &amp; Chaos Online - News</h1>
		</div>
	</header>
		<table class="body_table" align="center">
			<tbody>
				<tr>
					<td valign="top">
						<div style="display: block; width: 161px; height: 600px; margin-top: 60px;">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- oacnews -->
							<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-1900918008378753" data-ad-slot="4408592620"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>			
						</div>
					</td>
					<td valign="top">
						<div align="center">
							<img src="img/table_logo1.png" id="table_logo">
						</div>
						<table class="newstable" style=" margin-bottom:30px;" cellspacing="0px" cellpadding="0px"  border="0px" align="center">
							<tbody background="img/container_bg.jpg">
								<tr>
									<td class="header_container">
										<table  cellspacing="25px" cellpadding="0px"  border="0px" align="center">
											<tr>
												<td><a href="news.php" class="header"><div>News</div></a></td>
												<td><a href="guides.php" class="header1"><div>Guides</div></a></td>
												<td><a href="classes.php" class="header1"><div>Game Classes</div></a></td>
												<td><a href="requests.php" class="header1"><div>Requests</div></a></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="body_container">
										<?php
											echo'
											<div class="head_nav">
												<a href="news.php" class="head_nav_news">News</a> > 
												<a href="fullnews.php?id='.$row['id'].'" class="head_nav_current">'.$row['tittle'].'</a>
											</div>
											<h1 class="headline" align="center">
												'.$row['tittle'].'
											</h1>
											'?>
										
										<div>
											<?php
												echo'
														<div>
															<table class="full_news" cellspacing="0px" cellpadding="0px"  border="0px" align="center"  id="main">
																<tbody>
																<tr>
																	<td align="center">
																		<img src="'.$row['big_img'].'" alt="'.$row['tittle'].'">
																	</td>
																</tr>
																<tr>
																	<td>
																		<table style="margin-top: 12px;" cellspacing="0px" cellpadding="4px"  border="0px" align="center"  class="fullmain">
																			<tr>
																				<td id="fulltext">
																					'.$row['fulltext'].'
																				</td>
																			</tr>
																			<tr>
																				<td id="date">
																					'.$row['date'].'
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																</tbody>
															</table>
														</div>
														<div class="hr_div">
														</div>';
												 ?>
											<div class="pre-comments">
											Comments:
											</div>
											<div class="comments">
												<?php
												  $page_id = $row['id'];
													$sql_comment = "SELECT * FROM comment WHERE page_id='$page_id'"; 
													$result_comment = mysqli_query ($db, $sql_comment);
													while($row_comment = mysqli_fetch_array($result_comment)) 
													{ 
													echo'
														<div class="comment_holder">
															<div class="user_ava"></div>
															<div class="viewed_comment">
																<div class="name">'.$row_comment['name'].' wrote:</div>
																	<div class="text_comment">'.$row_comment['text_comment'].'</div>
															</div>
														</div>'
													;
													}
	
												?>
											
											
											</div>
											<div class="create_comment">
												<div class="pre-comments">
												Join the conversation:
												</div>
												<form name="comment" action="comment.php" method="POST">
													<input type="hidden" name="page_id" value="<?php echo $row['id'] ?>" />
													<input type="textbox" name="name" required placeholder="Name" class="post_comment_login" />
													<textarea name="text_comment" cols="30" rows="50" placeholder="Comment here" class="post_comment_text"></textarea>
													<input name="submit" type="submit" value="POST" class="post_comment_submit" />
												</form>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="footer_container">
									</td>
								</tr>
							</tbody>
						</table>
					</td>
					<td valign="top">
						<div style="display: block; width: 161px; height: 600px; margin-top: 60px;">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- oacnews -->
							<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-1900918008378753" data-ad-slot="4408592620"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>			
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="botbot">
			<div  class="logo2" align="center">
			</div>
		</div>
	</div>
</body>
</html>