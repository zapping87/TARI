<?php
	if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true) {
		$query = "SELECT COUNT(*) AS num FROM carrello WHERE IDUtente = {$_SESSION["IDUtente"]}";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$num = $row["num"];
	} else
		$num = 0;
?>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
								<div id="search">
									<form method="get" action="cerca.php">
										<div>
											<input type="text" name="s" id="search-text" value="" />
											<input type="submit" id="search-submit" value="Cerca" />
										</div>
									</form>
								</div>
								<div style="clear: both;">&nbsp;</div>
							</li>
							<li>
								<h2>Login</h2>
<?php
	if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)
		echo "<ul><li>Ciao, <i>{$_SESSION["username"]}</i>. <a href=\"logout.php\">Logout</a></li></ul>";
	else {
?>
								<form action="login.php" method="post">
									<table style="width: 100%;">
										<tr>
											<td>
												<label for="login-username">Username:</label>
											</td>
											<td>
												<input type="text" name="login-username" id="login-username" />
											</td>
										</tr>
										<tr>
											<td>
												<label for="login-password">Password:</label>
											</td>
											<td>
												<input type="password" name="login-password" id="login-password" />
											</td>
										</tr>
										<tr>
											<td>
												&nbsp;
											</td>
											<td>
												<input type="submit" name="login-go" id="login-go" value="Accedi" />
											</td>
										</tr>
									</table>
								</form>
<?php
	}
?>
								<br />
							</li>
							<li>
								<h2>Menu</h2>
								<ul>
									<li><strong><a href="index.php">Home</a></strong></li>
									<li><a href="register.php">Registrati!</a></li>
									<?php
										if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true) {
									?>
									<li><a href="carrello.php">Carrello</a><?php if($num > 0) echo " ($num)"; ?></li>
									<?php
										}
									?>
								</ul>
							</li>
							<li>
								<h2>Marche</h2>
								<!-- SELECT marca, COUNT(*) AS quanti FROM articoli GROUP BY marca ORDER BY marca -->
								<ul>
								<?php
									$result = mysql_query("SELECT marca, COUNT(*) AS quanti FROM articoli GROUP BY marca ORDER BY marca", $conn) OR die("Error: " . mysql_error());
									while($row = mysql_fetch_assoc($result)) {
										echo "<li><a href=\"index.php?marca={$row["marca"]}\">{$row["marca"]}</a> ({$row["quanti"]})</li>";
									}
									mysql_free_result($result);
								?>
								</ul>
							</li>
						</ul>
					</div>
					<!-- end #sidebar -->