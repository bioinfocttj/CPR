<!DOCTYPE html> 
<?php session_start();?>
<?php require("languages/choosen_languages.php");?>
<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<title><?php echo TXT_DISPLAY_RESULTS_SITE_TITLE; ?></title>
		<style media="all" type="text/css"></style>
		<script type="text/javascript">
			// Popup window code
			function newPopup(url) {
				popupWindow = window.open(url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
			}
		</script>
	<?php
		function compare(){
			$_SESSION["isCompared"]=1;
			print ("<script language = \"JavaScript\">");
			print ("location.href = 'index.php';"); 
			print ("</script>");
		}
		
		function finish(){
			$_SESSION["isCompared"]=0;
			print ("<script language = \"JavaScript\">"); 
			print ("location.href = 'index.php';"); 
			print ("</script>");
		}
		
		function waiting(){
			echo '<img src="Images/waiting.gif" alt="please Wait...">';
			$com = $_COOKIE['commande'];
			if ($_SESSION['isCompared']==0) {
				$com = $com . ' > log.txt';
				shell_exec($com);
			if ($_SESSION['isCompared']==1) {
				$com = $com . ' > log.txt';
				shell_exec($com);
			}
			else {
				$com = $com . ' > log1.txt';
				shell_exec($com);
			}
		}
		
		function parse_res(){
			$f = $_COOKIE["resultat"];
			$file = file($f);
			$reac = file('rfile');
			$modes=array();
			foreach($reac as &$lines){
				$reactions=array();
				$reactions = explode(" ",$lines);
				$modes[0]=$reactions;
			}
			$i=1;
			foreach($file as &$lines){
				$values=explode("\t",$lines);
				$modes[$i]=$values;
				$i++;
			}
			return $modes;
		}
		function update(){
		}
		function show_results($modes){
			echo '<table>';
			$m = 0;
			foreach($modes as $value){
				echo '<tr>';
				$temp = '';
				echo '<td>';
				echo 'm' . $m . '|';
				echo '</td>';
				$m=$m + 1;
				foreach ($value as $v){
					echo '<td>';
					echo $v;
					echo '</td>';
				}
				echo '<p>' . $temp . '</p>';
				echo '</tr>';
			}
			echo '</table>';
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
				<li><a href="help.php">			<?php echo TXT_MENU_HELP; ?>	</a></li>
				<li><a href=<?php echo $en?>><img src="Images/English-Language-Flag-3-icon.png" alt="english_flag.png"></a></li>
				<li><a href=<?php echo $fr?>><img src="Images/French-Flag.png" alt="french_flag.png"></a></li>
				<li><a href=<?php echo $de?>><img src="Images/german_flag.gif" alt="german_flag.gif"></a></li>
			</ul>
		</div>
	<body>
		<h1><?php echo TXT_DISPLAY_RESULTS_TITLE; ?></h1>
		<div id="results" name="results" title="waiting_results" >
			<?php
				if ($_SESSION["isCompared"]==1){
					$res=$_SESSION["compare"];
					echo "<div id='original' name='original' title='original results' >";
					echo '<p>' . TXT_DISPLAY_RESULTS_ORIGINAL . '</p>';
					show_results($res);
					echo "</div>";
				}
			?>
			<div id="new" name="new" title="new results">
				<?php
					if (count($modes)<2){
						echo '<script>document.getElementById("new").innerHTML = "";</script>';
						waiting();
					}
					$res2=parse_res();
					echo '<script>document.getElementById("new").innerHTML = "";</script>';
					echo '<p>' . TXT_DISPLAY_RESULTS_NEW . '</p>';
					show_results($res2);
					$_SESSION['compare']=$res2;
				?>
			</div>
			<div id="log" name="log" title="log">
				<h1><?php echo TXT_FILE_CHOOSE_TITLE; ?></h1>
				<a href="JavaScript:newPopup('parse_results.php');">PopUp</a>
			</div>
		</div>

		<div id='compare' name='compare'>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="compare" value="<?php echo TXT_COMPARE_BUTTON; ?>">
				<input type="submit" name="finish" value="<?php echo TXT_FINISH_BUTTON; ?>">
			</form>
			<?php
				if(isset($_POST['compare'])) {compare();}
				else if (isset($_POST['finish'])){finish();}
			?>
		</div>
	</body>
</html>
