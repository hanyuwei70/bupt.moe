<?php
	require_once("config.php");
//	$sqlconn=mysqli_
?>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $WEBSITE_TITLE?></title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<link rel="stylesheet" type="text/css" href="sidebar.css" />
<link rel="icon" type="image/vnd-microsoft.icon" href="favicon.ico" />
</head>
<div id="container">
	<div id="header">
	</div>
	<div id="content">
		<div id="logo" class="title">
		<h1><?php echo $WEBSITE_TITLE?></h1><span class="sectitle">bupt.moe 北邮人的作死天堂</span>
		</div>
		<div id="post">
			<div id="post-1" class="posts">
				<div class="posttitle">
					<h2>A Test Post</h2>
				</div>
				<div class="postcontent-pre">
					<p>此主页用来放一些檐枫动漫社相关的东西啦！</p>
					<p>注：访问本站请使用各个浏览器最新版访问以享受最好的视觉效果。IE6@XP IE8@XP Android 2.3.7 因为SSL协议原因无法访问本站</p>
				</div>
			</div>
			<div id="post-2" class="posts">
				<div class="posttitle">
					<h2>图片测试</h2>
				</div>
				<div class="postcontent-pre">
					<div class="postcontent-pre-img">
					<img src="test1.jpg" alt="测试图片"/>
					</div>
					<p>23333333<br />盗图！</p>
				</div>
			</div>
			<div id="post-3" class="posts">
				<div class="posttitle">
					<h2>2015春季学期社员大会</h2>
				</div>
				<div class="postcontent-pre">
					<div class="precontent-pre-img">
						<img src="test2.jpg" />
					</div>
					<p>看我们纯洁无邪的笑容！</p>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
	<p>bupt.moe 由 hanyuwei70 设计</p>
	<p>联系：请看whois</p>
	</div>
</div>
<section class="sidebar">
<ul>
	<li>class1</li>
	<li>class2</li>
</ul>
</section>
<body>
</body>
</html>
