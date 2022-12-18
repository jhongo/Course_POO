<?php
 

  class aspirante
  {

    // Definimos las propiedades de la clase
    public $name;
    public $email;
    private $role;

    // Definimos los metodos o acciones de la clase
    public function getDataAspirante( &$addNombre, $addEmail)
    {
      $this->name = $addNombre;
      $this->email = $addEmail;

      echo "Welcome candidate ".$this->name." with email ". $this->email;
    }
    
    public function addRole($roleAsp)
    {
      $this->role=$roleAsp;
      echo "<br/>"."Hello ".$this->name." assing ". $this->role;
    }

    
  }

  class identificador extends aspirante{

    public $identificador;

    public function printIdCandidate()
    {
      $this->identificador="123123";
      echo "<br/>".$this->name." tiene como identificador la serie ".$this->identificador;
    }

  }



  if ($_POST) {
    
    $nameCandidate = $_POST['txtName'];
    $emailCandidate = $_POST['txtEmail'];
    $roleCandidate = $_POST['txtCargo'];

    if ($nameCandidate == "" && $emailCandidate =="" && $roleCandidate=="" ) {

      echo "Datos no ingresados";
    }else{

      $DataCandidate = new identificador();
      $DataCandidate->getDataAspirante($nameCandidate,$emailCandidate);
      $DataCandidate->addRole($roleCandidate);
      $DataCandidate->identificador="123456";
      $DataCandidate->printIdCandidate();
    }
  
  
  }

  



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herencias</title>
</head>
<body>

<div class="container-main" style="background:#219ebc; width: 300px; height: 200px; display: flex;  " >

<form action="index.php" method="post" style="margin:20px ;">
    
    <input type="text" name="txtName" placeholder="Nombre" style="margin-top:5px" >
    <br/>
    <input type="text" name="txtEmail" placeholder="Email" style="margin-top:5px">
    <br/>
    <input type="cargo" name="txtCargo" placeholder="Rol" style="margin-top:5px">
    <br/>
    <input type="submit" value="Enviar" style="  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;" >
    
  </form>

</div>



</body>
</html>