<html>
<head>
<meta charset="UTF-8" />
<title>Membre</title>
</head>

<body>
<?php
	include 'templates/header.php';
?>

<section class="membre">
<section class="creer_compte">

<form>
<caption>Créer votre compte<caption>
<input type="text" placeholder="Nom"/>
<input type="text" placeholder="Prénom"/>
<input type="email" placeholder="E-mail"/>
<input type="text" for="pseudo" placeholder="Choisir un Pseudo"/>
<input type="password" placeholder="Choisir un mot de passe"/>
<button type="send">Créer mon compte</button>
</form>
</section>
<section class="se_connecter">

<form class="se_connecter">
<caption>Se Connecter<caption>
<input type="text" for="pseudo" placeholder="Pseudo"/>
<input type="password" placeholder="Mot de passe"/>
<button type="send">Me Connecter</button>
</form>
</section>
</section>



<?php
	include 'templates/footer.php';
?>
</body>
</html> 
