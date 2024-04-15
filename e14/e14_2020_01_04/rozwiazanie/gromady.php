<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Gromady kręgowców</title>
	<link rel="stylesheet" href="style12.css" />
</head>
<body>
	<div id="menu">
		<a href="gromada-ryby.html">gromada ryb</a>
		<a href="gromada-ptaki.html">gromada ptaków</a>
		<a href="gromada-ssaki.html">gromada ssaków</a>
	</div>
	<div id="logo">
		<h2>GROMADY KRĘGOWCÓW</h2>
	</div>
	<div id="lewy">
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'baza');
		$kw1 = "SELECT id, Gromady_id, gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id IN (4, 5);";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			if($tab[1] == 4) $gromada = "ptaki";
			if($tab[1] == 5) $gromada = "ssaki";
			echo "<p>$tab[0]. $tab[2]</p>";
			echo "<p>Występowanie: $tab[3], gromada $gromada</p>";
			echo "<hr/>";
		}
		?>
	</div>
	<div id="prawy">
		<h1>PTAKI</h1>
		<ol>
		<?php
		$kw2 = "SELECT gatunek, obraz FROM zwierzeta WHERE Gromady_id = 4;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<li><a href='$tab[1]'>$tab[0]</a></li>";
		}
		mysqli_close($con);
		?>
		</ol>
		<img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki" />
	</div>
	<div id="stopka">
		Stronę o kręgowcach przygotował: PESEL
	</div>
</body>
</html>