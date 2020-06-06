function actpago(){
    var pag1 = document.getElementById("actpago");
    var pag2 = document.getElementById("actpags");
    var pag3 = document.getElementById("actpagt");
    var pagl1 = document.getElementById("actpagol");
    var pagl2 = document.getElementById("actpagsl");
    var pagl3 = document.getElementById("actpagtl");
    if(pag1.className === "page-item actpago"){
        pag1.className += " active";
        pag2.className = "page-item actpags";
        pagl2.className = "page-link pagination-crud-buttons";
        pag3.className = "page-item actpagt";
        pagl3.className = "page-link pagination-crud-buttons";
    }
}
function actpags(){
    var pag1 = document.getElementById("actpago");
    var pag2 = document.getElementById("actpags");
    var pag3 = document.getElementById("actpagt");
    var pagl1 = document.getElementById("actpagol");
    var pagl2 = document.getElementById("actpagsl");
    var pagl3 = document.getElementById("actpagtl");
    if(pag2.className === "page-item actpags"){
        pag2.className += " active";
        pag1.className = "page-item actpago";
        pagl1.className = "page-link pagination-crud-buttons";
        pag3.className = "page-item actpagt";
        pagl3.className = "page-link pagination-crud-buttons";
    }
}
function actpagt(){
    var pag1 = document.getElementById("actpago");
    var pag2 = document.getElementById("actpags");
    var pag3 = document.getElementById("actpagt");
    var pagl1 = document.getElementById("actpagol");
    var pagl2 = document.getElementById("actpagsl");
    var pagl3 = document.getElementById("actpagtl");
    if(pag3.className === "page-item actpagt"){
        pag3.className += " active";
        pag2.className = "page-item actpags";
        pagl2.className = "page-link pagination-crud-buttons";
        pag1.className = "page-item actpago";
        pagl1.className = "page-link pagination-crud-buttons";
    }
}