<?php
$datosRecibidos = file_get_contents('php://input');
$datos = json_decode($datosRecibidos);
$datos->div1 = strtoupper($datos->div1);
$datos->div2 = strtoupper($datos->div2);
$datos->div3 = strtoupper($datos->div3);
$datos->div4 = strtoupper($datos->div4);

header("Content-type: application/json");
echo json_encode($datos);