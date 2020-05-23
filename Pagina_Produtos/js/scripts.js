function openNav(){
    var x = document.getElementById("list-group reslista");
    var y = document.getElementById("resquisa");

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
    


}