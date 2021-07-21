<?php
require 'stats.php';
$MG = new Modelo_Grafico();
$consulta = $MG -> TraerDatosGrafico();
echo json_encode($consulta);
?>