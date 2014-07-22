<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$nome = $_POST["nome"];
	$cognome = $_POST["cognome"];
	$indirizzo = $_POST["indirizzo"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$citta = $_POST["citta"];
	$cap = $_POST["cap"];

	$err = "";

	if(!empty($username) && !empty($password) && !empty($password2) && !empty($nome) && !empty($cognome) && !empty($indirizzo) && !empty($telefono) && !empty($email) && !empty($citta) && !empty($cap)) {
		if($password == $password2) {
			$conn = mysql_connect("localhost", "lia", "lia") OR die("Error: " . mysql_error());
			mysql_select_db("lia", $conn);
			$query = "INSERT INTO utenti (Nome, Cognome, username, password, Indirizzo, Telefono, eMail, Citta, CAP) VALUES ('$nome', '$cognome', '$username', '$password', '$indirizzo', '$telefono', '$email', '$citta', '$cap')";
			@mysql_query($query, $conn);
			$num = mysql_affected_rows($conn);

			$page = basename(__FILE__);
			require_once("top.php");
			if($num > 0) {
				echo "<h1>Registrazione effettuata con successo!</h1>\n";
				echo "<h2><a href=\"index.php\">Torna alla homepage!</a></h2>";
			} else {
				echo "<h1>Errore durante la registrazione</h1>\n";
				echo "<h2><a href=\"register.php\">Torna alla pagina di registrazione!</a></h2>";
			}
			require_once("sidebar.php");
			require_once("bottom.php");
		} else {
			$err = "password";
		}
	} else {
		$err = "generic";
	}

	if($err != "") {
		header("Location: register.php?err=$err&nome=$nome&cognome=$cognome&username=$username&indirizzo=$indirizzo&telefono=$telefono&email=$email&citta=$citta&cap=$cap");
	}
?>