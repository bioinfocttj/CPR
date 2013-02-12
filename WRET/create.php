<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	  <script type="text/javascript" >
	  		// function isReversible(formulaireR) {
	  		// 	if (formulaireR.choix1[0].checked) { 
    	// 			var valeur1 = " -" + formulaire.choix1[0].value; 
				 //    commande = commande + valeur1;
				 //  }
	  		// }

	  </script>

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
			<h1><?php echo TXT_CREATION_TITLE; ?></h1>
		</center>
		
		<h4><?php echo TXT_INIT_FILES; ?></h4>

		<form  name="formulaireR" method="POST" action="init_files.php">
			<input type="submit" name="reac" value= <?php echo TXT_CREATION_INIT; ?> /> 
		</form>	
		
		<h4><?php echo TXT_CREATION_INSTRUCTION_1; ?></h4>

		<form  name="formulaireR" method="POST" action="createFiles.php">
			<input type="text" name="reac" value="reaction : reag1 + reag2 => 2 prod1 + 4 prod2 ." size="60"/> 
			</br> </br>
			<label> <?php echo TXT_CREATION_IS_REVERSIBLE; ?></label>
			 <label><?php echo TXT_CREATION_HELP_REV; ?></label>
<!--
			<input type="text" name="rev" value="0" size="5">
-->
			</br> </br>
			
			 <input type="radio" name="choix1" value="1"> <?php echo TXT_CREATION_YES; ?>
			<input type="radio" name="choix1" value="0"> <?php echo TXT_CREATION_NO; ?> </br> </br>

			<input type="submit" name="button" value="<?php echo TXT_ADD_BUTTON; ?>" /></br></br> </br>
			<label> <?php echo TXT_CREATION_ALREADY_OK; ?></label>
			</br> </br>
			<iframe src="reactionTemp.txt" width="500" height="200"> </iframe>

		</form>
		</br> </br>

		<h4><?php echo TXT_CREATION_FINISH; ?></h4>

		<form  name="datFile" method="POST" action="finish_files.php">
			<input type="submit" name="reac" value="DAT" /> 
		</form>	
		
		</br> </br>
		
		<input type="submit" name="button2" value="<?php echo TXT_NEXTSTEP_BUTTON; ?>" onclick="self.location.href='generules.php'" />

		<FONT color="red" size="4">
			<h4><?php echo TXT_CREATION_WARNING_TITLE; ?></h4>
			<p> <?php echo TXT_CREATION_WARNING; ?></p>
		</FONT>
		
	</body>
</html>
		
		