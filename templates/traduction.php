<?php
$fr = array (
    'MainTitle' => 'Que </br> L\'Aventure </br> Commence!',
    'join' => 'Je m\'inscris!',
    'apropos' => '<b>Qui Sommes Nous ?</b>Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe
    de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe de présentation
    pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe de
    présentation pour l\'association.',
    'accueil' => 'Accueil',
    'events' => 'Evènements',
    'signin' => 'Se Connecter',
    'signup' => 'S\'inscrire',
    'prochainement' => 'Prochainement',
    'attente' => 'A Quoi Vous Attendre',
    'attente-text' => 'Découvrer la magie de Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.',
    'search' => 'Recherche',
    'bienvenue' => 'Bienvenue',
    'sujet' => 'Sujet',
    'msg' => 'Votre Message',
    'nom' => 'Nom',
    'envoyer' => 'Envoyer',
    'contact-us' => 'Contactez-Nous',
    'contact-text' => 'Nous reviendrons vers vous dans la journée.',
    'bord' => 'Tableau de Bord',
    'compte' => 'Mon Compte',
    'dcnx' => 'Déconnexion',
    'chat' => 'Discuter avec les membres'
);
$en = array( 'MainTitle' => 'Let the </br> Adventure</br> Begin!',
'join' => 'Join Us!',
'apropos' => '<Who are Aventus ?</b>We are a Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible DOMs,
     broken CSS support, and abandoned browsers.
     We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C,
     WASP, and the major browser creators.
     The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn
      to use the time-honored techniques in new and invigorating fashion. Become one with the web. Littering a dark and dreary road
      lay the past relics of browser-specific tags, incompatible DOMs, broken CSS support, and abandoned browsers.
     We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C, WASP,
     and the major browser creators.',
     'accueil' => 'Home',
     'events' => 'Events',
     'signin' => 'Sign In',
     'signup' => 'Sign Up',
     'prochainement' => 'Coming Soon',
     'attente' => 'And much more ! ..',
     'attente-text' => 'We are a Littering a dark and dreary road lay the past relics of browser-specific tags,
     incompatible DOMs, broken CSS support, and abandoned browsers.',
     'search' => 'search',
     'bienvenue' => 'Welcome',
     'sujet' => 'Subject',
     'msg' => 'Your Message',
     'nom' => 'Name',
     'envoyer' => 'Send',
     'contact-us' => 'Contact Us',
     'contact-text' => 'You will hear from us shortly.',
     'bord' => 'Bord',
     'compte' => 'My Account',
     'dcnx' => 'Sign Out',
     'chat' => 'Chat with members'
);

function translate($cle){
  if (isset($_GET['langue'])){
    if($_GET['langue']=='en'){
      global $en;
      return $en[$cle];
    }
    }
    global $fr;
  return $fr[$cle];
  }

 ?>
