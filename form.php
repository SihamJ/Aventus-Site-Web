<html>
<head>
<link href="css/contact.css" rel="stylesheet"/>
<link href="css/footer.css" rel="stylesheet"/>
<link href="css/header.css" rel="stylesheet"/>
<meta charset="UTF-8" />
<title>Form</title>
</head>

<body>
<?php
	include 'templates/header.php';
?>


<p><?php echo 'Bonjour '. htmlspecialchars($_POST['Nom']) . ' ' . htmlspecialchars($_POST['Prenom']) ?></p>


<?php
	include 'templates/footer.php';
?>
<script src="js/contact.js"></script>
</body>
</html>
