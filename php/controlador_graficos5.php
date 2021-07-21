<?php
require 'stats.php';
$MG = new Modelo_Grafico();
$consulta = $MG -> TraerDatosGrafico5();
echo json_encode($consulta);
?>