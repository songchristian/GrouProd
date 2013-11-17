<!doctype html>



<html lang="en">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<title>GrouProd</title>
	<meta name="description" content="Ozymandias">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	

	<div class="nav">
		<img src="logo.png" alt="some_text">
	</div>
	<div class="wrapper" id="tableHolder">
		<script src="js/scripts.js"></script>
		<?php
			require 'GrouProd_lib.php';
			get_table_name($global_dbh);
			
		?>
		<div class="push"></div>
	</div>
	<div class="footer">
		<p>Hack Duke</p>
	</div>
</body>
</html>