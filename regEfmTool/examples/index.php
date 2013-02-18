<!DOCTYPE html>
<html>
	<head>
		<title>Load Network</title>
<?php 
			$output = exec('pwd');
			echo "<pre>$output</pre>";
			exec('java -jar  ../regEfmtool.jar -log console -level FINEST -format plain -kind stoichiometry -stoich simple_1/example.sfile -rev simple_1/example.rvfile -meta simple_1/example.mfile -reac simple_1/example.rfile -out text-doubles simple_1/modes_inc_generules.text -normalize none -maxthreads 2 -generule simple_1/example.grfile 
 > essaiJar.txt');
/*
 ../regEfmtool.jar -log console -level FINEST -format plain -kind stoichiometry -stoich simple_1/example.sfile -rev simple_1/example.rvfile -meta simple_1/example.mfile -reac simple_1/example.rfile -out text-doubles simple_1/modes_inc_generules.text -normalize none -maxthreads 2 -generule simple_1/example.grfile 
*/

			echo "<pre>$output</pre>";
		 ?>
	</head>
	<body>
		<script type='text/javascript'>
if (typeof java === 'undefined') {
    document.write("Java is not installed.");
} else {
    document.write("java.version " + java.lang.System.getProperty("java.version"));
}
</script>


		<center>
			<h1>Chargement d'un réseau</h1>
		</center>
		<center>
<!--
			<a href="http://pagesperso.emi.u-bordeaux1.fr/joris.sansen/cpr/tests/test.jnlp">hello world</a>
-->
			<h2>Veuillez charger les fichiers nécessaires à la construction du réseau métabolique : </h2>
			<table border="3" width=30%>
			<caption>Fichier des métabolites :</caption>
			
 			<tr>
				<td>
					<label ="fichierMetabolites"></label>
					<input type="file" name="fichierMetabolites" id="fichierMetabolites" /> 
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<input type="submit" name="submit" value="Envoyer" onclick="chargerFichier(fichierMetabolites)"/>
					</center>
 	 			</td>
 	 		</tr>
		</table>
	</center> 


</body>









