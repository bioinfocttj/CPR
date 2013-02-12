<?php

	# Opening of the file
		$file = file('reactionTemp2.txt');
		
	# Table containing all the metabolites
		$METABOLITE=array();

		$space=" ";
		$syntaxe=array("+","=>","=",":",".","\n");
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

		foreach($array as &$value){
			if (preg_match("*:*",$value)==true){
				$verif=true;
				array_push($enzymes,$precedent);
			}
			else if ($value=="-->"){
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

	# Opening the file containing the metabolites and writing of the list
	$data = fopen('metabolites.mfile','w');
	foreach($metab as $met){
		fputs($data, "\"$met\" ");
	}
	fclose($data);

	# Redirection to the file-creation page 
	header('Refresh:1 ; url=create.php');
	echo 'You\'ll be redirected in about 3 secs. If not, click <a href="create.php">here</a>.';

?>
