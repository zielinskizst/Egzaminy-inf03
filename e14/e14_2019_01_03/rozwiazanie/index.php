<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Filmoteka</title>
	<link rel="stylesheet" href="styl3.css" />
</head>
<body>
	<div id="pierwszy">
		<img src="klaps.png" alt="Nasze filmy" />
	</div>
	<div id="drugi">
		<h1>BAZA FILMÓW</h1>
	</div>
	<div id="trzeci">
		<form action="index.php" method="post">
			<select name="wybor">
				<option value="Sci-Fi">Sci-Fi</option>
				<option value="animacja">animacja</option>
				<option value="dramat">dramat</option>
				<option value="horror">horror</option>
				<option value="komedia">komedia</option>
			</select>
			<button type="submit">Filmy</button>
		</form>
	</div>
	<div id="czwarty">
		<img src="gwiezdneWojny.jpg" alt="szturmowcy" />
	</div>
	<div id="glowny1">
		<h2>Wybrano filmy:</h2>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'dane');
		if(isset($_POST['wybor'])) {
			$wybor = $_POST['wybor'];
			$kw1 = "SELECT tytul, rok, ocena FROM filmy, gatunki WHERE filmy.gatunki_id = gatunki.id AND gatunki.nazwa = '$wybor';";
			$res1 = mysqli_query($con, $kw1);
			while($tab = mysqli_fetch_row($res1)) {
				echo "<p>Tytuł: $tab[0], Rok produkcji: $tab[1], Ocena: $tab[2]</p>";
			}
		}
		?>
	</div>
	<div id="glowny2">
		<h2>Wybrano filmy:</h2>
		<?php
		$kw2 = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy, rezyserzy WHERE filmy.rezyserzy_id = rezyserzy.id;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
				echo "<p>$tab[0].$tab[1], reżyseria: $tab[2] $tab[3]</p>";
			}
		mysqli_close($con);
		?>
	</div>
	<div id="stopka">
		<p>Autor: PESEL</p>
		<a href="kwerendy.txt">Zapytania do bazy</a>
		<a href="http://filmy.pl">Przejdź do filmy.pl</a>
	</div>
</body>
</html>