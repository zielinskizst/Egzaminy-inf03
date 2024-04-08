<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Hutrtownia</title>
	<link rel="stylesheet" href="styl1.css" />
</head>
<body>
	<div id="logo">
		<img src="komputer.png" alt="hurtownia komputerowa" />
	</div>
	<div id="lista">
		<ul>
			<li>Sprzęt
				<ol>
					<li>Procesory</li>
					<li>Pamięci RAM</li>
					<li>Monitory</li>
					<li>Obudowy</li>
					<li>Karty graficzne</li>
					<li>Dyski twarde</li>
				</ol>
			</li>
			<li>Oprogramowanie</li>
		</ul>
	</div>
	<div id="formularz">
		<h2>Hurtownia komputerowa</h2>
		<form action="sklep.php" method="post">
			<label>
				Wybierz kategorię sprzętu<br/>
				<input type="number" name="kat" />
			</label>
			<button type="submit">SPRAWDŹ</button>
		</form>
	</div>
	<div id="glowny">
		<h1>Podzespoły we wskazanej kategorii</h1>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'sklep');
		if(!empty($_POST['kat'])) {
			$kat = $_POST['kat'];
			$kw = "SELECT podzespoly.nazwa, podzespoly.opis, podzespoly.cena FROM podzespoly, typy WHERE podzespoly.typy_id = typy.id AND typy.id = $kat;";
			$res = mysqli_query($con, $kw);
			while($tab = mysqli_fetch_row($res)) {
				echo "<p>$tab[0] $tab[1] CENA: $tab[2]</p>";
			}
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
		<a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
		Partnerzy:
		<a href="http://intel.pl" target="_blank">Intel</a>
		<a href="http://amd.pl" target="_blank">AMD</a>
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>