<?php
	# Opening the file containing all the metabolic metwork 
	$file = file('reaction.txt');
	
	$enzymes = array();
	$space=" ";
	$syntaxe=array("+","=>","=",":","\n");

	foreach($file as $cpt => $ligne) {

		$array=explode($space,$ligne);
		$precedent;
		$verif = true;

		foreach($array as &$value){
			if (preg_match("*:*",$value)==true){
				$verif=true;
				# Construction of the table of the reactions (enzymes) 
				array_push($enzymes,$precedent);
			}
			else if ($value=="-->"){
				$verif=false;
			}
			$precedent=$value;
		}
	}
	# Opening the file containing all enzymes names 
	$data = fopen('enzymes.txt','w');

	# Save if the enzymes list in the file enzymes.txt
	foreach($enzymes as $enz){
		fputs($data, "\"$enz\" ");
	}
	fclose($data);

	# Redirection to the file-creation page for regefmtool
	header('Refresh:3 ; url=create.php');
	echo 'You\'ll be redirected in about 3 secs. If not, click <a href="create.php">here</a>.';
?>
