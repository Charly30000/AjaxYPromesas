<?php
$textoMinuscula = $_GET["q"];
$textoMayuscula = strtoupper($textoMinuscula);
$textoMayuscula = str_replace("MINUSCULA", "MAYUSCULA", $textoMayuscula);
echo $textoMayuscula;