<!DOCTYPE html >
	<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_HELP_RULE_TITLE; ?></title>
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
			<h1><?php echo TXT_HELP_RULE_TITLE1; ?></h1>
		</div>

		<p><?php echo TXT_HELP_RULE_INTRO; ?> </p>
		<ul>
			<li><?php echo TXT_HELP_RULE_FLUX_1; ?> </li>
			<li><?php echo TXT_HELP_RULE_FLUX_2; ?></li>
		</ul>
		<p><?php echo TXT_HELP_RULE_1; ?></p>
		<p><?php echo TXT_HELP_RULE_2; ?></p>
		<p><?php echo TXT_HELP_RULE_3; ?></p>
		<p><?php echo TXT_HELP_RULE_4; ?></p>
		<h3><?php echo TXT_HELP_RULE_INFO_TITLE; ?></h3>
			<p><?php echo TXT_HELP_RULE_INFO_1; ?></p>
			<ol>
				<li><?php echo TXT_HELP_RULE_R1; ?> </li>
				<li><?php echo TXT_HELP_RULE_R2; ?></li>
			</ol>
			<p><?php echo TXT_HELP_RULE_INFO_2; ?></p>
			<p><?php echo TXT_HELP_RULE_INFO_3; ?></p>
			<ol>
				<li><?php echo TXT_HELP_RULE_R1_2; ?> </li>
				<li><?php echo TXT_HELP_RULE_R2_2; ?></li>
			</ol>
	</body>
</html>





