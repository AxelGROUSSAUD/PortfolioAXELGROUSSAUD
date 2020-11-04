<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="CSS/Contact.css" />
<title>Contact</title>
</head>
<body>
<div>
<?php include("menu.php");?>
</div>
<div id="contact">
e-mail : groussaudaxelpro@gmail.com <br>
LinkedIn : Axel GROUSSAUD
</div>

<form action="Contact.php" method="post">
<br><br>Prénom : <input type="text" name="prenom"> Nom : <input type="text" name="nom"> 
email : <input type="text" name="email"><br><br>
Objet : <input type="text" name="objet"><br><br>
Message : <textarea></textarea><br><br>
<input type="submit" name="envoi" value="Envoyer">
</form>
<div>
<a href="Mentions_legales.php"> Mentions légales</a>
</div>
</body>
</html>