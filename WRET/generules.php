<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<title><?php echo TXT_GENERULES_SITE_TITLE; ?></title>
		<link rel='stylesheet' media='screen' type='text/css' href='style.css'/>
		<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
		<script type="text/javascript">
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
		</script>
		<?php include 'recupEnzymes.php'; ?>
		<script type='text/javascript' src='generules.js'></script>
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
		<h1><?php echo TXT_GENERULES_TITLE; ?></h1>
		

		<h4><?php echo TXT_GENERULES_INSTRUCTION_1; ?></h4>

		<label class='tooltip'><?php echo TXT_GENERULES_INSTRUCTION_2; ?><span><?php echo TXT_GENERULES_INSTRUCTION_3; ?></span></label>
		<br/>
		<input type='text' id ='rule' 	name='rule' 	size='2'>
		<input type='submit' name='button2' 	value="Ok" onclick=add_reaction()>
		<br/>
		
		
		<form id='b2' name='form' method='POST' action='createGrfile.php' onSubmit='return validateForm()'></form>
		<br/> <br/>
			<label><?php echo TXT_GENERULES_RULES; ?></label>
			<br/>
			<iframe src="grfile.txt" width="650" height="200"> </iframe>
		<br/>
		<br/>
		<input type="submit" name="button2" value="<?php echo TXT_NEXTSTEP_BUTTON; ?>" onclick="self.location.href='options.php'"/>
		<br/>
		<br/>
		<a href="JavaScript:newPopup('help_rules.php');"><?php echo TXT_GENERULES_HELP_RULES; ?></a>
	</body>
</html>
