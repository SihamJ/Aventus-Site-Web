myform.onsubmit= function verifEmail(){
valide = false;
var email = document.getElementById("email").value;
	for(var j=0;j<email.length;j++){
		if (email.charAt(j)=='@'){
			if(j<email.length){
			for(var k=j;k<email.length;k++){
				if(email.charAt(k)=='.' && k<email.length){
					valide = true;
				}
			}
		}
		}
	}
if(valide==false){
document.getElementById("email").value="";
document.getElementById("email").placeholder="Veuillez entrer une adresse correcte";
document.getElementById("email").style.backgroundColor='rgb(230,50,50)';
}
else{
document.getElementById("send").style.backgroundColor='rgb(50,230,50)';
document.getElementById("send").value="Message envoyé";
}
return valide;
};



