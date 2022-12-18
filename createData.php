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
    
    if ($_POST) {
   
      $namePost = $_POST['txtName'];
      $emailPost = $_POST['txtEmail'];
      $coursePost = $_POST['txtCourse'];
  
      $sql="INSERT INTO perfiles(id,nombre,email,course) VALUES(NULL,'$namePost','$emailPost','$coursePost')";
      $connection->exec($sql);
      echo "Alumno registrado";
    }



    echo "Successful Connection";



  } catch (PDOException $error) {
  
    echo "Error ".$error;
  
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>CONEXION SQL</title>
</head>
<body>

  <div class="w-1/3 h-1/3 bg-[#a8dadc] rounded-2xl ">

    <form action="index.php" method="post">

      <label for="">Nombre</label>
      <br/>
      <input type="text" name="txtName">
      <br/>
      <label for="">Email</label>
      <br/>
      <input type="text" name="txtEmail">
      <br/>
      <label for="">Course</label>
      <br/>
      <input type="text" name="txtCourse">
      
      <br/>
      <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Enviar 
      </button>
    
    </form>

  </div>




  
</body>
</html>