<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_LOAD_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<script  type="text/javascript" src="actionLoad.js">	</script>
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

			<h1><?php echo TXT_LOAD_TITLE; ?></h1>
			<h4><?php echo TXT_LOAD_INSTRUCTION_1; ?></h4>

			<table border="3" width=30%>
				<form action="<?php move_uploaded_file($_FILES['sfile']['tmp_name'],$_FILES['sfile']['name']);?>" enctype="multipart/form-data" method="post">
				<tr><td>
				<label ="NomDeFichier">
				<?php echo TXT_LOAD_FILE_NAME; ?><br />
				</label>
				<input type="file" name="sfile" id="sfile" /> 	<?php echo TXT_LOAD_SFILE; ?> 
				<input type="file" name="mfile" id="mfile" /> 	<?php echo TXT_LOAD_MFILE; ?> 
				<input type="file" name="rvfile" id="rvfile" /> <?php echo TXT_LOAD_RVFILE; ?> 
				<input type="file" name="grfile" id="grfile" /> <?php echo TXT_LOAD_GRFILE; ?> 
				<input type="file" name="rfile" id="rfile" /> 	<?php echo TXT_LOAD_RFILE; ?> 
				</td></tr><tr><td>
				<input type="submit" name="submit" value="Recuperer" /><!DOCTYPE html >
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_OPTIONS_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<script  type="text/javascript" src="actionLoad.js">	</script>
	</head>

	<body>
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

		<div id="loadBody">
			<h1><?php echo TXT_LOAD_TITLE; ?></h1>
			<h4><?php echo TXT_LOAD_INSTRUCTION_1; ?></h4>

			<form name="formulaire"> 

				<!-- SAVE -->
					<div id="part">
						<h3><?php echo TXT_OPTIONS_SAVING_1; ?></h3>
					</div>
					<div id="subPart">
						<div id="subPart3-1">
							<h4><?php echo TXT_OPTIONS_SAVING_2; ?> </h4>
						</div>
						<div id="subPart3-2">
							<h4><?php echo TXT_OPTIONS_ERROR_1; ?></h4>
						</div>
						<div id="subPart3-3">
							<h4><?php echo TXT_OPTIONS_SAVING_6; ?></h4>
						</div>
					</div>
					<div id="buttons">
						<div id="buttons3-1">
							<input type="radio" name="choix1" 	value="log console" checked="checked">	<?php echo TXT_OPTIONS_SAVING_3; ?> </br>
							<input type="radio" name="choix1" 	value="log file"> 						<?php echo TXT_OPTIONS_SAVING_4; ?> </br>
							<?php echo TXT_OPTIONS_SAVING_5; ?> 	<input type="text"	   name="log_nomFichier" 	size="10" id="texte1">
						</div>
						<div id="buttons3-2">
							<input type="radio" name="choix2" value="level WARNING"> 	<?php echo TXT_OPTIONS_ERROR_2; ?> </br>
					 		<input type="radio" name="choix2" value="level CONFIG"> 	<?php echo TXT_OPTIONS_ERROR_3; ?> </br>
					 		<input type="radio" name="choix2" value="level INFO"> 		<?php echo TXT_OPTIONS_ERROR_4; ?> </br>
					 		<input type="radio" name="choix2" value="level FINE"> 		<?php echo TXT_OPTIONS_ERROR_5; ?> </br>
					 		<input type="radio" name="choix2" value="level FINER"> 		<?php echo TXT_OPTIONS_ERROR_6; ?> </br>
					 		<input type="radio" name="choix2" value="level FINEST" checked="checked"> 	<?php echo TXT_OPTIONS_ERROR_7; ?> 	
						</div>
						<div id="buttons3-3">
							<input type="radio" name="choix3" 	value="format default"> 					<?php echo TXT_OPTIONS_SAVING_7; ?>	</br>
							<input type="radio" name="choix3" 	value="format plain" checked="checked"> 	<?php echo TXT_OPTIONS_SAVING_8; ?>	
						</div>
					</div>

				<!-- STOECHIOMOETRIC FILES  -->	
					<div id="part">
						<h3><?php echo TXT_OPTIONS_INPUT_STOECH; ?></h3>
					</div>
					<div id="subPart">
						<div id="subPart2-1">
							<h4><?php echo TXT_OPTIONS_INPUT_STOECH_1; ?></h4>
						</div>
						<div id="subPart2-2">
							<h4><?php echo TXT_OPTIONS_INPUT_F_ANALY; ?></h4>
						</div>
					</div>
					<div id="buttons">
						<div id="buttons2-1">
							<input type="radio" name="choix4" value="kind flux-analyzer-dir"> 		<?php echo TXT_OPTIONS_INPUT_STOECH_1; ?>	</br>
						 	<input type="radio" name="choix4" value="kind flux-analyzer-files"> 	<?php echo TXT_OPTIONS_INPUT_STOECH_2; ?>	</br>
							<input type="radio" name="choix4" value="kind reaction-list"> 			<?php echo TXT_OPTIONS_INPUT_STOECH_3; ?> 	</br>
						 	<input type="radio" name="choix4" value="kind excel"> 					<?php echo TXT_OPTIONS_INPUT_STOECH_4; ?>	</br>
						 	<input type="radio" name="choix4" value="kind stoichiometry" checked="checked"> 			<?php echo TXT_OPTIONS_INPUT_STOECH_5; ?>	</br>
						 	<input type="radio" name="choix4" value="kind sbml"> 					<?php echo TXT_OPTIONS_INPUT_STOECH_6; ?>				
						</div>
						<div id="buttons2-2">
							<table width=70%>
								<tr><td>
								<label ="NomDeFichier">
								<?php echo TXT_LOAD_FILE_NAME; ?><br />
								</label>
								<input type="file" name="sfile" 	id="stoich" value="<?php move_uploaded_file($_FILES['sfile']['tmp_name'],$_FILES['sfile']['name']);?>"/> 	<?php echo TXT_LOAD_SFILE; ?> 
								<input type="file" name="mfile" 	id="meta" /> 		<?php echo TXT_LOAD_MFILE; ?> 
								<input type="file" name="rvfile" 	id="rev" /> 		<?php echo TXT_LOAD_RVFILE; ?> 
								<input type="file" name="grfile" 	id="generule" /> 	<?php echo TXT_LOAD_GRFILE; ?> 
								<input type="file" name="rfile" 	id="reac" /> 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo TXT_LOAD_RFILE; ?> 
								</td></tr><tr><td>
								</td></tr>
							</table>
						</div>
					</div>

				<!-- COMPRESSION  -->	
					<div id="part">
						<h3><?php echo TXT_OPTIONS_COMPRESS; ?></h3>
					</div>
					<div id="buttons">
						<div id="buttons1">
							<input type="radio" name="choix6" value="compression default"> 					<?php echo TXT_OPTIONS_COMPRESS_1; ?>	 </br>
							<input type="radio" name="choix6" value="compression off"> 						<?php echo TXT_OPTIONS_COMPRESS_2; ?>	 </br>
							<input type="radio" name="choix6" value="compression unique"> 					<?php echo TXT_OPTIONS_COMPRESS_3; ?>	 </br>
							<input type="radio" name="choix6" value="compression nullspace"> 				<?php echo TXT_OPTIONS_COMPRESS_4; ?>	 </br>
							<input type="radio" name="choix6" value="compression unique-no-recursion"> 		<?php echo TXT_OPTIONS_COMPRESS_5; ?> 	 </br>
							<input type="radio" name="choix6" value="compression nullspace-no-recursion"> 	<?php echo TXT_OPTIONS_COMPRESS_6; ?>
						</div>
					</div>

				<!-- OUTPUT PARAMETERS  -->	
					<div id="part">
						<h3><?php echo TXT_OPTIONS_OUTPUT; ?></h3>
					</div>
					<div id="buttons">
						<div id="buttons1">
							<input type="radio" 	name="choix7" 	value="out null"> 			<?php echo TXT_OPTIONS_OUTPUT_1; ?> 			</br>
							<input type="radio"		name="choix7" 	value="out count"> 			<?php echo TXT_OPTIONS_OUTPUT_2; ?>	 			</br>
							<input type="radio" 	name="choix7" 	value="out text-boolean"> 	<?php echo TXT_OPTIONS_OUTPUT_3; ?>
							<?php echo TXT_OPTIONS_OUTPUT_4; ?> 	<input 	type="text" 		name="out_nomFichier" 	size="10" id="texte7"> 	</br>
							<input type="radio" 	name="choix7" 	value="out text-doubles"> 	<?php echo TXT_OPTIONS_OUTPUT_5; ?>
							<?php echo TXT_OPTIONS_OUTPUT_6; ?> 	<input 	type="text" 		name="out_nomFichier" 	size="10" id="texte71"> </br>	
							<input type="radio" 	name="choix7" 	value="out binary-boolean"> <?php echo TXT_OPTIONS_OUTPUT_7; ?>
							<?php echo TXT_OPTIONS_OUTPUT_8; ?>		<input 	type="text" 		name="out_nomFichier" 	size="10" id="texte72"> </br>
							<input type="radio" 	name="choix7" 	value="out binary-doubles"> <?php echo TXT_OPTIONS_OUTPUT_9; ?>
							<?php echo TXT_OPTIONS_OUTPUT_10; ?> 	<input 	type="text" 		name="out_nomFichier" 	size="10" id="texte73"> </br>	
							<input type="radio" 	name="choix7" 	value="out matlab"> 		<?php echo TXT_OPTIONS_OUTPUT_11; ?>
							<?php echo TXT_OPTIONS_OUTPUT_12; ?> 	<input type="text" 			name="out_nomFichier" 	size="10" id="texte74">
						</div>
					</div>

				</br></br>

				<!-- PARAMETERS 1 -->
					<div id="part">
						<h3><?php echo TXT_OPTIONS_EFMTOOL; ?></h3>
					</div>
					<div id="subPart">
						<div id="subPart3-1">
							<p>plouf</p>
						</div>
						<div id="subPart3-2">
							<h4><?php echo TXT_OPTIONS_EFM_ADJA; ?>	</h4>
						</div>
						<div id="subPart3-3">
							<h4><?php echo TXT_OPTIONS_EFM_THREADS; ?></h4>
						</div>
					</div>
					<div id="buttons">
						<div id="buttons3-1">
							<?php echo TXT_OPTIONS_EFM_LINE; ?> <input type="radio" name="choix8" value="rowordering"> 
						</div>
						<div id="buttons3-2">
							<input type="radio" name="choix9" value="adjacency-method pattern-tree-minzero"> 	<?php echo TXT_OPTIONS_EFM_ADJA_1; ?>	</br>	
							<input type="radio" name="choix9" value="adjacency-method pattern-tree-rank"> 		<?php echo TXT_OPTIONS_EFM_ADJA_2; ?> 	</br>	
						</div>
						<div id="buttons3-3">
							<input type="radio" name="choix10" value="maxthreads"> <?php echo TXT_OPTIONS_EFM_THREADS_1; ?>				
								<?php echo TXT_OPTIONS_EFM_THREADS_2; ?> 	<input type="text" 		name="maxthreads_value" 	size="10" id="texte10">
						</div>
					</div>

				<!-- PARAMETERS 2 -->
					<div id="part">
						<h3><?php echo TXT_OPTIONS_EFMTOOL; ?></h3>
					</div>
					<div id="subPart">
						<div id="subPart4-1">
							<h4><?php echo TXT_OPTIONS_EFM_ARITHM; ?></h4>
						</div>
						<div id="subPart4-2">
							<h4><?php echo TXT_OPTIONS_EFM_NORMAL; ?></h4>
						</div>
						<div id="subPart4-3">
							<h4><?php echo TXT_OPTIONS_EFM_P_FRAC; ?></h4>
						</div>
						<div id="subPart4-4">
							<h4><?php echo TXT_OPTIONS_EFM_AUTO_T; ?></h4>
						</div>
					</div>
					<div id="buttons">
						<div id="buttons4-1">
							<input type="radio" name="choix11" value="arithmetic double"> 		<?php echo TXT_OPTIONS_EFM_ARITHM_1; ?> 	</br>	
							<input type="radio" name="choix11" value="arithmetic fractional"> 	<?php echo TXT_OPTIONS_EFM_ARITHM_2; ?> 	</br>	
						</div>
						<div id="buttons4-2">
							<input type="radio" name="choix12" value="normalize max"> 						<?php echo TXT_OPTIONS_EFM_NORMAL_1; ?> 		</br>	
							<input type="radio" name="choix12" value="normalize min"> 						<?php echo TXT_OPTIONS_EFM_NORMAL_2; ?> 		</br>	
							<input type="radio" name="choix12" value="normalize norm2"> 					<?php echo TXT_OPTIONS_EFM_NORMAL_3; ?> 		</br>	
							<input type="radio" name="choix12" value="normalize squared"> 					<?php echo TXT_OPTIONS_EFM_NORMAL_4; ?> 		</br>	
							<input type="radio" name="choix12" value="normalize none" checked="checked"> 	<?php echo TXT_OPTIONS_EFM_NORMAL_5; ?> 		</br>	
						</div>
						<div id="buttons4-3">
							<input type="radio" name="choix13" value="precision "> <?php echo TXT_OPTIONS_EFM_P_FRAC_1; ?>
								<?php echo TXT_OPTIONS_EFM_VALUE; ?>	<input type="text" 		name="precisionThread" 	size="10" id="texte13">
						</div>
						<div id="buttons4-4">
							<input type="radio" name="choix14" value="selftest true"> 	<?php echo TXT_OPTIONS_EFM_AUTO_T_1; ?> </br>	
							<input type="radio" name="choix14" value="selftest false"> 	<?php echo TXT_OPTIONS_EFM_AUTO_T_2; ?>
						</div>
					</div>
					<br/>
					<input type="button" name="bout" value="<?php echo TXT_GO_BUTTON; ?>" onclick="choixParam(formulaire)">
			</form>

		</div>

		<?php
			session_start();
			$commande = 'java -Xmx1G -jar ../regEfmTool.bak/regEfmtool.jar -log console -level FINEST -format plain -kind stoichiometry -stoich '.$_FILES['sfile']['name'].' -rev '.$_FILES['rvfile']['name'].' -meta '.$_FILES['mfile']['name'].' -reac '.$_FILES['rfile']['name'].' -out text-doubles modes_inc_generules.text -normalize none -maxthreads 2 -generule '.$_FILES['grfile']['name'];
			$expire=2*3600;
			$_SESSION['commande']=$commande;
			echo $commande;
		?>
	</br>
		<a href='results.php'> Lancement </a>
	</body>
</html>
