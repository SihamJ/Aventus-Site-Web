<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link href="/Prog Web/css/index.css" rel="stylesheet"/>
<link href="/Prog Web/css/footer.css" rel="stylesheet"/>
<link href="/Prog Web/css/header.css" rel="stylesheet"/>
<link href="/Prog Web/bootstrap/bootstrap.css" rel="stylesheet"/>
<title>Accueil</title>
</head>

<body>
	<div class="container-fluid">

    <?php
	    include 'templates/header.php';
    ?>

<section class="row banner py-5">
	<div class="col-md-6">
			<div class="row">
			<h1 class="offset-md-3 col-md-8 py-5" style="font-size:5.5em;color:rgb(10,0,60);">Let The</br> Adventure</br> Begin</h1>
			<a class="offset-md-4 col-md-3 btn btn-primary btn-lg py-2" href="/Prog Web/membre.php" role="buttons">
			TIRE !
			</a>
		</div>
	</div>
<div class="col-md-6 ">
		<img src="/Prog Web/assets/bg.png" alt="" class="img-fluid"/>
	</div>
</section>

<div id="programme">
<?php
	include "templates/programmes.php";
?>
</div>


<article class="row  bg-light text-center py-5">
	<div class="offset-md-3 col-md-6">
		<div class="row">
	 <div class="col-md-12 h1" ><h1>AVENTUS</h1></div>
	 <article class="col-md-12"><p><b style="font-size:1.2em">Qui Sommes Nous ?</b>  We are a Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible DOMs,
				broken CSS support, and abandoned browsers.
				We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C,
				WASP, and the major browser creators.
				The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn
				 to use the time-honored techniques in new and invigorating fashion. Become one with the web. Littering a dark and dreary road
				 lay the past relics of browser-specific tags, incompatible DOMs, broken CSS support, and abandoned browsers.
				We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C, WASP,
				and the major browser creators.
			</p>
    </article>
	</div>
	</div>
</article>
<article class="row text-center py-5">
	<section class="offset-1 col-md-6 ">
		<iframe width="670" height="415" src="https://www.youtube.com/embed/TOuF7ZbcCUs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</section>
	<div class="col-md-5 py-5 ">
		<div class="row">
	 <div class="col-md-12 h1 "><h1>A Quoi Vous Attendre</h1></div>
	 <article class="offset-md-1 col-md-10 "><p><b style="font-size:1.2em">Découvrer </b>  We are a Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible DOMs,
				broken CSS support, and abandoned browsers.

			</p>
    </article>
	</div>
	</div>

</article>
</div>

<?php
	include 'templates/footer.php';
?>

</body>
</html>
