<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Biblioteka miejska</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="baner">
		<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
	</div>
	<div id="lewy">
		<h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
		<ul>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'biblioteka');
		$kw1 = "SELECT imie, nazwisko FROM autorzy;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		?>
		</ul>
	</div>
	<div id="srodkowy">
		<h3>Dodaj nowego czytelnika</h3>
		<form action="biblioteka.php" method="post">
			<label>
				imię:
				<input type="text" name="imie" /><br/>
			</label>
			<label>
				nazwisko:
				<input type="text" name="nazwisko" /><br/>
			</label>
			<label>
				rok urodzenia:
				<input type="number" name="rok" /><br/>
			</label>
			<button>DODAJ</button>
		</form>
		<?php
		if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['rok'])) {
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$rok = $_POST['rok'];
			$kod = $imie[0].$imie[1].$nazwisko[0].$nazwisko[1];
			$kod = strtoupper($kod).$rok[-2].$rok[-1];
			$kw2 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$kod');";
			mysqli_query($con, $kw2);
			echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
		}
		mysqli_close($con);
		?>
	</div>
	<div id="prawy">
		<img src="biblioteka.png" alt="książki" />
		<h4>
			ul. Czytelnicza 25<br/>
			12-120 Książkowice<br/>
			tel.: 123123123<br/>
			e-mail: <a href="mailto:biuro@biblioteka.pl">biuro@biblioteka.pl</a>
		</h4>
	</div>
	<div id="stopka">
		<p>Projekt strony: PESEL</p>
	</div>
</body>
</html>