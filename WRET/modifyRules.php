<!DOCTYPE html >
<html>
	<head>
		<title><?php echo TXT_GENERULES_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php

			// init the generules.grfile file                                                      
			echo exec('touch generules.grfile');                                          
			echo exec('chmod 777 generules.grfile');                                      
			$data = fopen('generules.grfile','w');

			// saving new rules in the file
			$name=(isset($_POST["rules"])) ? $_POST["rules"] : "";
			fputs($data, "$name \n");
			fclose($data);  
			header("Location: generules.php");
		?>
	</body>
</html>
