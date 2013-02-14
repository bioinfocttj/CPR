<!DOCTYPE html >

<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			// reaction saving in a file
			$name=(isset($_POST["reac"])) ? $_POST["reac"] : "";
			$reac = fopen('reactionTemp.txt','a');
			$reac2 = fopen('reactionTemp2.txt','a');
			fputs($reac, "$name \n");
			fputs($reac2, "$name \n");
			fclose($reac);
			fclose($reac2);
			
			
			// stoechiometry saving in a file
			$stoech=(isset($_POST["choix1"])) ? $_POST["choix1"] : "";
			$sto = fopen('reversibility.rvfile','a');
			fputs($sto, "$stoech ");
			fclose($sto);
			

			$space=" ";
			$syntaxe=array("+",":",".","=","=>","\n");
			$array=explode($space,$name);
			$precedent;
			
			// save of irreversible enzymes in a file
			if ($stoech == "0") {
				$irr = fopen('irrevTemp.txt','a');
				print_r($array[0]);
				foreach($array as &$value){
					if (preg_match("*:*",$value)==true){
							fputs($irr, "$array[0] ");
							fclose($irr);
						}
					}
				}
			// save of reversible enzymes in a file
			if ($stoech == "1") {
				$rev = fopen('revTemp.txt','a');
				print_r($array[0]);
				foreach($array as &$value){
					if (preg_match("*:*",$value)==true){
							fputs($rev, "$array[0] ");
							fclose($rev);
						}
					}
				}
			
			header("Location: create.php");
		?>
	</body>
</html>
