function envoyer(){
  document.getElementById("contactform").submit();
}

function verifEmail(){
var valide=false;
var email = document.getElementById("email").value;
var i=0;

while(i<email.length && email.charAt(i)!='@')
  i++;

if(email.charAt(i)=='@' && i<email.length){
  i++;
  while(i<email.length && email.charAt(i)!='.' && email.charAt(i)!='@')
    i++;

  if(email.charAt(i)=='.' && i<email.length){
    while(i<email.length)
      i++;
    if(i>=email.length)
      valide=true;
  }
  valide=true;
}

if(valide == false){
  document.getElementById("email").value = "Veuillez entrer une adresse valide";
  document.getElementById("send").style.backgroundColor = "red";
  document.getElementById("labelButton").innerHTML = " Adresse non valide";
}
else{
  document.getElementById("send").style.backgroundColor = "green";
  document.getElementById("labelButton").innerHTML = " Message envoyé avec succès";
  setTimeout(envoyer, 800);
  }
};
