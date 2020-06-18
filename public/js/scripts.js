//Inicio Pagina Produtos
function openNav(){
    var x = document.getElementById("list-group reslista");
    var y = document.getElementById("resquisa");
    var z = document.getElementById("formuPes");

    if (x.className === "list-group reslista"){
        x.className += " menujs";
        
    } else{
        x.className = "list-group reslista";
    }
    if (y.className === "form-inline my-0.3 my-lg-0 resquisa"){
        y.className += " menujs";
    }else{
        y.className = "form-inline my-0.3 my-lg-0 resquisa";
    
    }
    if (z.className === "form-control mr-sm-2 formuPes"){
        z.className += " menujspes";
    }else{
        z.className = "form-control mr-sm-2 formuPes";
    
    }
}
/* Pagination JavaScript
  Função que troca a cor do pagination que esta ativo
  essa função vai adicionar a classe active e actpag no que o usuario clicou e remover casso clique em outro */
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
        pagl1.className += " activepagination";
        pag2.className = "page-item actpags";
        pagl2.className = "page-link intenprpag";
        pag3.className = "page-item actpagt";
        pagl3.className = "page-link intenprpag";
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
        pagl2.className += " activepagination";
        pag1.className = "page-item actpago";
        pagl1.className = "page-link intenprpag";
        pag3.className = "page-item actpagt";
        pagl3.className = "page-link intenprpag";
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
        pagl3.className += " activepagination";
        pag2.className = "page-item actpags";
        pagl2.className = "page-link intenprpag";
        pag1.className = "page-item actpago";
        pagl1.className = "page-link intenprpag";
    }
}

//Fim pagina Produtos
function passview(){
    var eyespass = document.getElementById("senhaicon");

    if (eyespass.className === "fas fa-eye"){
        eyespass.className = "fas fa-eye-slash";
        document.getElementById("input-password").type = "password";
    } else {
        eyespass.className = "fas fa-eye";
        document.getElementById("input-password").type = "text";
    }
}

$(document).ready(function() {
    console.log($("#actual-page").val());
});