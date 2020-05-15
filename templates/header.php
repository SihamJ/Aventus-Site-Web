<!--On Tablet, laptop and large screens-->
<?php include '/Applications/MAMP/htdocs/Prog Web/templates/traduction.php';

?>
<header class="row d-lg-flex d-none ">

<div class="col-lg-2" id="logo">
  <a href="/Prog Web/index.php"><img src="/Prog Web/assets/logo.png" alt="logo" class="img-fluid logo"/></a>
</div>

<nav class="col-lg-5">
<ul class="list-unstyled list-inline">
<li class="list-inline-item"><a href="/Prog Web/index.php"><?php echo translate('accueil');?></a></li>
<li class="list-inline-item"><a href="/Prog Web/index.php/#programme"><?php echo translate('events');?></a></li>
<li class="list-inline-item"><a href="/Prog Web/forum.php">Forum</a></li>
<li class="list-inline-item"><a href="/Prog Web/contact.php">Contact</a></li>
</ul>
</nav>

<div class=" col-lg-3 ">

    <div class="row">
<?php  if(!isset($_SESSION['id']) && !isset($_SESSION['pseudo'])){

?><div class="offset-lg-2 col-lg-8">
        <a href="/Prog Web/signin.php" class="btn-sm btn-light mr-2" style="text-decoration:none" type="button"><?php echo translate('signin');?></a>

        <a href="/Prog Web/signup.php" class="btn-sm btn-light" style="text-decoration:none" type="button"><?php echo translate('signup');?></a>

      </div>;
      <?php
    }
  else{
  ?> <div class=" offset-lg-10 col-lg-6 dropdown">

        <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <p style="color:rgb(240,240,240)" class="mb-1"> <?php echo $_SESSION['pseudo'];?>
          <svg width="40" height="40">
            <defs>
            <clipPath id="myCircle">
              <circle cx="20" cy="20" r="20" fill="#FFFFFF" />
            </clipPath>
            </defs>
            <image width="100%" height="100%" xlink:href="/Prog Web/assets/pdp1.jpg" clip-path="url(#myCircle)" />
          </svg>
          </p>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/Prog Web/membre/tableaudebord.php" style="line-height:40px"><?php echo translate('bord');?></a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/membre/form.php" style="line-height:40px"><?php echo translate('chat');?></a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/membre/moncompte.php" style="line-height:40px"><?php echo translate('compte');?></a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/membre/deconnexion.php" style="line-height:40px"><?php echo translate('dcnx');?></a>
        </div>
    </div>
    <?php
  }
  ?>
  </div>

</div>

</header>

<!--On Smartphone-->
<div class="row d-xs-flex  d-lg-none pt-3">
<?php if(!isset($_SESSION['pseudo']) && !isset($_SESSION['id'])){
  ?>


<div class=" col-xs-4 dropdown ">
  <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg class="bi bi-justify" width="3em" height="3em" viewBox="0 0 16 16" fill="rgb(10,100,190)" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/Prog Web/index.php">Accueil</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/Prog Web/membre/signin.php">Se connecter</a>
    <a class="dropdown-item" href="/Prog Web/membre/signup.php">Inscription</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/Prog Web/index.php/#programme">Programme</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/Prog Web/forum.php">Forum</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/Prog Web/contact.php">Contactez-Nous</a>
  </div>
</div>
<div class="col-xs-6">
  <img src="/Prog Web/assets/logo_bleu.png" height="70px"/>
</div>

<?php
}
else{
  ?> <div class=" col-xs-4 dropdown">

        <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <svg class="bi bi-justify" width="3em" height="2em" viewBox="0 0 16 16" fill="rgb(10,100,190)" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
      </svg>
          <p class="mb-1"> <?php echo $_SESSION['pseudo'];?>
          <svg width="40" height="40">
            <defs>
            <clipPath id="myCircle">
              <circle cx="20" cy="20" r="20" fill="#FFFFFF" />
            </clipPath>
            </defs>
            <image width="100%" height="100%" xlink:href="/Prog Web/assets/pdp1.jpg" clip-path="url(#myCircle)" />
          </svg>
          </p>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/Prog Web/membre/tableaudebord.php" style="line-height:40px">Tableau de Bord</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/form.php" style="line-height:40px">Discussion</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/membre/moncompte.php" style="line-height:40px">Mon Compte</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/Prog Web/membre/deconnexion.php" style="line-height:40px">Déconnexion</a>
        </div>
    </div>
    <?php
  }
  ?>
</div>
