<!DOCTYPE html >

<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	
	<body>
		<?php                                                                          
                                                                               
			//init temp dat                                                               
			echo exec('rm fichier.dat');                                                  
			echo exec('touch fichier.dat');                                               
			echo exec('chmod 777 fichier.dat');                                    
																						  
			//init stoechiometry file                                                     
			echo exec('rm stoech.txt');                                                   
			echo exec('touch stoech.txt');                                                
			echo exec('chmod 777 stoech.txt');                                            
																						  
			//init metabolites file                                                       
			echo exec('rm metabolites.mfile');                                            
			echo exec('touch metabolites.mfile');                                         
			echo exec('chmod 777 metabolites.mfile');                                     
																						  
			//init enzymes file                                                           
			echo exec('rm reactions.rfile');                                              
			echo exec('touch reactions.rfile');                                           
			echo exec('chmod 777 reactions.rfile');                                       
																						  
			//init generules file                                                         
			echo exec('rm generules.grfile');                                             
			echo exec('touch generules.grfile');                                          
			echo exec('chmod 777 generules.grfile');                                      
																						  
			//init stoechiometry file                                                     
			echo exec('rm stoechiometry.sfile');                                          
			echo exec('touch stoechiometry.sfile');                                       
			echo exec('chmod 777 stoechiometry.sfile');                                   
																						  
			//init reversibility file                                                     
			echo exec('rm reversibility.rvfile');                                         
			echo exec('touch reversibility.rvfile');                                      
			echo exec('chmod 777 reversibility.rvfile');                                  
																						  
			// init of reaction file                                                      
			echo exec('touch reactionTemp.txt');                                          
			echo exec('chmod 777 reactionTemp.txt');                                      
			$data = fopen('reactionTemp.txt','w');                                        
			fputs($data, "-CAT \n");                                                      
			fclose($data);                                                                
																						  
			// init of reaction file2     
			echo exec('rm reactionTemp2.txt');                                                                                         
			echo exec('touch reactionTemp2.txt');                                         
			echo exec('chmod 777 reactionTemp2.txt');                                     
                                                             
																						  
			// init of reversibility file                                                 
			echo exec('touch irrevTemp.txt');                                             
			echo exec('chmod 777 irrevTemp.txt');                                         
			$data2 = fopen('irrevTemp.txt','w');                                          
			fputs($data2, "-ENZIRREV \n");                                                   
			fclose($data2);                                                               
																						  
			// init of irreversibility file                                               
			echo exec('touch revTemp.txt');                                               
			echo exec('chmod 777 revTemp.txt');                                           
			$data3 = fopen('revTemp.txt','w');                                            
			fputs($data3, "-ENZREV \n");                                                     
			fclose($data3);                                                               
																						  
																						  
			header("Location: create.php");                                               
                                                                                  
		?>
	</body>
</html>
