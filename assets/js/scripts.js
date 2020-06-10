function passview(){
    var eyespass = document.getElementById("senhaicon");
    var revpass = document.getElementById("revpass");
    if (eyespass.className === "fas fa-eye"){
        eyespass.className = "fas fa-eye-slash";
    } else {
        eyespass.className = "fas fa-eye";
    }
    if(revpass.type === "password"){
        revpass.type = "text";
    }else {
        revpass.type = "password";
    }
    
}
