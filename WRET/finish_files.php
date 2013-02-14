<!DOCTYPE html >

<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			echo ('youpi!!!');
			$ext = $_POST["Metab"]);
			//~ foreach($ext as $value) {
				//~ print_r($value);
			//~ }
			echo exec('touch fichier.dat');
			echo exec('chmod 777 fichier.dat');
			$data = fopen('fichier.dat','w');
			file_put_contents('fichier.dat', file_get_contents('irrevTemp.txt')."\n"."\n".file_get_contents('revTemp.txt')."\n"."\n".file_get_contents('metabolitesTemp.txt')."\n"."\n".file_get_contents('reactionTemp.txt'));
			fclose($data);
			//header("Location: create.php");
		?>
	</body>
</html>
