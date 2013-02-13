
<!DOCTYPE html >
<head>
		<title><?php echo TXT_GENERULES_SITE_TITLE; ?></title>
		<link rel='stylesheet' media='screen' type='text/css' href='style.css'/>
		<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
		
		</head>
		<body>
<?php

	echo "<script type='text/javascript'>";
	echo "mytab=new Array();";
	$file='reactions.rfile';
	$content = fread(fopen($file, "r"), filesize($file));
	$array1 = explode("\"",$content);
	$j=0;
	for ($i=0;$i<count($array1)-1;$i++){
		if($array1[$i]!=null && $array1[$i]!=" "){
			$array[$j]=$array1[$i];
			$j++;
		}
	}
	foreach ($array as $cle=>$valeur){
		echo "mytab[$cle] = '$valeur';\n";
	}
	
	echo "var num;";
	echo "var select=new Array();\n";
	
	echo "function add_reaction(){\n";
		echo "document.getElementById(\"b2\").innerHTML =\"\";\n";
		echo "num = document.getElementById(\"rule\").value;\n";
		echo "if (num<2){\n";
			echo "alert(\"";
			echo TXT_GENERULES_NUMBER;
			echo "\");\n";
		echo "}\n";
		echo "else{\n";
			echo "for (var i=1; i<=num; i++){\n";
				echo "if(i==1){\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<label id='if'>IF </label>\";\n";
				echo "}\n";
				
				echo "else if(num>2 && i!=num){\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<label id='op'> ";
					echo TXT_GENERULES_OP;
					echo " </label>\";\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<select id='operator\"+i+\"' name='operator\"+i+\"'><option selected='selected'>";
					echo TXT_GENERULES_OPERATOR;
					echo "</option><option>AND</option><option>OR </option></select>\";\n";
				echo "}\n";
				echo "else{\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<label>THEN </label>\";\n";
				echo "}\n";
				echo "document.getElementById(\"b2\").innerHTML +=\"<label id='reac'> ";
				echo TXT_GENERULES_REAC;
				echo " </label>\";\n";
				echo "document.getElementById(\"b2\").innerHTML +=\"<select id='box\"+i+\"' name='box\"+i+\"' onchange='choice(this,\"+i+\")'><option selected='selected'>";
				echo TXT_GENERULES_REAC_1;
				echo "</option></select>\";\n";

				echo "document.getElementById(\"b2\").innerHTML +=\"<label> ";
				echo TXT_GENERULES_VALUE;
				echo "</label>\";\n";
				echo "if(i==num){\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<select id='value\"+i+\"' name='value\"+i+\"'><option selected='selected'>";
					echo TXT_GENERULES_VALUE_2;
					echo "</option><option>0</option><option>1</option></select>\";\n";
				echo "}\n";
				echo "else{\n";
					echo "document.getElementById(\"b2\").innerHTML +=\"<select id='value\"+i+\"' name='value\"+i+\"'><option selected='selected'>";
					echo TXT_GENERULES_VALUE_2;
					echo "</option><option>0</option><option>1</option><option>f</option></select>\";\n";
				echo "}\n";
				echo "document.getElementById(\"b2\").innerHTML +=\"</br>\";\n";
				
			echo "}\n";
			echo "for(var l=0; l<mytab.length; l++){\n";
				echo "document.getElementById(\"box1\").innerHTML +=\"<option>\"+mytab[l]+\"</option>\";\n";
			echo "}\n";
			echo "document.getElementById(\"b2\").innerHTML +=\"</br></br>\";\n";
			echo "document.getElementById(\"b2\").innerHTML +=\"<input type='hidden' name='num' value='\"+num+\"' >\";\n";
			echo "document.getElementById(\"b2\").innerHTML +=\"<input type='submit' name='button' value='";
			echo TXT_GENERULES_BUTTON_ADD;
			echo "' >\";\n";
		echo "}\n";

	echo "}\n";
 
	echo "function validateForm(){\n";
		
		echo "for (var i=1; i<=num;i++){\n";
			echo "var k=\"box\"+i;\n";
			echo "var j=\"value\"+i;\n";
			echo "var reac=document.getElementById(k).selectedIndex;\n";
			echo "var value=document.getElementById(j).selectedIndex;\n";
			
			echo "if(i==1 || i==num){\n"; 
				echo "if(reac==0 || value==0){\n";
					echo "alert(\"";
					echo TXT_GENERULES_ALERT_1;
					echo " \"+i);\n";
					echo "return false;\n";
				echo "}\n";
			echo "}\n";
			
			echo "else{\n";
				echo "var l=\"operator\"+i;\n";
				echo "var op=document.getElementById(l).selectedIndex;\n";
				
				echo "if(reac==0 || value==0 || op==0){\n";
					echo "alert(\"";
					echo TXT_GENERULES_ALERT_2;
					echo " \"+i);\n";
					echo "return false;\n";
				echo "}\n";
			echo "}\n";
		echo "}\n";
		echo "return true;\n";
	echo "}\n";
	
	echo "</script>";
?>
</body>
</html>
