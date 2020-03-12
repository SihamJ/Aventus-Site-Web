<html>
<head>
<link href="css/contact.css" rel="stylesheet"/>
<link href="css/footer.css" rel="stylesheet"/>
<link href="css/header.css" rel="stylesheet"/>
<meta charset="UTF-8" />
<title>Contact</title>
</head>

<body>
<?php
	include 'templates/header.php';
?>

<div class="container">

<h1>N'hésitez pas à nous contacter pour plus d'informations</h1>

<section class="formulaire">

<form id="myform" class="form">
<input type="text" class="element 1" placeholder="Nom"/>
<input type="text" class="element 2" placeholder="Prénom"/>
<input name="email" type="text" id="email" class="element 3" placeholder="E-mail (Requis)"/>
<input name="tel" type="tel" id="tel" class="element 4" placeholder="Téléphone"/>
<textarea placeholder="Votre message" class="element 5"></textarea>
<input type="submit" value="Envoyer" name="submit" id="send" class="element 6"/>
</from>



</section>
</div>

<?php
	include 'templates/footer.php';
?>
<script src="js/contact.js"></script>
</body>
</html> 
