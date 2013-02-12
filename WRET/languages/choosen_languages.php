<?php 
	if (isset ($_COOKIE['lang']) && !isset($_GET['lang'])){
		$lang=$_COOKIE['lang'];
	}
	else if (isset($_GET['lang'])){
		$lang=$_GET['lang'];
		set_cookie($lang);
	}
	else{
		$lang='fr';
		set_cookie($lang);
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
