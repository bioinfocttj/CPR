<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
	  <title><?php echo TXT_REVERSIBILITY_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
		<center>
			<h1><?php echo TXT_REVERSIBILITY_TITLE; ?></h1>
		</center>
		
		<h4><?php echo TXT_REVERSIBILITY_INSTRUCTION_1; ?></h4>
		
		<form  method="POST" 		action="parser_enzymes.php">
			<input type="submit" 	name="button" 	value="Enzymes" />
		</form>
		<form  method="POST" 		action="parser_reversibility.php">
			<input type="submit" 	name="button" 	value="Reversibilité" />
		</form>	
		<form  method="POST" 		action="parser_metabolite.php">
			<input type="submit" 	name="button" 	value="Metabolite" />
		</form>	
		<form  method="POST" 		action="parser_stoechiometry.php">
			<!-- le dernier marche pas c'est du python -->
			<input type="submit" 	name="button" 	value="Matrice de stoechiometrie" />
		</form>

		</br>

		<input type="submit" 		name="button2" 	value="Next step" onclick="self.location.href='generules.php'" />

	</body>
</html>
		
