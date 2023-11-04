<?php

require_once __DIR__ . "/../services/Mysql.php";

$urlDolar = "https://api-dolar-argentina.herokuapp.com/api/dolaroficial";
$urlEuro = "https://api-dolar-argentina.herokuapp.com/api/euro/nacion";
$urlReal = "https://api-dolar-argentina.herokuapp.com/api/real/nacion";

$urls = [
    [
        "id" => 1,
        "url" => $urlDolar
    ],
    [
        "id" => 2,
        "url" => $urlEuro
    ],
    [
        "id" => 3,
        "url" => $urlReal
    ],
];

function updateCotizacionBilletes ($id , $cotizacion) {
    $cotizacion = json_decode($cotizacion);
    $mysql = new Mysql();
    $mysqli = $mysql->connect();
    
    $sql = "UPDATE cotizaciones_billetes SET compra = ? , venta = ? , fecha_realizado = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iisi",
    $cotizacion->compra,
    $cotizacion->venta,
    $cotizacion->fecha,
    $id
    );
    $stmt->execute();
    $stmt->close();
}

foreach ($urls as $url) {
    $curl = curl_init();
 
    curl_setopt($curl, CURLOPT_URL, $url["url"]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
     
    $moneda = curl_exec($curl);
    updateCotizacionBilletes($url["id"],$moneda);
    
    curl_close($curl);       
}