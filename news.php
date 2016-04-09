<?php
	include ("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Order &amp; Chaos Online - News" />
<title>Order &amp; Chaos Online - News</title>
<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
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
					<table class="newstable" style=" margin-bottom:30px;"  cellspacing="0px" cellpadding="0px"  border="0px" align="center">
						<tbody background="img/container_bg.jpg">
							<tr>
								<td class="header_container">
									<table  cellspacing="25px" cellpadding="0"  border="0" align="center" style="margin-bottom:;">
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
									<h2 class="headline" align="center">
										Recent Articles
									</h2>
								<div>
								<?php
												$on_page = 10;
												$num_page = ceil((mysqli_num_rows(mysqli_query($db,"SELECT COUNT(id) FROM news")))/$on_page);
												$num_page1 = ceil((mysqli_num_rows(mysqli_query($db,"SELECT id FROM news")))/$on_page);
												$current_page = $_GET['page'];
												if ($current_page < 1)
													$current_page = 1;
												if ($current_page < $num_page)
													$current_page = $num_page;
												$start_from = ($current_page - 1) * $on_page;
												$sql = "SELECT * FROM news ORDER BY id DESC LIMIT $start_from, $on_page"; 
								
									//$sql = "SELECT * FROM news ORDER BY id DESC"; 
									$result = mysqli_query ($db, $sql);
									while($row = mysqli_fetch_array($result)) 
									{ 
									  echo'
											<div align="left">
												<table class="container_close" cellspacing="0px" cellpadding="20px"  border="0px">
													<tbody>
														<tr>
															<td>
																<a href="fullnews.php?id='.$row['id'].'" class="small_news"><img src="'.$row['small_img'].'" ></a>
															</td>
															<td>
																<table cellspacing="0px" cellpadding="4px"  border="0" id="main">
																	<tr>
																		<td>
																			<a href="fullnews.php?id='.$row['id'].'" class="tittle">'.$row['tittle'].'</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="text">
																			'.$row['text'].'
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family: main_font, Serif; color: #444444;">
																			'.$row['date'].'
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</div> ';
									} 
									
									echo '<div class="nav_page">';
									for ($page = 1; $page <= $num_page1; $page = $page+1)
									{
										if ($page == $current_page)
										{
											echo '<strong class="page_button_strong">'.$page.'</strong>';
										}
										else
										{
											echo '<a href="news.php?page='.$page.'" class="page_button_href">'.$page.'</a>';
										}
									
									}
									echo '</div>';
								?>
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
		<div class="logo2" align="center">
			<div class="protection">Welcome to Gameloft's massively multiplayer online role-playing game, Order & Chaos Online - and its localized titles - ("Order & Chaos Online"). Order & Chaos Online is the copyrighted work of Gameloft S.E., a corporation organized under the laws of France. Effective as of January 14th, 2013 (the "Effective Date"), Order & Chaos Online will be hosted by Gameloft S.E. (referred to herein as "Gameloft"), and/or its licensees, and all use of the Order & Chaos Online proprietary online service (the "Service") is governed by the terms and conditions contained in this Terms of Use Agreement entered into between Gameloft and yourself, and includes any future revisions implemented according to the procedure described in Article VII herein (hereafter referred to as the "Terms of Use"). The Service may only be used by obtaining access to the Gameloft online game service including Gameloft LIVE! (the "Gameloft Service") and by connecting to your Facebook account. You must accept the Terms of Use prior to playing Order & Chaos Online. Any use of Order & Chaos Online not in accordance with the Terms of Use is expressly prohibited. You represent that you are a 'natural person' who is over the age of eighteen (18) years old, or over the age of majority in the country where you are a citizen, and agree to these Terms of Use and Facebook Terms and Policies on behalf of yourself and, at your discretion, one (1) minor for whom you are a parent or guardian and whom you have authorized to use the account you create on the Service.</div>
		</div>
	</div>
</div>
</body>
</html>