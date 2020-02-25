<?php
$datos = file_get_contents('php://input');
$datosRecibidos = json_decode($datos);
$datosRecibidos->div1 = strtoupper($datosRecibidos->div1);
$datosRecibidos->div2 = strtoupper($datosRecibidos->div2);
$datosRecibidos->div3 = strtoupper($datosRecibidos->div3);

header("Content-type: application/json");
echo json_encode($datosRecibidos);