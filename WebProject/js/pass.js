function confirm(){
    if(document.getElementById("pass").value!=document.getElementById("cnfrm").value){
        document.getElementById("error").innerHTML="Password doesn't match!";
    }
   

}