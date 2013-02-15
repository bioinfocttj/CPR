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
			<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
		</ul>
	</div>
	
<body>
<form  method="post"
enctype="multipart/form-data">
<?php $_COOKIE['commande'] = $_COOKIE['commande'] . '-stoich upload/sfile -meta upload/mfile -generule upload/grfile -reac uplad/rfile -rev upload/rvfile';
echo $_COOKIE['commande'];?>
<label for="file">Filename:</label>
<input type="file" name="sfile" id="sfile" value="<?php move_uploaded_file($_FILES["sfile"]["tmp_name"],"upload/" . $_FILES["sfile"]["name"]);shell_exec('mv upload/'.$_FILES["sfile"]["name"].' upload/sfile');?>"><br>
<input type="file" name="mfile" id="mfile" value ="<?php move_uploaded_file($_FILES["mfile"]["tmp_name"],"upload/" . $_FILES["mfile"]["name"]);shell_exec('mv upload/'.$_FILES["mfile"]["name"].' upload/mfile'); ?>"><br>
<input type="file" name="rvfile" id="rvfile" value ="<?php move_uploaded_file($_FILES["rvfile"]["tmp_name"],"upload/" . $_FILES["rvfile"]["name"]);shell_exec('mv upload/'.$_FILES["rvfile"]["name"].' upload/rvfile');?>"><br>
<input type="file" name="grfile" id="grfile" value ="<?php move_uploaded_file($_FILES["grfile"]["tmp_name"],"upload/" . $_FILES["grfile"]["name"]);shell_exec('mv upload/'.$_FILES["grfile"]["name"].' upload/grfile');?>"><br>
<input type="file" name="rfile" id="rfile" value ="<?php move_uploaded_file($_FILES["rfile"]["tmp_name"],"upload/" . $_FILES["rfile"]["name"]);shell_exec('mv upload/'.$_FILES["rfile"]["name"].' upload/rfile');?>"><br>
<input type="submit" name="submit" value="Submit">
</form>

<a href="results.php"> Résultats</a>
</body>
</html>