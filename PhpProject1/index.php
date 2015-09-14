<?php

include 'controlador.php';
$pruebas = new \pruebas\pruebas();
echo "test";

$recibido = curl_download("http://dolar.wilkinsonpc.com.co/"); 
$separado_title = split("<title>", $recibido);
$separado_title=split("</title>", $separado_title[1]);
print "$separado_title[0] <br />";

//echo curl_download("http://www.google.com");




