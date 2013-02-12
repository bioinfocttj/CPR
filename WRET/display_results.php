<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title><?php echo TXT_DISPLAY_RESULTS_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">s 
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
			<h1><?php echo TXT_DISPLAY_RESULTS_TITLE; ?></h1>
		</div>
		
		<h4><?php echo TXT_DISPLAY_RESULTS_INSTRUCTION_1; ?> </h4>
		
		<label class='tooltip'><?php echo $_POST['fichier']; ?></label>
		</br></br>
		
		<form method="POST">
			<?php
			
			function results(){
				$fichier = $_POST['fichier'];
				$start = $_POST['start'];
				
				$numligne = 0;
				
				define ('FICHIER', $fichier);
				$fichier = fopen( FICHIER, 'r')or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
				while (!feof($fichier)){
						$numligne++;
						$lignes = fgets($fichier, 1024);
						$posi = strpos($lignes, '|'); 
						$ligne = trim(substr($lignes,$posi+1,strlen($lignes))); 
						$resultats[] = trim($ligne);
				}
				$count = count($resultats);
				$position = array_search($start, $resultats);
				$start_pos = strpos($resultats, $start);
				$motif ="R";
				$vrai=true; 
				if (ereg($motif,$start)){
					echo "<pre>$resultats[$start_pos]</pre>";
					fclose($fichier);
						return;
				}
				while($vrai){
					if(!ereg($motif,$resultats[$num])){
						$end = $num;
						$vrai= false;
					}
				}
				
				for ($numero = $position; $numero < $count; $numero++){
					//if (
					if ($numero == $end){
						fclose($fichier);
						return;
					}
					else{
						echo '<pre>' . $resultats[$numero] . '</pre>'; 
					}
				}
				
				if (isset($_POST['start']) && isset($_POST['fichier'])) { 
					echo '<form name="form" method="POST">';
					echo results();
					echo '</form></br>';
					
				}
			}
			?>
		</form>
	</body>

</html>
