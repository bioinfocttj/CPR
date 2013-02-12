<!DOCTYPE html>
<html>
	<head>
		<title>results</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
	<?php
		function waiting(){
			//~ document.getElementById("results").innerHTML='<img src="Images/waiting.gif" alt="please Wait...">';
			echo '<img src="Images/waiting_fun.gif" alt="please Wait...">';
		}
		function parse_res(){
			$file = file('modes_inc_generules.text');
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

			foreach($modes as $value){
				$temp = '';
				foreach ($value as $v){
				//~ foreach ($modes[$key] as $v){
					$temp = $temp . ' ' . $v;
				}
				echo '<p>' . $temp . '</p>';
			}
			//~ echo '<p>' . $modes[2][3] . '</p>';
		}
	?>
	</head>
	<body>
			plouf
				<?php 
			echo '<p>' . $_COOKIE['commande'] . '</p>';?>
		<div id="results" name="results" title="waiting_results" >
		<?php 
			//~ echo '<p>ploup</p>';
			if (!isset($res)){
			echo '<script>document.getElementById("results").innerHTML = "";</script>';
				waiting();
			}
			echo '<script>document.getElementById("results").innerHTML = "";</script>';
			parse_res();
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
