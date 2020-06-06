function activeBtn() {
	
	var x = document.getElementsByClassName("activation-crud-buttons");
	if (x.className === "page-item activation-crud-buttons"){
		x.className += "active";
	} else{
		x.className = "page-item activation-crud-buttons";
	}
}