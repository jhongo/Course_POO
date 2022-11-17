<?php

  $server="localhost";
  $database="alumnos";
  $user="root";
  $password="Cxu2013";

  // TRY-CATCH que nos permite retener errores

  try {
    // Conexion a la base de datos
    $connection=new PDO("mysql:host=$server;dbname=alumnos",$user,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Sentencia a ejecutar
    $sql="SELECT * FROM `perfiles`";
    $sentencia=$connection->prepare($sql);
    $sentencia->execute();
    $res=$sentencia->fetchAll();


    foreach ($res as $alumno) {
      
      print_r($alumno['id']." ".$alumno['nombre']."<br/>");
      
    }


  } catch (PDOException $error) {
  
    echo "Error ".$error;
  
  }


?>
