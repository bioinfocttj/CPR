<?php
	exec("python parser_stoechiometry.py");
	header('Refresh:1 ; url=create.php');
	echo 'You\'ll be redirected in about 1 secs. If not, click <a href="create.php">here</a>.';
?>

