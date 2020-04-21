<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link href="css/contact.css" rel="stylesheet"/>
<link href="css/footer.css" rel="stylesheet"/>
<link href="css/header.css" rel="stylesheet"/>
<link href="bootstrap/bootstrap.css" rel="stylesheet"/>

<meta charset="UTF-8" />
<title>Contact</title>
</head>

<body>
	<?php
		include("templates/header.php");
	 ?>

	 <div class="container my-5">
	 <?php
	 	include("templates/contact.php");
	  ?>
	</div>

		<?php
		include("templates/footer.php");
 		?>

</body>
</html>
