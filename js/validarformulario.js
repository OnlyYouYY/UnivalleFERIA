function validarvideo() {
    let archivo = document.getElementById('inputfile').value,
        extension = archivo.substring(archivo.lastIndexOf('.'), archivo.length);
    if (document.getElementById('inputfile').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
}
function validarimagen() {
    let archivo = document.getElementById('inputfile__img').value,
        extension = archivo.substring(archivo.lastIndexOf('.'), archivo.length);
    if (document.getElementById('inputfile__img').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
}
function validarpdf() {
    let archivo = document.getElementById('inputfile__pdf').value,
        extension = archivo.substring(archivo.lastIndexOf('.'), archivo.length);
    if (document.getElementById('inputfile__pdf').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
}