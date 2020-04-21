<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<link href="css/footer.css" rel="stylesheet"/>
<link href="css/header.css" rel="stylesheet"/>
<link href="bootstrap/bootstrap.css" rel="stylesheer"/>
<meta charset="UTF-8" />
<title>Membre</title>
</head>

<body>
<?php
	include 'templates/header.php';
?>
<?php
if($_POST['password']=="kangaroo"){
  ?>
<h1> Bienvenue <?php echo $_POST['pseudo']?> </h1>
<?php
$fichier = fopen('compteur.txt', 'r+');
$compte = fgets($fichier);
$compte++;
fseek($fichier,0);
fputs($fichier,$compte);
fclose($fichier);
echo 'cette page a été vue ' . $compte . ' fois' ;
} else {
  echo "Incorrect password";
}
?>

<?php
	include 'templates/footer.php';
?>
</body>
</html>
