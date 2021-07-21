/*-------------------NOMBRE-ARCHIVO-----------------*/
let inputfile = document.querySelector('#inputfile');
inputfile.addEventListener('change', function(){
    let text = this.value;
    text = text.replace(/^.*\\/,"");
    document.getElementById("filetext").value = text;
});
/*---------------------PROGRESSBAR-----------------*/
let form = document.querySelector('#formsubir');
form.addEventListener('submit',function(){
    let inputfile = document.querySelector('#inputfile').files[0];
    let progressBar = document.querySelector('#progressBar');

    let formdata = new FormData();
    formdata.append("inputfile", inputfile);
    let ajax = new XMLHttpRequest;
    ajax.upload.addEventListener("progress", function(e){
        let porcentaje = (e.loaded / e.total) * 100;
        progressBar.value = Math.round(porcentaje);
    });

    ajax.open("POST", "subir.php");
    ajax.send(formdata);
});