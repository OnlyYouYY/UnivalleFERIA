function confirmacion(event){
    if (confirm("¿Estas seguro que desea eliminar este registro?")){
        return true;
    } else{
        event.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".table__item__link2");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmacion);
}