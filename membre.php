<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link href="css/footer.css" rel="stylesheet"/>
<link href="css/header.css" rel="stylesheet"/>
<link href="bootstrap/bootstrap.css" rel="stylesheet"/>

<meta charset="UTF-8" />
<title>Membre</title>
</head>

<body>

<?php
	include 'templates/header.php';
?>


<section class="container" >


<div class="row mb-5">
  <div class="col-md-7">
    <h2 class="h1-responsive font-weight-bold my-5">Inscription</h2>
    <form id="inscription" name="inscription-form" action="inscription.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="md-form">
            <input type="text" id="name"  class="form-control"/>
            <label for="name">Nom</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="md-form">
            <input type="text" id="prenom" class="form-control"/>
            <label for="prenom">Prenom</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="md-form">
            <input type="text" id="pseudo" class="form-control"/>
            <label for="pseudo">Identifiant</label>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-6">
          <div class="md-form">
            <input type="email"  id="email" class="form-control"/>
            <label for="email" class="">Email</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="md-form">
            <input type="password" id="pass" class="form-control"/>
            <label for="pass" class="">Mot de passe</label>
          </div>
        </div>
      </div>
    </form>
    <div class="row">
    <div class="col-md-6 text-center text-md-left">
        <a class="btn btn-primary" id="send" onclick="document.getElementById('inscription-form').submit()">Inscription</a>
    </div>
    </div>
  </div>

  </div>

</section>


<?php
	include 'templates/footer.php';
?>

</body>
</html>
