<?php

namespace pruebas;

class pruebas {

    public $variable = "sd";
    static $estatica = "<br> Variable estatica";

    public function __construct() {
        echo "\x07";
        self::estatica();
        include "Curl.php";
        $curl = new \Curl\Curl();
        $recibido =$curl->curl_download("http://www.google.com");
        $resultado=$this->separar($recibido,"<title>","</title>");
        echo $resultado;
    }

    static public function estatica() {
        echo "\n estatico" . self::$estatica;
    }
    function separar($parametro,$param1,$param2){
        $separado_title = split($param1, $parametro);
        $separado_title = split($param2, $separado_title[1]);
        return $separado_title[0];
    }

}
