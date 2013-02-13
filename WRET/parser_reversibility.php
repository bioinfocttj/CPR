<!DOCTYPE html >
<html>
	<head>
		<title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php

			# Opening of the file
			$file = file('reaction.txt');
			$space=" ";
			$syntaxe=array("+","=>","=",":","\n");
			$reversibility = array();
			$rev = 1;
			$irrev = 0;

			foreach($file as $cpt => $ligne) {
			# Deleting of the spaces
				$array=explode($space,$ligne);
				print_r($array);

				$precedent;
				$verif = true;

				foreach($array as &$value){
					if ($value=="="){
						array_push($reversibility,"0");
					}
					if ($value=="=>"){
						array_push($reversibility,"1");
					}
				}
				$precedent=$value;
			}


			$data = fopen('reversibility.txt','w');
			foreach($reversibility as $rev){
				fputs($data, "$rev ");
			}
			fclose($data);
			header('Refresh:1 ; url=create.php');
			echo 'You\'ll be redirected in about 3 secs. If not, click <a href="create.php">here</a>.';

		?>
	</body>
</html>


