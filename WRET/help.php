<!DOCTYPE html >
	<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title>Help</title>
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
			<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
		</ul>
	</div>

	<body>
		<div id="loadBody">
			<h1><?php echo TXT_HELP_TITLE; ?></h1>
		</div>

		<p><?php echo TXT_HELP_INTRO; ?> </p>
		</br>
		<h3><?php echo TXT_HELP_FILES; ?></h3>
			<h4><?php echo TXT_HELP_METABO; ?></h4>
	   			<p><?php echo TXT_HELP_EXTENSION; ?></p>
		<p><?php echo TXT_HELP_SUITE; ?></p>
	</body>
</html>
