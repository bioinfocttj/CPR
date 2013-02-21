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

<!DOCTYPE html >
<html>
	<head>
		<title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php
			exec("python parser_stoechiometry.py");
			header('Refresh:1 ; url=create.php');
			echo 'You\'ll be redirected in about 1 secs. If not, click <a href="create.php">here</a>.';
		?>
	</body>
</html>
