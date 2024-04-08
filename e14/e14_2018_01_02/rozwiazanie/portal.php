<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Ogłoszenia drobne</title>
	<link rel="stylesheet" href="styl2.css" />
</head>
<body>
	<div id="baner">
		<h1>Ogłoszenia drobne</h1>
	</div>
	<div id="lewy">
		<h2>Ogłoszeniodawcy</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'ogloszenia');
		$kw1 = "SELECT id, imie, nazwisko, email FROM uzytkownik WHERE id < 4";
		$kw2 = "SELECT tytul FROM ogloszenie LIMIT 1";
		$res = mysqli_query($con, $kw1);
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res)) {
			$tab2 = mysqli_fetch_row($res2);
			echo "<h3>$tab[0] $tab[1] $tab[2]</h3>";
			echo "<p>$tab[3]</p>";
			echo "<p>Ogłoszenie: $tab2[0]</p>";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="prawy">
		<h2>Nasze kategorie</h2>
		<ul>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Multimedia</li>
		</ul>
		<img src="ksiazki.jpg" alt="uwolnij swoją książkę" />
		<table>
			<tr>
				<td>Ile?</td>
				<td>Koszt</td>
				<td>Promocja</td>
			</tr>
			<tr>
				<td>1 - 40</td>
				<td>1,20 PLN</td>
				<td rowspan="2">Subskrybuj newsteller upust 0,30 PLN na ogłoszenie</td>
			</tr>
			<tr>
				<td>41 i więcej</td>
				<td>0,70 PLN</td>
			</tr>
		</table>
	</div>
	<div id="stopka">
		Portal ogłoszenia drobne opracował: PESEL
	</div>
</body>
</html>
