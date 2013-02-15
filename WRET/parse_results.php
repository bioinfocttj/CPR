<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php require("languages/choosen_languages.php");?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>	
		<link rel='stylesheet' media='screen' type='text/css' href='style.css'/>
		<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
		<title><?php echo TXT_PARSE_RESULTS_SITE_TITLE; ?></title>
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
			<li><a href="index.php">		<?php echo TXT_MENU_HOME; ?>	</a></li>
			<li><a href="create.php">		<?php echo TXT_MENU_CREATE; ?> 	</a></li>
			<li><a href="load.php">			<?php echo TXT_MENU_LOAD; ?>	</a></li>
			<li><a href="modify.php">		<?php echo TXT_MENU_MODIFY; ?>	</a></li>
			<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
		</ul>
	</div>
	
	<body>
		<div id="loadBody">
			<h1><?php echo TXT_PARSE_RESULTS_TITLE; ?></h1>
		</div>
		
		<h4><?php echo TXT_PARSE_RESULTS_FILE; ?></h4>
	
		<form name="fichier" action="all_results.php" method="POST">
			<pre name="fichier"> Log.txt</pre>
			
			<input type="submit" value="<?php echo TXT_FILE_CHOOSE_TITLE; ?>" onclick="all_results.php">
			
			</form>
			</br></br>
			
			<form name="fichier" action="display_results.php" method="POST">
			<pre><?php echo TXT_PARSE_RESULTS_DISPLAY; ?></pre>
			<?php
				function item(){
					
					$fichier = 'log.txt';
					global $item;
					define ('FICHIER', $fichier);
					
					$fichier = fopen( FICHIER, 'r')or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
					$numligne = 0;
				
					while (!feof($fichier)){
						$numligne++;
						$lignes = fgets($fichier, 1024);
						$posi = strpos($lignes, '|'); 
						$ligne = trim(substr($lignes,$posi+1,strlen($lignes))); 
						$pos = strpos($ligne, ':' );
						if ( $pos == true && $numligne >= 32){
							$line = trim(substr($ligne,0, $pos)); 
							$item[] = $line;
						}
					}
					
					$count = count($item);
					for ($numero = 0; $numero < $count; $numero++){
						echo '<OPTION VALUE="' . $item[$numero] . '"> ' . $item[$numero] . ' </OPTION>'; 
					}
					return $item;
				}
				 
					echo '<SELECT name="start">';
					echo item();
					echo '</SELECT></br>';
					
			
			?>
			</br>
			<input type= "submit" value="<?php echo TXT_BUTTON_RESULT; ?>" onclick="display_results.php">	
			
		</form>
	</body>

</html>
