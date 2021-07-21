
//Boton Menu

var btnMenu = document.getElementById('btn_menu');
var nav = document.getElementById('nav');

btnMenu.addEventListener('click',function(){
    nav.classList.toggle('mostrar');
})

//Buscador de Contenido

//Ejercutar Funcion
document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click",ocultar_buscador);

//Variables declaradas
bars_search = document.getElementById("ctn-bars-search");
cover_ctn_search= document.getElementById("cover-ctn-search");
inputSearch = document.getElementById("inputSearch");
box_search= document.getElementById("box-search");

//Funcion Mostrar
function mostrar_buscador(){
    bars_search.style.top= "85px";
    cover_ctn_search.style.display="block";
    inputSearch.focus();

    if(inputSearch.value === ""){
        box_search.style.display = "none";
    }
}
function ocultar_buscador(){
    bars_search.style.top="-100px";
    cover_ctn_search.style.display="none";
    inputSearch.value="";
    box_search.style.display = "none";
}
//Creando Filtrado de Busqueda

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo Elementos a Filtrar mediante li
    for(i=0; i<li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
            box_search.style.display = "block";

            if(inputSearch.value === ""){
                box_search.style.display = "none";
            }
        }
        else{
            li[i].style.display = "none";
        }
    }
}