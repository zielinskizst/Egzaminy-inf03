<?php
$con = mysqli_connect('localhost', 'root', '', 'ogloszenia');
if(!empty($_POST['kategoria']) && !empty($_POST['podkategoria']) && !empty($_POST['tytul']) && !empty($_POST['tresc'])) {
	$kategoria = $_POST['kategoria'];
	$podkategoria = $_POST['podkategoria'];
	$tytul = $_POST['tytul'];
	$tresc = $_POST['tresc'];
	$kw = "INSERT INTO ogloszenie VALUES (NULL, 1, $kategoria, $podkategoria, '$tytul', '$tresc')";
	mysqli_query($con, $kw);
}
mysqli_close($con);
?>