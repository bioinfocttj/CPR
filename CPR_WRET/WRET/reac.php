<!--
This file is part of Foobar.

    Foobar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
-->

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
			fputs($reac, "$name\n");
			fputs($reac2, "$name\n");
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
