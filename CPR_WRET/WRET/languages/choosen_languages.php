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

<?php 
	session_start();
	if (isset ($_SESSION['lang']) && !isset($_GET['lang'])){
		$lang=$_SESSION['lang'];
	}
	else if (isset($_GET['lang'])){
		$lang=$_GET['lang'];
		$_SESSION['lang']=$lang;
	}
	else{
		$lang='fr';
		$_SESSION['lang']=$lang;
	}
	function set_cookie($langue){
		$expire=24*3600;
		if (setcookie("lang",$langue,time()+$expire)!=TRUE){
		}
		else{
		}
	}
	if ($lang=='fr') {           // If the language is 'fr' (french) the file fr-lang.php is included
		include('fr_lang.php');
	} 
	 
	else if ($lang=='en') {      // If the language is 'en' (english) the file en-lang.php is included 
		include('en_lang.php');
	}
	else if ($lang=='de') {
		include('de_lang.php');  // If the language is 'de' (german) the file de-lang.php is included 
	}
	else {                       // If any language is declared, the file fr-lang.php is included as default
		include('fr_lang.php');
	}
?>
