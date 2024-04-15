<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Odżywianie zwierząt</title>
	<link rel="stylesheet" href="styl4.css" />
</head>
<body>
	<div id="baner">
		<h2>DRAPIEŻNIKI I INNE</h2>
	</div>
	<div id="formularz">
		<h3>Wybierz styl życia:</h2>
		<form action="index.php" method="post">
			<select name="lista">
				<option value="1">Drapieżniki</option>
				<option value="2">Roślinożerne</option>
				<option value="3">Padlinożerne</option>
				<option value="4">Wszystkożerne</option>
			</select>
			<button type="submit">Zobacz</button>
		</form>
	</div>
	<div id="lewy">
		<h3>Lista zwierząt</h3>
		<ul>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'baza');
		$kw1 = "SELECT zwierzeta.gatunek, odzywianie.rodzaj FROM zwierzeta, odzywianie WHERE zwierzeta.Odzywianie_id = odzywianie.id;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<li>$tab[0] -> $tab[1]</li>";
		}
		?>
		</ul>
	</div>
	<div id="srodkowy">
		<?php
		if(!empty($_POST['lista'])) {
			$nr = $_POST['lista'];
			$wybor = "";
			if ($nr == 1) $wybor = "Drapieżniki";
			if ($nr == 2) $wybor = "Roślinożerne";
			if ($nr == 3) $wybor = "Padlinożerne";
			if ($nr == 4) $wybor = "Wszystkożerne";
			$kw2 = "SELECT zwierzeta.id, zwierzeta.gatunek, zwierzeta.wystepowanie FROM zwierzeta, odzywianie WHERE zwierzeta.Odzywianie_id = odzywianie.id AND odzywianie.id = $nr;";
			echo "<h3>$wybor</h3>";
			$res2 = mysqli_query($con, $kw2);
			while($tab = mysqli_fetch_row($res2)) {
				echo "$tab[0]. $tab[1], $tab[2]<br/>";
			}
		}
		mysqli_close($con);
		?>
	</div>
	<div id="prawy">
		<img src="drapieznik.jpg" alt="Wilki" />
	</div>
	<div id="stopka">
		<a href="http://pl.wikipedia.org" target="_blank">Poczytaj o zwierzętach na WIkipedii</a>,
		autor strony: PESEL
	</div>
</body>
</html>