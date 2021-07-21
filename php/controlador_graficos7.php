<?php
require 'stats.php';
$MG = new Modelo_Grafico();
$consulta = $MG -> TraerDatosGrafico7();
echo json_encode($consulta);
?>