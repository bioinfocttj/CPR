<!DOCTYPE html >
	<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_HELP_CREATE_TITLE; ?></title>
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
	
	<body>
		<div id="loadBody">
			<h1><?php echo TXT_HELP_CREATE_TITLE1; ?></h1>
		</div>
		<?php echo TXT_HELP_CREATE_INTRO; ?>
		<ol>
			<li> <?php echo TXT_HELP_CREATE_1; ?> </li>
			<li> <?php echo TXT_HELP_CREATE_2; ?> </li> 
			<li> <?php echo TXT_HELP_CREATE_3; ?> </li>
			<li> <?php echo TXT_HELP_CREATE_4; ?> </li> 
			<li> <?php echo TXT_HELP_CREATE_5; ?> </li>
			<li> <?php echo TXT_HELP_CREATE_6; ?> </li>
			<li> <?php echo TXT_HELP_CREATE_7; ?> </li>
			<li> <?php echo TXT_HELP_CREATE_8; ?> </li>
		</ol>	
	</body>
</html>





