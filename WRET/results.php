<!DOCTYPE html> 
<?php session_start();?>
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<title><?php echo TXT_SITE_TITLE; ?></title>
		<style media="all" type="text/css"></style>
	<?php
		function compare(){
			$_SESSION["isCompared"]=0;
			print ("<script language = \"JavaScript\">");
			print ("location.href = 'index.php';"); 
			print ("</script>");
		}
		function finish(){
			$_SESSION["isCompared"]=1;
			print ("<script language = \"JavaScript\">"); 
			print ("location.href = 'index.php';"); 
			print ("</script>");
		}
		function waiting(){
			//~ document.getElementById("results").innerHTML='<img src="../Images/waiting.gif" alt="please Wait...">';
			//~ echo '<img src="Images/waiting.gif" alt="please Wait...">';
		}
		function parse_res(){
			$file = file('modes2.text');
			//~ $lines=explode("\n",$file);
			$modes=array();
			$i=0;
			foreach($file as &$lines){
				//~ $temp = $temp . $line;
				$values=explode("\t",$lines);
				$modes[$i]=$values;
				$i++;
				//~ echo '<p>'.$lines.'</p>';
			}
			return $modes;
			//~ echo '<p>' . $modes[2][3] . '</p>';
		}
		function show_results($modes){
			foreach($modes as $value){
				$temp = '';
				foreach ($value as $v){
				//~ foreach ($modes[$key] as $v){
					$temp = $temp . ' ' . $v;
				}
				echo '<p>' . $temp . '</p>';
			}
		}
	?>
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
			<li><a href="modify.php">		<?php echo TXT_MENU_MODIFY; ?>	</a></li>
			<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
			<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
			<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
			<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
		</ul>
	</div>
	<body>
		<div id="results" name="results" title="waiting_results" >
			<?php 
				if ($_SESSION["isCompared"]==0){
					$res=$_SESSION["compare"];
					echo "<div id='original' name='original' title='original results' >";
					echo '<p>original</p>';
					show_results($res);
					echo "</div>";
				}
			?>
			<div id="new" name="new" title="new results">
				<?php
					if (!isset($modes)){
						echo '<script>document.getElementById("new").innerHTML = "";</script>';
						waiting();
					}
					echo '<script>document.getElementById("new").innerHTML = "";</script>';
					$res2=parse_res();
					echo "<p>nouveau</p>";
					show_results($res2);
					$_SESSION['compare']=$res2;
				?>
			</div>
		</div>
		<div id="log" name="log" title="log">
			<h1><?php echo TXT_FILE_CHOOSE_TITLE; ?></h1>
			<h4><?php echo TXT_FILE_CHOOSE_SUBTITLE; ?></h4>
			</br>
			<form action = "parse_results.php" method="POST">
				<label class='tooltip'><?php echo TXT_FILE_CHOOSE; ?></label>
				<input type = "text"	name = "fichier">
				<input type= "submit" value='ok' onclick="parse_results.php">
			</form>
		</div>
		<div id='compare' name='compare'>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="compare" value="compare">
				<input type="submit" name="finish" value="finish">
			</form>
			<?php
				if(isset($_POST['compare'])) {compare();}
				else if (isset($_POST['finish'])){finish();}
			?>
		</div>
	</body>

<!--
<body >
	<div id="results" name="results" title="waiting_results" >
	</div>
	
</body>
-->

</html>
