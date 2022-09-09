<?php 
$weather = array("Bogota" => "Frio", "Monteria" => "Calido", "Medellin" => "Templado" );
$ubication = array ("Guajira"=> "Norte", "Leticia"=>"Sur", "Santander"=>"Este", 
"Antioquia"=>"Oeste");
$tourism = array("Santa Marta"=>"Mar", "Villavicencio"=>"Llano", "Rioacha"=>"Desierto", 
"Quindio"=>"Valle" );

switch ($eleccionClima = "Templado")
  {
    case "Frio":
   echo $clima = array_search($eleccionClima ,$weather);
    break;
    case "Calido":
    echo $clima = array_search($eleccionClima ,$weather);
    break;
    case "Templado":
    echo $clima = array_search($eleccionClima ,$weather);
    break;
  };

switch ($eleccionTurismo = "Mar")
  {
    case "Mar":
   echo $turismo = array_search($eleccionTurismo ,$tourism);
    break;
    case "Llano":
    echo $turismo = array_search($eleccionTurismo ,$tourism);
    break;
    case "Desierto":
    echo $turismo = array_search($eleccionTurismo ,$tourism);
    break;
    case "Valle":
    echo $turismo = array_search($eleccionTurismo ,$tourism);
    break;
  };

switch ($eleccionUbicacion = "Norte")
  {
    case "Norte":
   echo $ubicacion =     array_search($eleccionUbicacion,$ubication);
    break;
    case "Sur":
   echo $ubicacion =     array_search($eleccionUbicacion,$ubication);
    break;
    case "Este":
   echo $ubicacion =     array_search($eleccionUbicacion,$ubication);
    break;
    case "Oeste":
   echo $ubicacion =     array_search($eleccionUbicacion,$ubication);
    break;
   
  };





?>