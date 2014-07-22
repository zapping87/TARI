<?php
	@session_start();
	$conn = mysql_connect("localhost", "lia", "lia") OR die("Error: " . mysql_error());
	mysql_select_db("lia", $conn);

	$id = isset($_GET["id"]) ? $_GET["id"] : "";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TeleShop.org</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="script.js"></script>
<?php
	if($page == "detail.php") {
?>
		<script type="text/javascript">
			if(window.XMLHttpRequest)
				xhttp = new XMLHttpRequest();
			else // Internet Explorer 5/6
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");

			xhttp.open("GET","articoli.xml", false);
			xhttp.send("");
			xmlDoc = xhttp.responseXML;
			var x = xmlDoc.getElementsByTagName("articolo");
		</script>
<?php
	}
?>
	</head>
	<body>
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="index.php">TeleShop.org</a></h1>
				<p class="subtitle"> Compra il tuo telefono online!!</p>
			</div>
		</div>
	</div>
		<div id="page">
			<div id="preview">&nbsp;</div>
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">