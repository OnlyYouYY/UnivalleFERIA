<?php
require 'stats.php';
$MG = new Modelo_Grafico();
$consulta = $MG -> TraerDatosGrafico3();
echo json_encode($consulta);
?>