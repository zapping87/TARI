<?php
	$page = basename(__FILE__);
	require_once("top.php");

	$err = isset($_GET["err"]) ? $_GET["err"] : "";
	$nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
	$cognome = isset($_GET["cognome"]) ? $_GET["cognome"]: "";
	$username = isset($_GET["username"]) ? $_GET["username"]: "";
	$indirizzo = isset($_GET["indirizzo"]) ? $_GET["indirizzo"]: "";
	$telefono = isset($_GET["telefono"]) ? $_GET["telefono"]: "";
	$email = isset($_GET["email"]) ? $_GET["email"]: "";
	$citta = isset($_GET["citta"]) ? $_GET["citta"]: "";
	$cap = isset($_GET["cap"]) ? $_GET["cap"]: "";
?>

<h1>Registrati</h1>
<br /><br />
<form action="doregister.php" method="post">
	<table id="register">
		<tr>
			<td class="etichetta">Username: *</td>
			<td>
<?php
	if($err == "generic" && $username == "") {
?>
				<input type="text" id="username" name="username" value="<?php echo $username; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="username" name="username" value="<?php echo $username; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">Password: *</td>
			<td>
<?php
	if($err == "password") {
?>
				<input type="password" id="password" name="password" class="err" />
<?php
	} else {
?>
				<input type="password" id="password" name="password" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">Conferma password: *</td>
			<td>
<?php
	if($err == "password") {
?>
				<input type="password" id="password2" name="password2" class="err" />
<?php
	} else {
?>
				<input type="password" id="password2" name="password2" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="etichetta">Nome: *</td>
			<td>
<?php
	if($err == "generic" && $nome == "") {
?>
				<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">Cognome: *</td>
			<td>
<?php
	if($err == "generic" && $cognome == "") {
?>
				<input type="text" id="cognome" name="cognome" value="<?php echo $cognome; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="cognome" name="cognome" value="<?php echo $cognome; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="etichetta">Indirizzo: *</td>
			<td>
<?php
	if($err == "generic" && $indirizzo == "") {
?>
				<input type="text" id="indirizzo" name="indirizzo" value="<?php echo $indirizzo; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="indirizzo" name="indirizzo" value="<?php echo $indirizzo; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">Telefono: *</td>
			<td>
<?php
	if($err == "generic" && $telefono == "") {
?>
				<input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">eMail: *</td>
			<td>
<?php
	if($err == "generic" && $nome == "") {
?>
				<input type="text" id="email" name="email" value="<?php echo $email; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="email" name="email" value="<?php echo $email; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">Citt&agrave;: *</td>
			<td>
<?php
	if($err == "generic" && $nome == "") {
?>
				<input type="text" id="citta" name="citta" value="<?php echo $citta; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="citta" name="citta" value="<?php echo $citta; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td class="etichetta">CAP: *</td>
			<td>
<?php
	if($err == "generic" && $nome == "") {
?>
				<input type="text" id="cap" name="cap" value="<?php echo $cap; ?>" class="err" />
<?php
	} else {
?>
				<input type="text" id="cap" name="cap" value="<?php echo $cap; ?>" />
<?php
	}
?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="centered">
				<input type="submit" id="invia" name="invia" value="Invia" />
				<input type="reset" id="annulla" name="annulla" value="Annulla" />
			</td>
		</tr>
	</table>
</form>

<?php
	require_once("sidebar.php");
	require_once("bottom.php");
?>
