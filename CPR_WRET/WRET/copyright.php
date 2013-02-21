<!--
This file is part of Foobar.

    Foobar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
-->

<!DOCTYPE html>
<?php require("languages/choosen_languages.php");?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<title><?php echo TXT_COPYRIGHT_TITLE; ?></title>
		<style media="all" type="text/css"></style>
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
		<p><?php echo TXT_COPYRIGHT_CPY; ?></p>
	</body>
</html>



