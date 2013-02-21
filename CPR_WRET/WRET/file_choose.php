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
