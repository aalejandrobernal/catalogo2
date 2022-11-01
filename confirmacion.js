function confirmacion(e){
    if (confirm("Esta seguro de elimiar este registro?")) {
     return true;
    } else{
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".item_tabla_link");

for (var i = 0 ; i < linkDelete.length ; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}