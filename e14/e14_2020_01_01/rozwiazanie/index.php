<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Nasz sklep komputerowy</title>
	<link rel="stylesheet" href="styl8.css" />
</head>
<body>
	<div id="menu">
		<a href="index.php">Główna</a>
		<a href="procesory.html">Procesory</a>
		<a href="ram.html">RAM</a>
		<a href="grafika.html">Grafika</a>
	</div>
	<div id="logo">
		<h2>Podzespoły komputerowe</h2>
	</div>
	<div id="glowny">
		<h1>Dzisiejsze promocje</h1>
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<?php
			$con = mysqli_connect('localhost', 'root', '', 'sklep');
			$kw = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;";
			$res = mysqli_query($con, $kw);
			while($tab = mysqli_fetch_row($res)) {
				echo "<tr>
						<td>$tab[0]</td>
						<td>$tab[1]</td>
						<td>$tab[2]</td>
						<td>$tab[3]</td>
					</tr>";
			}
			?>
		</table>
	</div>
	<div id="stopka1">
		<img src="scalak.jpg" alt="promocje na procesory" />
	</div>
	<div id="stopka2">
		<h4>Nasz Sklep Komputerowy</h4>
		<p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
	</div>
	<div id="stopka3">
		<p>zadzwoń: 601 602 603</p>
	</div>
	<div id="stopka4">
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>