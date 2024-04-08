<!DOCTYPE html>
<html>
<head>
	<meta charset="ITF-8" />
	<title>Portal ogłoszeniowy</title>
	<link rel="stylesheet" href="styl1.css" />
</head>
<body>
	<div id="baner">
		<h1>Portal Ogłoszeniowy</h1>
	</div>
	<div id="lewy">
		<h2>Kategorie ogłoszeń</h2>
		<ol>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Filmy</li>
		</ol>
		<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę" />
		<table>
			<tr>
				<td>Liczba ogłoszeń</td>
				<td>Cena ogłoszenia</td>
				<td>Bonus</td>
			</tr>
			<tr>
				<td>1 - 10</td>
				<td>1 PLN</td>
				<td rowspan="3">Subskrypcja newstellera to upust 0,20 PLN na ogłoszenie</td>
			</tr>
			<tr>
				<td>11 - 50</td>
				<td>0,80 PLN</td>
			</tr>
			<tr>
				<td>51 i więcej</td>
				<td>0,60 PLN</td>
			</tr>
		</table>
	</div>
	<div id="prawy">
		<h2>Ogłoszenia kategorii książka</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'ogloszenia');
		$kw1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1;";
		$kw2 = "SELECT telefon FROM uzytkownik, ogloszenie WHERE uzytkownik.id = ogloszenie.uzytkownik_id;";
		$res1 = mysqli_query($con, $kw1);
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res1)) {
			$tab2 = mysqli_fetch_row($res2);
			echo "<h3>$tab[0] $tab[1]</h3>";
			echo "<p>$tab[2]</p>";
			echo "<p>telefon kontaktowy: $tab2[0]</p>";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		Portal ogłoszeniowy opracował: PESEL
	</div>
</body>
</html>