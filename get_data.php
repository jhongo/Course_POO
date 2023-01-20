<?php

$server = "localhost";
$database = "jobs";
$user = "root";
$password = "Cxu2013";

//? Validar la conexion de la BD

try {

    $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //* Sentencia SQL SELECCIONAR DESDE LA TABLA EMPLEADOS

    $sql = "SELECT * FROM `employees`";
    $sentencia = $connection->prepare($sql);
    $sentencia->execute();
    $res = $sentencia->fetchAll();

    // foreach ($res as $employee) {
    //     print_r($employee['first_name'] . " " . $employee['position'] . "<br/>");

    // }

    // echo "Successful Connection";
} catch (PDOException $err) {

    echo "Error " . $err;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEES</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="w-full h-screen bg-emerald-800">

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID 
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombre 
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Apellido
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Puesto
                        </th>
                        <th scope="col" class="py-3 px-6">
                            En Cargo
                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach( $res as $emple) {?>
                <tr class="bg-white dark:bg-gray-800">
                    <th  scope="row" class="py-4 px-6 font-medium dark:text-white">
                        <?php
                        echo ($emple['employee_id']);
                        ?>
                    </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php
                        echo ($emple['first_name']);
                        ?>    
                    </th>
                    <td class="py-4 px-6">
                        <?php
                        echo ($emple['last_name']);
                        ?>
                    </td>
                    <td class="py-4 px-6">
                    <?php
                        echo($emple['position'])
                    ?>

                    </td>
                    <td class="py-4 px-6">
                        <?php
                        echo($emple['state'])
                        ?>    
                    </td>
                </tr>
                
                <?php } ?>
                
            </tbody>
            </table>
    </div>


    </div>


</body>

</html>