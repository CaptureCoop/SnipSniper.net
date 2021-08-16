<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
		<title>SnipSniper.org - <?php echo (ucfirst($page)); ?></title>
		<style><?php include_once("css/main.css.php"); ?></style>
	</head>
	<body>
		<div align="center"><h1><img src="SnSn.png" id="titleIcon">SnipSniper.org</h1></div>

		<div class="nav">
			<div class="navTab"><a class="navLink" href="/home">Home</a></div>
			<div class="navTab"><a class="navLink" href="/about">About</a></div>
			<div class="navTab"><a class="navLink" href="/downloads">Downloads</a></div>
			<div class="navTab"><a class="navLink" href="/links">Links</a></div>
			<div class="navTab"><a class="navLink" href="/wiki">Wiki</a></div>
		</div>
		<div class="mobileSpacer"></div>


		<h2><?php echo(ucfirst($page)); ?></h2>

		<?php include_once("../php/templates/sites/" . $page . ".php"); ?>

		<br>
		<br>
		<div id="footer" align="center">
			<p>SnipSniper.org - Sven Wollinger 2021</p>
			<a href="/impressum">Impressum</a> | <a href="/dsgvo">DSGVO</a>
		</div>
	</body>
</html>
