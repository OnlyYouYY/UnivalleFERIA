CargarDatosGrafico();
CargarDatosGrafico2();
CargarDatosGrafico3();
CargarDatosGrafico4();
CargarDatosGrafico5();
CargarDatosGrafico6();
CargarDatosGrafico7();
CargarDatosGrafico8();
function CrearGrafico(proyecto,votos,colores,tipo,encabezado,id){
    var ctx = document.getElementById(id);
    var id = new Chart(ctx, {
        type: tipo,
        data: {
            labels: proyecto,
            datasets: [{
                label: encabezado,
                data: votos,
                backgroundColor:colores,
                borderColor:colores,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
function generarNumero(numero){
	return (Math.random()*numero).toFixed(0);
    }

    function colorRGB(){
        var coolor = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
        return "rgb" + coolor;
    }
function CargarDatosGrafico() {
    $.ajax({
        url: '../php/controlador_graficos.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart');
            
            
        }
    })
}
function CargarDatosGrafico2() {
    $.ajax({
        url: '../php/controlador_graficos2.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart2');
            
            
        }
    })
}
function CargarDatosGrafico3() {
    $.ajax({
        url: '../php/controlador_graficos3.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart3');
            
            
        }
    })
}
function CargarDatosGrafico4() {
    $.ajax({
        url: '../php/controlador_graficos4.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart4');
            
        }
    })
}
function CargarDatosGrafico5() {
    $.ajax({
        url: '../php/controlador_graficos5.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart5');
            
        }
    })
}
function CargarDatosGrafico6() {
    $.ajax({
        url: '../php/controlador_graficos6.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart6');
            
        }
    })
}
function CargarDatosGrafico7() {
    $.ajax({
        url: '../php/controlador_graficos7.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart7');
            
        }
    })
}
function CargarDatosGrafico8() {
    $.ajax({
        url: '../php/controlador_graficos8.php',
        type: 'POST'
    }).done(function(resp) {
        if(resp.length>0){
            var proyecto = [];
            var votos = [];
            var colores = [];
            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                proyecto.push(data[i][0]);
                votos.push(data[i][3]);
                colores.push(colorRGB());
            }
            CrearGrafico(proyecto,votos,colores,'bar','Total Puntos','myChart8');
            
        }
    })
}