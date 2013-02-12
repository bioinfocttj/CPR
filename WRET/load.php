<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_LOAD_SITE_TITLE; ?></title>
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
		<div id="loadBody"> 

			<h1><?php echo TXT_LOAD_TITLE; ?></h1>
			<h4><?php echo TXT_LOAD_INSTRUCTION_1; ?></h4>

			<table border="3" width=30%>
				<caption>sfile</caption>
				<form action="<?php move_uploaded_file($_FILES['sfile']['tmp_name'],$_FILES['sfile']['name']);?>" enctype="multipart/form-data" method="post">
				<tr><td>
				<label ="NomDeFichier">
				Nom du fichier à charger :<br />
				</label>
				<input type="file" name="sfile" id="sfile" /> 
				<input type="file" name="mfile" id="mfile" /> 
				<input type="file" name="rvfile" id="rvfile" /> 
				<input type="file" name="grfile" id="grfile" /> 
				<input type="file" name="rfile" id="rfile" /> 
				</td></tr><tr><td>
				<input type="submit" name="submit" value="Recuperer" />
				</form>
				</td></tr>
			</table>
		</div>
		<?php
		session_start();
		$commande = 'java -Xmx1G -jar ../regEfmTool.bak/regEfmtool.jar -log console -level FINEST -format plain -kind stoichiometry -stoich '.$_FILES['sfile']['name'].' -rev '.$_FILES['rvfile']['name'].' -meta '.$_FILES['mfile']['name'].' -reac '.$_FILES['rfile']['name'].' -out text-doubles modes_inc_generules.text -normalize none -maxthreads 2 -generule '.$_FILES['grfile']['name'];
		$expire=2*3600;
		$_SESSION['commande']=$commande;
		echo $commande;
		?>
		<a href='results.php'>go</a>
	</body>
</html>
