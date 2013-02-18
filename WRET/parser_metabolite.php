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
				$file = file('reactionTemp2.txt');
				
			# Table containing all the metabolites
				$METABOLITE=array();
				
				$space=" ";
				$syntaxe=array("+","=>","=",":",".","\n",".\n","\t",".\r\n","\r\n");
				$enzymes = array();
				
			foreach($file as $cpt => $ligne) {
			# Deleting the spaces 
				$array=explode($space,$ligne);
				
				$precedent;
				$metabolites = array();
				$total = array();
				$stoech = array();
				$reactions = array();
				$verif = true;

				foreach($array as $value){
					if (preg_match("*:*",$value)==true){
						$verif=true;
						array_push($enzymes,$precedent);
					}
					else if ($value=="=>" or $value=="="){
						$verif=false;
					}
					if (is_numeric($value)){
						if ($verif){
							$value = 0-$value;
						}
						array_push($stoech,$value);
					}
					$precedent=$value;
				}

			# Construction of the table deleting syntax, enzymes, integers
				$metabolites=array_diff($array,$syntaxe);
				$metabolites=array_diff($metabolites,$enzymes);
				$metabolites=array_diff($metabolites,$stoech);
				foreach($metabolites as $met){
					array_push($METABOLITE,$met);
				}
			}
			# Deleting of the duplicates
			$metab=array_unique($METABOLITE);
			$metab2=array_diff($metab,$syntaxe);
			$metab2=array_filter($metab2);
			$metab3 = array_filter($metab2, function($var){
				return (!in_array($var, $syntaxe));
				});
			# Opening the file containing the metabolites and writing of the list
			$data = fopen('metabolites.mfile','w');
			
			foreach($metab3 as $met){
				if ($met!=null or $met!="." or $met!="\n"){
					fputs($data, "\"$met\" ");
				}
			}
			fclose($data);

		?>
	</body>
</html>
