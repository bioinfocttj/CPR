<?php

	echo exec('touch dat.txt');
	echo exec('chmod 777 dat.txt');
	echo exec('touch stoech.txt');
	echo exec('chmod 777 stoech.txt');

	// init of reaction file
	echo exec('touch reactionTemp.txt');
	echo exec('chmod 777 reactionTemp.txt');
	$data = fopen('reactionTemp.txt','w');
	fputs($data, "-CAT \n");
	fclose($data);
	
	// init of reversibility file
	echo exec('touch irrevTemp.txt');
	echo exec('chmod 777 irrevTemp.txt');
	$data2 = fopen('irrevTemp.txt','w');
	fputs($data2, "-IRREV \n");
	fclose($data2);
	
	// init of irreversibility file
	echo exec('touch revTemp.txt');
	echo exec('chmod 777 revTemp.txt');
	$data3 = fopen('revTemp.txt','w');
	fputs($data3, "-REV \n");
	fclose($data3);
	
	header("Location: create.php");
	
?>
