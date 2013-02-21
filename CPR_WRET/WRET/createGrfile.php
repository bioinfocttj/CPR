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
	<head>
		<title><?php echo TXT_GENERULES_SITE_TITLE; ?></title>
		<link rel='stylesheet' media='screen' type='text/css' href='style.css'/>
		<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
	</head>
	<body>
		<?php

			if(isset($_POST['button'])) { 
				$num=$_POST["num"];
				
				$myarray=[];
				for ($i=1; $i<=$num; $i++){ //recuperation of the reaction and their values
					$val="box$i";
					$val2="value$i";
					
					$reac=$_POST[$val];
					$value=$_POST[$val2];
					
					if ($i==1 or $i==num){
						$myarray[$i]=[$reac,$value];
					}
					else{
						$val3="operator$i";
						$op=$_POST[$val3];
						$myarray[$i]=[$reac,$value,$op];
					}
				}
				
				$data = fopen('generules.grfile','a'); // writting the grfile
				fputs($data, $myarray[$num][0]);
				
				$reac0=$myarray[$num ][1];
				if($reac0==0 and $num>2){
					fputs($data, ' = (!(');
				}
				else{
					fputs($data, ' = (');
				}
				
				if($num>3){
					for ($k=1; $k<$num-2;$k++){
						fputs($data, '(');
					}
				}
				
				for ($j=1;$j<$num;$j++){
					if ($j>1 and $num>2){
						if($myarray[$j][2]=="OR"){
							fputs($data, ' | ');
						}
						else if($myarray[$j][2]=="AND"){
							fputs($data, ' & ');
						}
					}
					if ($reac0==1 and $myarray[$j][1]==0){ //if R1=0 then R2=1 
						if($num==2){
							fputs($data, '!0');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, '(!0');
							fputs($data, $myarray[$j][0]);
							fputs($data, ')');
						}
					}
					
					else if ($reac0==1 and $myarray[$j][1]=='f'){ //if R1=f then R2=1
						if($num==2){
							fputs($data, '!f');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, '(!f');
							fputs($data, $myarray[$j][0]);
							fputs($data, ')');
						}
					}
					else if ($reac0==1 and $myarray[$j][1]==1){ //if R1=1 then R2=1 
						if($num==2){
							fputs($data, '1');
							fputs($data, $myarray[$j][0]);
							fputs($data, ' | ');
							fputs($data, '1');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, '1');
							fputs($data, $myarray[$j][0]);
						}
					}
					
					else if ($reac0==1 and $myarray[$j][1]=='f'){ //if R1=f then R2=1 
						if($num==2){
							fputs($data, 'f');
							fputs($data, $myarray[$j][0]);
							fputs($data, ' | ');
							fputs($data, 'f');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, 'f');
							fputs($data, $myarray[$j][0]);
						}
					}
					
					else if ($reac0==0 and $myarray[$j][1]==1){ //if R1=1 then R2=0
						if ($num==2){
							fputs($data, '!1');
						}
						else{
							fputs($data, '1');
						}
						fputs($data, $myarray[$j][0]);
						if ($j>1 and $num>3){
							fputs($data, ')');
						}
					}
					
					else if ($reac0==0 and $myarray[$j][1]=='f'){ //if R1=f then R2=0
						if ($num==2){
							fputs($data, '!f');
						}
						else{
							fputs($data, 'f');
						}
						fputs($data, $myarray[$j][0]);
						if ($j>1 and $num>3){
							fputs($data, ')');
						}
					}
					
					else if ($reac0==0 and $myarray[$j][1]==0){ //if R1=0 then R2=0
						if($num==2){
							fputs($data, '0');
							fputs($data, $myarray[$j][0]);
							fputs($data, ' | ');
							fputs($data, '0');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, '(!0');
							fputs($data, $myarray[$j][0]);
							fputs($data, ')');
						}
					}
					
					else if ($reac0==0 and $myarray[$j][1]=='f'){ //if R1=f then R2=0
						if($num==2){
							fputs($data, 'f');
							fputs($data, $myarray[$j][0]);
							fputs($data, ' | ');
							fputs($data, 'f');
							fputs($data, $myarray[$j][0]);
						}
						else{
							fputs($data, '(!f');
							fputs($data, $myarray[$j][0]);
							fputs($data, ')');
						}
					}
					
					if ($j>1 and $num>3){
						fputs($data, ')');
					}			
				}
				if($reac0==0 and $num>2){
					fputs($data, "))\n");
				}
				else{
					fputs($data, ")\n");
				}

				fclose($data);
				header('Location: generules.php');
			}
			else{
				echo TXT_CREATION_CLIC;
			}
		?>

	</body>
</html>
