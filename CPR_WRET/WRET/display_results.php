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
<?php require("languages/choosen_languages.php");?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title><?php echo TXT_DISPLAY_RESULTS_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<style media="all" type="text/css"></style>
	</head>
	
	<?php 
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
		$host = $_SERVER['HTTP_HOST'];
		$script = $_SERVER['SCRIPT_NAME'];
		if(!isset($params)){
			$currentUrl = $protocol . '://' . $host . $script . '?';
		}
		
		else{
			$currentUrl = $protocol . '://' . $host . $script . '?' . $params;
		}
		
		$en=$currentUrl."lang=en";
		$fr=$currentUrl."lang=fr";
		$de=$currentUrl."lang=de";
	?>
	
	<div id="menu">
		<ul>
			<li><a href="index.php">	<?php echo TXT_MENU_HOME; ?>	</a></li>
			<li><a href="create.php">	<?php echo TXT_MENU_CREATE; ?> 	</a></li>
			<li><a href="load.php">		<?php echo TXT_MENU_LOAD; ?>	</a></li>
			<li><a href="modify.php">	<?php echo TXT_MENU_MODIFY; ?>	</a></li>
			<li><a href="help.php">		<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" 					alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" 					alt="german_flag.gif"></a></li>
		</ul>
	</div>
	
	<body>
		<div id="loadBody">
			<h1><?php echo TXT_DISPLAY_RESULTS_TITLE; ?></h1>
		</div>
		
		<h4><?php echo TXT_DISPLAY_RESULTS_INSTRUCTION_1; ?> </h4>

		<form action="parse_results.php" method="POST">
			<?php
			
				function results(){
					$fichier = 'log.txt';
					$start = $_POST['start'];
					$end;
					$numligne = 0;
					global $item;
					
		
					define ('FICHIER', $fichier);
					$fichier = fopen( FICHIER, 'r')or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
					while (!feof($fichier)){
							$numligne++;
							$lignes = fgets($fichier, 1024);
							$posi = strpos($lignes, '|'); 
							$ligne = trim(substr($lignes,$posi+1,strlen($lignes))); 
							$resultats[] = trim($ligne); 

							$pos = strpos($ligne, ':' );
							if ( $pos == true && $numligne >= 32){
								$line = trim(substr($ligne,0, $pos)); 
								$item[] = $line;
							}
					}
					
					$count = count($resultats);
					$counte = count($item);
					$motif='R';
					$vraie=true; 
					$vrai = true;
					//Cas ou $start est sous la forme R1:
					if (preg_match($motif,$start)){
						for ($numero=0; $numero<$count; $numero++){
							if (preg_match('/^'.$start.'/i', $resultats[$numero])){
								echo '<div>';
								echo '<pre>' .$resultats[$numero]. '</pre>';
								echo '</div>';
								fclose($fichier);
								return;
							}
				
						}
					}
					//l'autre cas
					if ($vraie){
						for ($num = 0; $num < $counte; $num++){
							if (preg_match('/^'.$start.'/',$item[$num]) && !preg_match('/^'.$motif.'/',$item[$num+1])){
								$end = $item[$num+1];
								$vraie = false;
							}
							else if (preg_match('/^'.$start.'/',$item[$num]) && preg_match('/^'.$motif.'/',$item[$num+1])){
								for ($numer = $num; $numer < $counte; $numer++){
									if (preg_match('/^'.$motif.'/',$item[$numer])){
										$end = $item[$numer];
										$vraie = false;
									}
								}
							}
						}
					}
				
					if ($vrai){
						for ($nume = 0; $nume < $count; $nume++){
							if (preg_match('/^'.$start.'/',$resultats[$nume])){
								$start_pos=$nume;
								$vrai = false;
							}
						}
					}
				
					for ($numero = $start_pos; $numero < $count; $numero++){
						if (preg_match('/^'.$start.'/', $resultats[$numero])){
							echo '<div>';
							echo '<pre>' . $resultats[$numero] . '</pre>';

						}
						else if (preg_match('/^'.$end.'/', $resultats[$numero])){
							echo'</div>';
							fclose($fichier);
							return;
						}
						else if (preg_match('/^'.$motif.'/', $resultats[$numero])){
							echo '<pre>' . $resultats[$numero] . '</pre>'; 

						}
						else{
							echo '<pre>' . $resultats[$numero] . '</pre>'; 

						}
					}
				}
				
				if (isset($_POST['start'])) { 
					echo results();
						
				}
			?>
			<input type= "submit" value="<?php echo TXT_BUTTON_EXTRACTION; ?>" >
			
		</form>
	</body>

</html>
