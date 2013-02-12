<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>	
		<title><?php echo TXT_PARSE_RESULTS_SITE_TITLE; ?></title>
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
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon" alt="english_flag"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag" 					alt="french_flag"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag" 					alt="german_flag"></a></li>
		</ul>
		
	</div>
	
	<body>
		<div id="loadBody">
			<h1><?php echo TXT_PARSE_RESULTS_TITLE; ?></h1>
		</div>
		
		<h4><?php echo TXT_PARSE_RESULTS_FILE; ?></h4>
	
		<form action = "display_results.php" method="POST">
			<label class='tooltip' name="fichier"><?php echo $_POST['fichier']; ?></label>
			</br></br>
			<?php
				function item(){
					
					$fichier = $_POST['fichier'];
					
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
				if (isset($_POST['fichier'])) { 
					echo '<form name="form" method="POST">';
					echo '<SELECT name="start" onclick="self.location.href="display_results.php"">';
					echo item();
					echo '</SELECT></form></br>';
					
				}
			
			?>
			<input type= "submit" value='ok' onclick="display_results.php">
			
		</form>
	</body>

</html>