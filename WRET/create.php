<!DOCTYPE html >
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
	  <title><?php echo TXT_CREATION_SITE_TITLE; ?></title>
	  <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	  
	  <?php

			echo "<script type='text/javascript'>";
			echo "metabo=new Array();";
			$file='metabolites.mfile';
			$content = fread(fopen($file, "r"), filesize($file));
			$array1 = explode("\"",$content);
			$j=0;
			for ($i=0;$i<count($array1)-1;$i++){
				if($array1[$i]!=null && $array1[$i]!=" " && $array1[$i]!="" && $array1[$i]!="\n"){
					$array[$j]=$array1[$i];
					$j++;
				}
			}
			foreach ($array as $cle=>$valeur){
				echo "metabo[$cle] = '$valeur';\n";
			}
			
			echo "function add_metabo(){\n";
				echo "nbmetab=metabo.length-1;\n";
				echo "document.getElementById(\"datFile\").innerHTML=\"\"\n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<div><b id='ext'>";
				echo TXT_CREATE_EXT;
				echo"</b><b id='int'>";
				echo TXT_CREATE_INT;
				echo"</b></div>\";\n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<select id='metab' multiple name='Metab[]' size='30'></select>\";\n";
				echo "for (var i=0; i<metabo.length; i++){\n";
				echo "document.getElementById(\"metab\").innerHTML+=\"<option value='\"+metabo[i]+\"'>\"+metabo[i]+\"</option>\";\n";
				echo "}\n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<input id='addext' type='button' name='addext' value='";
				echo TXT_CREATE_BUTTON_ADD1;
				echo "' onclick=selectExt('metab','metabext')>\"; \n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<input id='removeext' type='button' name='removeext' value='";
				echo TXT_CREATE_BUTTON_REMOVE1;
				echo "' onclick=selectExt('metabext','metab')>\"; \n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<select id='metabext' multiple name='extMetab[]' size='30'></select><br/><br/>\";\n";
				echo "document.getElementById(\"datFile\").innerHTML+=\"<input type='button' name='reac' value='DAT' onclick='formulaire(this.form)' />\"; \n";
			echo "}\n";
			
			echo "</script>\n";
		?>
		
		<script type="text/javascript">
			function selectExt(sourceID, destID) {
				var src = document.getElementById(sourceID);
				var dest = document.getElementById(destID);
			 
				for(var count=0; count < src.options.length; count++) {
			 
					if(src.options[count].selected == true) {
							var option = src.options[count];
			 
							var newOption = document.createElement("option");
							newOption.value = option.value;
							newOption.text = option.text;
							newOption.selected = true;
							try {
									 dest.add(newOption, null); //Standard
									 src.remove(count, null);
							 }catch(error) {
									 dest.add(newOption); // IE only
									 src.remove(count);
							 }
							count--;
					}
				}
			}
			
			function formulaire(form){
				var selectExt=form.elements["Metab[]"];
				var nbExt=selectExt.length;
				var selectInt=form.elements["extMetab[]"];
				var nbInt=selectInt.length;
				
				for (var a = 0; a < nbExt; a++){
					selectExt.options[a].selected = "selected";
				}
			   
				for (var a = 0; a < nbInt; a++){
					selectInt.options[a].selected = "selected";
				}
				form.submit();
			}
			
			function validateForm(){
				if (document.getElementById("choix1").checked==false && document.getElementById("choix0").checked==false){
					alert("vous devez choisir la réversibilité");
					return false;
				}
				else{
					return true;
				}				
			}
	
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
		</script>

	</head>
	<?php 
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
		$host = $_SERVER['HTTP_HOST'];
		$script = $_SERVER['SCRIPT_NAME'];
		if(!isset($params)){
			$currentUrl = $protocol . '://' . $host . $script . '?';
		}
		else{
			$currentUrl = $protocol . '://' . $host . $script . '?' . $params;
		}
		$en=$currentUrl."lang=en";
		$fr=$currentUrl."lang=fr";
		$de=$currentUrl."lang=de";
	?>
	<div id="menu">
		<ul>
			<li><a href="index.php">		<?php echo TXT_MENU_HOME; ?>	</a></li>
			<li><a href="create.php">		<?php echo TXT_MENU_CREATE; ?> 	</a></li>
			<li><a href="load.php">			<?php echo TXT_MENU_LOAD; ?>	</a></li>
			<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
		</ul>
	</div>
	
	<body>
		<center>
			<h1><?php echo TXT_CREATION_TITLE; ?></h1>
		</center>
		
		<h4><?php echo TXT_INIT_FILES; ?></h4>

		<form  name="formulaireR" method="POST" action="init_files.php">
			<input type="submit" name="reac" value= <?php echo TXT_CREATION_INIT; ?> /> 
		</form>	
		
		<h4><?php echo TXT_CREATION_INSTRUCTION_1; ?></h4>

		<a href="JavaScript:newPopup('help_create.php');"><?php echo TXT_GENERULES_HELP_RULES; ?></a> <br/><br/>
		
		<form  name="formulaireR" method="POST" action="createFiles.php" onSubmit="return validateForm()">
			<input type="text" name="reac" value="reaction : reag1 + reag2 => 2 prod1 + 4 prod2 ." size="60" onfocus="this.value = this.value=='reaction : reag1 + reag2 => 2 prod1 + 4 prod2 .'?'':this.value;" onblur="this.value = this.value==''?'reaction : reag1 + reag2 => 2 prod1 + 4 prod2 .':this.value;"/> 

			<br/> <br/>
			<label> <?php echo TXT_CREATION_IS_REVERSIBLE; ?></label>

			<br/> <br/>
			
			<input type="radio" name="choix1" id="choix1" value="1"> <?php echo TXT_CREATION_YES; ?>
			<input type="radio" name="choix1" id="choix0" value="0"> <?php echo TXT_CREATION_NO; ?> <br/> 
			
			<FONT color="red" size="4">
				<h4><?php echo TXT_CREATION_WARNING_TITLE; ?></h4>
				<p> <?php echo TXT_CREATION_WARNING; ?></p>
			</FONT>
		
			<input type="submit" name="button" value="<?php echo TXT_ADD_BUTTON; ?>" /><br/><br/> <br/>
			<label> <?php echo TXT_CREATION_ALREADY_OK; ?></label>
			<br/> <br/>
			
		</form>
		
		<form method="post" action="modifier.php">
			 <textarea name="reactions" cols="100" rows="25"><?php echo file_get_contents( 'reactionTemp2.txt' ); ?> </textarea><br/>			
			 
			<FONT color="red" size="4">
				<h4><?php echo TXT_CREATION_WARNING_TITLE; ?></h4>
				<p> <?php echo TXT_CREATION_WARNING_2; ?></p>
			</FONT>
			<input type="submit" value="<?php echo TXT_MODIFY_BUTTON; ?>" />
		</form>
		<br/> <br/>
		
		<h4><?php echo TXT_CREATION_FINISH; ?></h4>
		<input type='button' name='buttonMext' 	value="<?php echo TXT_CREATE_CHOOSE_EXT;?>" onclick=add_metabo()/>
		<br/>
		<br/>

		<form  id="datFile" name="datFile" method="POST" action="finish_files.php">
			
		</form>	
		
		<br/> <br/>
		
		<input type="submit" name="button2" value="<?php echo TXT_NEXTSTEP_BUTTON; ?>" onclick="self.location.href='generules.php'" />

		
		
	</body>
</html>
		
		
