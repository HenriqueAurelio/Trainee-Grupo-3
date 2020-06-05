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
        pagl1.className += "actpag activepagination";
        pag2.className = "page-item actpago";
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
        pagl2.className += "actpag activepagination";
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
        pag3.className += " active activepagination";
        pagl3.className += "actpag";
        pag2.className = "page-item actpags";
        pagl2.className = "page-link intenprpag";
        pag1.className = "page-item actpago";
        pagl1.className = "page-link intenprpag";
    }

}