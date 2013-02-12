<?php
	echo exec('touch fichier.dat');
	echo exec('chmod 777 fichier.dat');
	$data = fopen('dat.txt','w');
	file_put_contents('fichier.dat', file_get_contents('irrevTemp.txt')."\n"."\n".file_get_contents('revTemp.txt')."\n"."\n".file_get_contents('reactionTemp.txt'));
	fclose($data);
	header("Location: create.php");
?>
