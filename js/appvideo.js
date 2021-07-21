
var verificador_id = true;

for(i=1;verificador_id;i++){
    const open = document.getElementById('open'+ i);
    const cerrar = document.getElementById('cerrar'+ i);
    const video = document.getElementById('video'+ i);
    const modal_container = document.getElementById('modal-container'+i);
    const src = document.getElementById('src'+ i).src;
    if(open && cerrar && video && modal_container && src){
        open.addEventListener('click',()=>{
            modal_container.classList.add('show');
        });
        cerrar.addEventListener('click',()=>{
            modal_container.classList.remove('show');
            video.currentTime = 0;
            video.pause();
        });
    }else{
        verificador_id = false;
    }
}
