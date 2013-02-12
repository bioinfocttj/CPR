<?php

	// reaction saving in a file
	$name=(isset($_POST["reac"])) ? $_POST["reac"] : "";
	$reac = fopen('reactionTemp.txt','a');
	fputs($reac, "$name \n");
	fclose($reac);
	
	
	// stoechiometry saving in a file
	$stoech=(isset($_POST["choix1"])) ? $_POST["choix1"] : "";
	$sto = fopen('stoech.txt','a');
	fputs($sto, "$stoech ");
	fclose($sto);
	

	$space=" ";
	$syntaxe=array("+",":","\n");
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

