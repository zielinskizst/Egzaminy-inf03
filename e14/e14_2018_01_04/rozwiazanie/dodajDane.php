<?php
$con = mysqli_connect('localhost', 'root', '', 'ogloszenia');
if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['telefon']) && !empty($_POST['email'])) {
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$telefon = $_POST['telefon'];
	$email = $_POST['email'];
	$kw = "INSERT INTO uzytkownik VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$email');";
	mysqli_query($con, $kw);
}
mysqli_close($con);
?>