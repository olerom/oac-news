<?php
	include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Order &amp; Chaos Online - Classes</title>
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
								<td class="header_container" style="margin-top: ;">
									<table  cellspacing="25px" cellpadding="0px"  border="0px" align="center" style="margin-bottom:;">
										<tr>
											<td><a href="news.php" class="header1"><div>News</div></a></td>
											<td><a href="guides.php" class="header1"><div>Guides</div></a></td>
											<td><a href="classes.php" class="header"><div>Game Classes</div></a></td>
											<td><a href="requests.php" class="header1"><div>Requests</div></a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td class="body_container">
									<h2 class="headline" align="center">
										Choose Your Class
									</h2>
									<?php
										
										$sql = "SELECT classname, id FROM classes where id='1'"; 
										$result = mysqli_query ($db, $sql);
										$row = mysqli_fetch_array($result) ;
										echo '
									<table cellspacing="2px" cellpadding="0px"  border="0px" align="center">
										<tbody>
										<tr>			
											<td>
												<table>
													<tbody>
														<tr>
															<td> 	
																<a href="classchoosed.php?id='.$row['id'].'" class="href_class">
																<table>
																	<tbody>
																		<tr>				
																			<td width="306px" background="img/classes/classmage.png" class="classchoose" valign="bottom">
																			<div>
																			 '.$row['classname'].'
																			 </div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td>
												';
											?>
									<?php
										
										$sql = "SELECT classname, id FROM classes where id='2'"; 
										$result = mysqli_query ($db, $sql);
										$row = mysqli_fetch_array($result) ;
										echo '
												<table>
													<tbody>
														<tr>
															<td> 	
																<a href="classchoosed.php?id='.$row['id'].'" class="href_class">
																<table>
																	<tbody>
																		<tr>				
																			<td width="306px" background="img/classes/classranger.png" class="classchoose" valign="bottom">
																			<div>
																				'.$row['classname'].'
																			</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td>
												';
											?>
									<?php
										
										$sql = "SELECT classname, id FROM classes where id='3'"; 
										$result = mysqli_query ($db, $sql);
										$row = mysqli_fetch_array($result) ;
										echo '
												<table>
													<tbody>
														<tr>
															<td> 	
																<a href="classchoosed.php?id='.$row['id'].'" class="href_class">
																<table>
																	<tbody>
																		<tr>				
																			<td width="306px" background="img/classes/classwarrior.png" class="classchoose" valign="bottom">
																			<div>
																				'.$row['classname'].'
																			</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td>
												';
											?>
									<?php
										
										$sql = "SELECT classname, id FROM classes where id='4'"; 
										$result = mysqli_query ($db, $sql);
										$row = mysqli_fetch_array($result) ;
										echo '
												<table>
													<tbody>
														<tr>
															<td> 	
																<a href="classchoosed.php?id='.$row['id'].'" class="href_class">
																<table>
																	<tbody>
																		<tr>				
																			<td width="306px" background="img/classes/classmonk.png" class="classchoose" valign="bottom">
																			<div>
																				'.$row['classname'].'
																			</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										</tbody>
									</table>				
								</td>
							</tr>
							';
							?>
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
	<div style="height: 100px;width:100%;background : rgba(0, 0, 0, 0.45); ">
		<div  class="logo2" align="center">
		</div>
	</div>
</div>
</body>
</html>