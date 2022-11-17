<?php


    $txtNombre="";
    $rdgLenguaje="";
    if ($_POST) {
        
        $txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "" ;
        $rdgLenguaje=(isset($_POST['txtNombre'])) ? $_POST['lenguaje'] : "" ;
        
        
    }
 
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){  ?>
    <strong>Hola </strong>:<?php echo $txtNombre ?>
    <br/>
    <strong>Tu lenguaje favorito es </strong>:<?php echo $rdgLenguaje ?>
    <?php } ?>

    <form action="index.php" method="post">

        <label for="">Nombre</label>
        <br/>
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" placeholder="Ingresar dato" id=""> <br/>
        <label for="">Lenguaje de preferencia</label> 
        <br/> PHP: <input type="radio" <?php echo ($rdgLenguaje=="php" ?"checked":"") ?> name="lenguaje" value="php" id=""> <br/>
        <br/> HTML: <input type="radio" <?php echo ($rdgLenguaje=="html" ?"checked":"") ?> name="lenguaje" value="html" id=""><br/>
        <br/> DART: <input type="radio" <?php echo ($rdgLenguaje=="dart" ?"checked":"") ?> name="lenguaje" value="dart" id=""><br/>




        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>