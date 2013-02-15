<!DOCTYPE html >
<html>
	<head>
		<title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php

			// init of reaction file                                                      
			echo exec('touch reactionTemp.txt');                                          
			echo exec('chmod 777 reactionTemp.txt');                                      
			$data = fopen('reactionTemp.txt','w');                                        
			fputs($data, "-CAT \n");                                                      
			fclose($data);  

			// reaction saving in a file
			$name=(isset($_POST["reactions"])) ? $_POST["reactions"] : "";
			$reac = fopen('reactionTemp.txt','w');
			$reac2 = fopen('reactionTemp2.txt','w');
			fputs($reac, "-CAT \n");                                                      
			fputs($reac, "$name \n");
			fputs($reac2, "$name \n");
			fclose($reac);
			fclose($reac2);
			include 'createFiles.php';

			header("Location: create.php");                                               
		?>
	</body>
</html>
