<?php

include('cors.php');
include('conexion.php');

 $modelo = new Conexion();
 $db = $modelo->getConexion();
 $sql = 'DELETE FROM carrito';
 $query = $db->prepare($sql);
 $query->execute();

 echo "vacio";


?>