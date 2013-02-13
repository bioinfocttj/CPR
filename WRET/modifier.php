<?php

    // init of reaction file                                                      
    echo exec('touch reactionTemp.txt');                                          
    echo exec('chmod 777 reactionTemp.txt');                                      
    $data = fopen('reactionTemp.txt','w');                                        
    fputs($data, "-CAT \n");                                                      
    fclose($data);  


	// reaction saving in a file
	$name=(isset($_POST["reactions"])) ? $_POST["reactions"] : "";
	$reac = fopen('reactionTemp.txt','w');
	$reac2 = fopen('reactionTemp2.txt','w');
	fputs($reac, "-CAT \n");                                                      
	fputs($reac, "$name \n");
	fputs($reac2, "$name \n");
	fclose($reac);
	fclose($reac2);
    header("Location: create.php");                                               
?>
