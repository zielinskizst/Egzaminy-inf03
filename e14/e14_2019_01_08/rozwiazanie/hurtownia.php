<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Hurtownia komputerowa</title>
	<link rel="stylesheet" href="styl2.css" />
</head>
<body>
	<div id="lista">
		<ul>
			<li>Producenci
				<ol>
					<li>Intel</li>
					<li>AMD</li>
					<li>Motorola</li>
					<li>Corsair</li>
					<li>ADATA</li>
					<li>WD</li>
					<li>Kingstone</li>
					<li>Patriot</li>
					<li>Asus</li>
				</ol>
			</li>
		</ul>
	</div>
	<div id="formularz">
		<h1>Dystrybucja sprzętu komputerowego</h1>
		<form action="hurtownia.php" method="post">
			<label>
				Wybierz producenta<br/>
				<input type="number" name="producent" />
			</label>
			<button type="submit">WYŚWIETL</button>
		</form>
	</div>
	<div id="logo">
		<img src="sprzet.png" alt="Sprzedajemy komputery" />
	</div>
	<div id="glowny">
		<h2>Podzespoły wybranego producenta</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'sklep');
		if(!empty($_POST['producent'])) {
			$producent = $_POST['producent'];
			$kw = "SELECT podzespoly.nazwa, podzespoly.dostepnosc, podzespoly.cena FROM podzespoly, producenci WHERE podzespoly.producenci_id = producenci.id AND producenci.id = $producent;";
			$res = mysqli_query($con, $kw);
			while($tab = mysqli_fetch_row($res)) {
				$dostepnosc = "NIEDOSTĘPNY";
				if($tab[1] == '1') $dostepnosc = "DOSTĘPNY";
				echo "<p>$tab[0] CENA: $tab[2] $dostepnosc</p>";
			}
		}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<h4>Zapraszamy od poniedziałku do soboty w godzinach 7<sup>30</sup>-16<sup>30</sup></h4>
		Strony partnerów:
		<a href="http://adata.pl/" target="_blank">ADATA</a>
		<a href="http://patriot.pl/" target="_blank">Patriot</a>
		<a href="mailto:biuro@hurt.pl">Napisz</a>
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>
</html>