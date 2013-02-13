<!DOCTYPE html >
<html>
	<head>
		<title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			exec("python parser_stoechiometry.py");
			header('Refresh:1 ; url=create.php');
			echo 'You\'ll be redirected in about 1 secs. If not, click <a href="create.php">here</a>.';
		?>
	</body>
</html>
