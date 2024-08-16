<?php
$titulo = "Error";
include("mostrar_foto.php");

$idFoto = "";

if (isset($_GET["idFoto"])) {  
    $idFoto = $_GET["idFoto"]; //Obtenemos el id de la foto que viene vía GET desde mostrar_photo.php
}

if ($idFoto != "") {
    $fotoDetalle = obtenerDataDeFotos($idFoto);
    $titulo = $fotoDetalle["titulo"] . " (" . $fotoDetalle["año"] . ")";
    include("header.php");
    generarDetalle($idFoto);
} else {
    include("header.php");
    echo "Ups, llegaste a esta página sin haber establecido un id para la foto.";
}

include("footer.php");