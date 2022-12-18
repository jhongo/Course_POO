<?php
 
    
    if ($_POST) {

    print_r($_POST);
    print_r($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        
    }
 
 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
</head>

<body>

    <form action="inputs.php" enctype="multipart/form-data" method="post">

        <label for="">Picture</label>
        <input type="file" name="file" id="">
        <br/>
        <input type="submit" name="send" value="Send information">

    </form>

</body>

</html>