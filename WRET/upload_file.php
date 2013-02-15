<?php
	move_uploaded_file($_FILES["sfile"]["tmp_name"],"upload/" . $_FILES["sfile"]["name"]);
	shell_exec('mv upload/'.$_FILES["sfile"]["name"].' upload/sfile');
	move_uploaded_file($_FILES["mfile"]["tmp_name"],"upload/" . $_FILES["mfile"]["name"]);
	shell_exec('mv upload/'.$_FILES["mfile"]["name"].' upload/mfile');
	move_uploaded_file($_FILES["rvfile"]["tmp_name"],"upload/" . $_FILES["rvfile"]["name"]);
	shell_exec('mv upload/'.$_FILES["rvfile"]["name"].' upload/rvfile');
	move_uploaded_file($_FILES["grfile"]["tmp_name"],"upload/" . $_FILES["grfile"]["name"]);
	shell_exec('mv upload/'.$_FILES["grfile"]["name"].' upload/grfile');
	move_uploaded_file($_FILES["rfile"]["tmp_name"],"upload/" . $_FILES["rfile"]["name"]);
	shell_exec('mv upload/'.$_FILES["rfile"]["name"].' upload/rfile');
	
	print ("<script language = \"JavaScript\">"); 
	print ("location .href= 'upadte.php'"); 
	print ("</script>");
?>
