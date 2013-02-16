<!DOCTYPE html >

<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			include 'reac.php';
			include 'parser_enzymes.php';	
			include 'parser_metabolite.php';
			include 'parser_stoechiometry.php';
		?>
	</body>
</html>
