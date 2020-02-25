<?php
$data = file_get_contents("php://input");
$data2 = json_decode($data);
$data2->objeto = $data2->objeto . "aqui tamos";
$data2 = json_encode($data2);
header("Content-type: application/json");
echo $data2;