<?php
require_once('cors.php');
require_once('conexion.php');
$data = json_decode(file_get_contents("php://input"), true);
$nombre = $data['nombre'];
$precio = $data['precio'];
$idusuario = $data['usuario'];
$modelo = new Conexion();
$db = $modelo->getConexion();

$sql = "INSERT INTO carrito(nombre, precio, idusuario) 
        VALUES(:nombre, :precio,:idusuario)";

     $query = $db->prepare($sql);
     $query->bindParam(':nombre', $nombre);
     $query->bindParam(':precio', $precio);
     $query->bindParam(':idusuario', $idusuario);

  $query->execute();
  echo "registrado";
?>