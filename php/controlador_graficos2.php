<?php
require 'stats.php';
$MG = new Modelo_Grafico();
$consulta = $MG -> TraerDatosGrafico2();
echo json_encode($consulta);
?>