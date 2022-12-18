<?php

$json = '[
    {
        "nombre": "John",
        "apellido" : "Gomez"
    },
    {
        "nombre": "Gabriela",
        "apellido" : "Landi"
    },
    {
        "nombre": "Josue",
        "apellido" : "Gomez"
    }
]';


$res = json_decode($json);

 foreach ($res as $people) {
    echo ($people->nombre). " ". ($people->apellido) . "<br/>" ;
}
 
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
 </head>
 <body>
    <form action="" method="post">
    

        <input type="submit" value="Send">
    </form>
    
 </body>
 </html>