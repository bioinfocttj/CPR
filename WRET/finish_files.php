<!DOCTYPE html >

<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			$ext = $_POST["extMetab"];
			$int = $_POST["Metab"];
			
			echo exec('touch fichier.dat');
			echo exec('chmod 777 fichier.dat');
			echo exec('touch temp.dat');
			echo exec('chmod 777 temp.dat');
			$data = fopen('fichier.dat','a');
			$data2 = fopen('temp.dat','a');
			file_put_contents('temp.dat', file_get_contents('irrevTemp.txt')."\n"."\n".file_get_contents('revTemp.txt')."\n"."\n");
			
			fputs($data2,"-METINT\n");
			foreach($int as $value) {
				fputs($data2,"$value ");
			}
			fputs($data2,"\n\n");
			
			fputs($data2,"-METEXT\n");
			foreach($ext as $value) {
				fputs($data2,"$value ");
			}
			fputs($data2,"\n\n");
			
			
			fclose($data2);
			
			file_put_contents('fichier.dat', file_get_contents('temp.dat')."\n"."\n".file_get_contents('reactionTemp.txt'));
			fclose($data);
			
			header("Location: create.php");
		?>
	</body>
</html>
