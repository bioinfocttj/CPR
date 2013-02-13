<?php require("languages/choosen_languages.php");?>
		<div id="loadBody">
			<h1><?php echo TXT_FILE_CHOOSE_TITLE; ?></h1>
		</div>

		<h4><?php echo TXT_FILE_CHOOSE_SUBTITLE; ?></h4>
		</br>
		
		<form action = "parse_results.php" method="POST">
			<label class='tooltip'><?php echo TXT_FILE_CHOOSE; ?></label>
			<input type = "text"	name = "fichier">
			<input type= "submit" value='ok' onclick="parse_results.php">			
		</form>
