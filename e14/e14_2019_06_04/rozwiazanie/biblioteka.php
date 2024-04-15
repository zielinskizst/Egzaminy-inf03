<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Biblioteka publiczna</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="baner">
		<h3>Miejska Biblioteka Publiczna w Książkowicach</h2>
	</div>
	<div id="lewy">
		<h2>Dodaj czytelnika</h2>
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
		$con = mysqli_connect('localhost', 'root', '', 'biblioteka');
		if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['rok'])) {
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$rok = $_POST['rok'];
			$kod = $imie[0].$imie[1].$rok[-2].$rok[-1].$nazwisko[0].$nazwisko[1];
			$kod = strtolower($kod);
			$kw1 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$kod');";
			mysqli_query($con, $kw1);
			echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
		}
		?>
	</div>
	<div id="srodkowy">
		<img src="biblioteka.png" alt="biblioteka" />
		<h4>
			ul. Czytelnicza 25<br/>
			12-120 Książkowice<br/>
			tel.: 123123123<br/>
			e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a>
		</h4>
	</div>
	<div id="prawy">
		<h3>Nasi czytelnicy</h3>
		<ul>
		<?php
		$kw2 = "SELECT imie, nazwisko FROM czytelnicy;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		mysqli_close($con);
		?>
		</ul>
	</div>
	<div id="stopka">
		<p>Projekt witryny: PESEL</p>
	</div>
</body>
</html>