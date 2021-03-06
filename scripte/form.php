<html>
<head>
<meta charset="UTF-8">
<title>blog miche1</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Menue Bar-->
<header id="menu">
			<nav>
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="about.html">Über mich</a></li>
					<li><a href="projects.html">Sport</a></li>
					<li><a href="form.php">Eintrag hinzufügen</a></li>
				</ul>
			</nav>
			<div>
				<a href="#menu" class="show">&#9776;</a>
				<a href="#" class="hide">&#10006;</a>
			</div>
</header>

<!--content-->
<main id="content">
<h1>BLOG EINTRÄGE</h1>
	<p>Hier besteht die Möglichkeit neue Einträge des Bloges zu erstellen.</p>
	<section id="formular">
		<!--Eingabe Formular-->
		<article id="EingabeForm">
			<h3>neuer Eintrag</h3>
			<form action="form.php" method="post">
				<p>Thema <br><input type="text" name="tbThema"></p>
				<p>Name <br><input type="text" name="tbName"></p>
				<textarea name="blog" rows="15" cols="60" ></textarea><br>
				<input type="reset" name="btdel">
				<input type="submit" name="commit">
			</form>
		</article>

		<!--Ausgabe Container-->
		<article id="loadContent">
			<h3>Vorschau</h3><br>
			<?php
				if(isset($_POST['commit'])){
					$thema = htmlspecialchars($_POST["tbThema"]);
					$name = htmlspecialchars($_POST["tbName"]);
					$kommentar = htmlspecialchars($_POST["blog"]);


					$inhalt= "<h3> ".$thema."</h3><br><p>".$kommentar."<br><br><small>".$name." ... ".date("d.m.Y")." ".date("H:i")."</small></p>";

					file_put_contents('blog.txt', $inhalt.";", FILE_APPEND);

					echo $inhalt;
					echo '</br><p>Eintrag gepeichert</p>';
					}
					?>
		</article>

</section>
</main>
</body>
</html>
