<?php require_once "include/mysql.php"; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Apáczai Szakgimnázium és Kollégium</title>

</head>
	
<body>
<div id="background"></div>
<div id="container">
	<div id="header">
		<div id="suli"><p>Apáczai Szakgimnázium és&nbsp;Kollégium<br>Dombóvár</p></div>
		<div style="clear:both;"></div>
		
	</div>
	<div style="clear:both;"></div>
	<div id="menu">
		<div class="menuitem"><a href="index.php?o=iskola">Iskolánkról</a></div>
		<div class="menuitem"><a href="index.php?o=beiskolazas">Beiskolázás</a></div>
		<div class="menuitem"><a href="index.php?o=kepzes">Képzés, vizsgák</a></div>
		<div class="menuitem"><a href="index.php?o=dokumentumtar">Dokumentumtár</a></div>
		<div class="menuitem"><a href="index.php?o=projekt">Projektek</a></div>
		<div class="menuitem"><a href="index.php?o=tanaraink">Tanáraink</a></div>
		<div class="menuitem"><a href="index.php?o=alapitvany">Alapítvány</a></div>
		<div class="menuitem"><a href="index.php?o=fenntarto">Fenntartó</a></div>
		<div style="clear:both;"></div>
	</div>

	<div class="main">
	<?php
		if(isset($_GET["o"]))
		{
			$filename = "include/" . $_GET["o"] .".php";
			if(file_exists($filename)) 
			require_once "include/" . $_GET["o"] .".php";
			else { echo "Nincs ilyen oldal"; }
		}
		
	?>
	
	</div>

	<div style="clear:both;"></div>
	<div id="footer">
		<div class="doboz"><img  src="images/okoiskola_logo.png" ></div>
		<div class="doboz"><img src="images/FTH_jelveny.png" ></div>    
		<div class="doboz"><img src="images/hatartalanul_logo.jpg" ></div>
		<div class="doboz"><img src="images/ecdl.png" ></div>
		<div class="doboz"><img src="images/cisco.png" ></div>
	</div>

</div>

</body>

</html>