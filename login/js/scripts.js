function passview(){
    var eyespass = document.getElementById("senhaicon");

    if (eyespass.className === "fas fa-eye"){
        eyespass.className = "fas fa-eye-slash";
    } else {
        eyespass.className = "fas fa-eye";
    }
}