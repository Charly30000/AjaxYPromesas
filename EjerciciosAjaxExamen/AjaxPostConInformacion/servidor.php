<?php
//$textoMinuscula = file_get_contents('php://input');
$textoMinuscula = $_POST["q"];
$textoMayuscula = strtoupper($textoMinuscula);
$textoMayuscula = str_replace("MINUSCULA", "MAYUSCULA", $textoMayuscula);
echo $textoMayuscula;