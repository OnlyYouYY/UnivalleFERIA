$(document).ready(function(){
    maxFileSize = 314572800; //300Mb
    $("#fileUpload").change(function(){
        fileSize = this.files[0].size;
        if(fileSize > maxFileSize){
            this.setCustomValidity("Archivo maximo soportado: 300Mb");
            this.reportValidity();
        }else{
            this.setCustomValidity("");
        }
    });
});