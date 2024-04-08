<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Dane o zwierzętach</title>
	<link rel="stylesheet" href="styl3.css" />
</head>
<body>
	<div id="baner">
		<h1>ATLAS ZWIERZĄT</h1>
	</div>
	<div id="formularz">
		<h2>Gromady:</h2>
		<ol>
			<li>Ryby</li>
			<li>Płazy</li>
			<li>Gady</li>
			<li>Ptaki</li>
			<li>Ssaki</li>
		</ol>
		<form action="index.php" method="post">
			<label>
				Wybierz gromadę:
				<input type="number" name="nr" />
			</label>
			<button type="submit">Wyświetl</button>
		</form>
	</div>
	<div id="lewy">
		<img src="zwierzeta.jpg" alt="dzikie zwierzeta" />
	</div>
	<div id="srodkowy">
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'baza');
		if(!empty($_POST['nr'])) {
			$nr = $_POST['nr'];
			$wybor = "";
			if ($nr == 1) $wybor = "RYBY";
			if ($nr == 2) $wybor = "PŁAZY";
			if ($nr == 3) $wybor = "GADY";
			if ($nr == 4) $wybor = "PTAKI";
			if ($nr == 5) $wybor = "SSAKI";
			$kw1 = "SELECT gatunek, wystepowanie FROM zwierzeta, gromady WHERE zwierzeta.Gromady_id = gromady.id AND gromady.id = $nr;";
			$res1 = mysqli_query($con, $kw1);
			echo "<h2>$wybor</h2>";
			while($tab = mysqli_fetch_row($res1)) {
				echo "$tab[0], $tab[1]<br/>";
			}
		}
		?>
	</div>
	<div id="prawy">
		<h2>Wszystkie zwierzęta w bazie</h2>
		<?php
			$kw2 = "SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta, gromady WHERE zwierzeta.Gromady_id = gromady.id;";
			$res2 = mysqli_query($con, $kw2);
			while($tab = mysqli_fetch_row($res2)) {
				echo "$tab[0]. $tab[1], $tab[2]<br/>";
			}
		?>
	</div>
	<div id="stopka">
		<a href="http://altas-zwierzat.pl" target="_blank">Poznaj inne strony o zwierzętach</a>
		autor Atlasu zwierząt: PESEL
	</div>
</body>
</html>