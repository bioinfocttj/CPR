<!DOCTYPE html> 
<?php session_start();?>
<html>
	<head>
		<title>results</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
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
