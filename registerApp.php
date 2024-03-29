<?php

//? CREDENTIALS DATA CONNECTION
$server = 'localhost';
$database = 'jobs';
$user = 'root';
$password = 'Cxu2013';

//? ENV OF THE POST 
$name_post_txt = "";
$lastname_post_txt = "";
$position_post_cmb = "";
$building_post_rdg = "";
$floor_one_post_chk = "";
$floor_two_post_chk = "";
$floor_three_post_chk = "";
$state_post_cmb = "";




//* EXCEPTIONS 
try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //* GET DATA OF THE FORM 
    if ($_POST) {

        $name_post_txt = (isset($_POST['name_post_txt'])) ? $_POST['name_post_txt'] : "s/n";
        $lastname_post_txt = (isset($_POST['lastname_post_txt'])) ? $_POST['lastname_post_txt'] : "s/n";
        $position_post_cmb = (isset($_POST['position_post_cmb'])) ? $_POST['position_post_cmb'] : "" ;
        $building_post_rdg = (isset($_POST['name_post_txt'])) ? $_POST['building'] : "" ;
        $floor_one_post_chk = (isset($_POST['chk_floor_one']) == "floor") ? "checked" : "" ;
        $floor_two_post_chk = (isset($_POST['chk_floor_two']) == "floor") ? "checked" : "" ;;
        $floor_three_post_chk = (isset($_POST['chk_floor_three']) == "floor") ? "checked" : "" ;;
        $state_post_cmb = (isset($_POST['state_post_cmb'])) ? $_POST['state_post_cmb'] : "" ;

        //? CONVERT
        $floor_one = ($floor_one_post_chk == "checked" ? "Piso Uno" : "");
        $floor_two = ($floor_two_post_chk == "checked" ? "Piso Dos" : "");
        $floor_three = ($floor_three_post_chk == "checked" ? "Piso Tres" : "");
    
    //* INSERT DATA IN DB 
    $sql = "INSERT INTO employees(employee_id,first_name,last_name, position, assigned_building,num_floor,state) VALUES(NULL,'$name_post_txt', '$lastname_post_txt','$position_post_cmb', '$building_post_rdg','$floor_one, $floor_two, $floor_three', '$state_post_cmb')";
    $connection->exec($sql);
    echo "Successful register";
    
    }
    
} catch (PDOException $error) {
    echo "Erro" . $error;
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>REM</title>
</head>

<body>



    <div class="flex justify-center items-center content-center bg-[#a8dadc] w-full h-screen">


        <form action="registerApp.php" method="post" class="w-full max-w-lg bg-[#f1faee] p-12 rounded-2xl">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre
                    </label>
                    <input name="name_post_txt" class="appearance-none block w-full bg-gray-200 text-gray-700 border  border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Apellido
                    </label>
                    <input name="lastname_post_txt" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Cargo
                    </label>
                    <select name="position_post_cmb" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="Limpieza">Limpieza</option>
                        <option value="Mantenimiento">Mantenimiento</option>
                        <option value="Jardineria">Jardinería</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Edificio
                    </label>
                    <div class="form-check">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" value="Urdesa" type="radio" name="building" <?php echo ($building_post_rdg == "Urdesa" ? "checked" : "" ) ?> id="">
                        <label class="form-check-label inline-block text-gray-800" for="">
                            Urdesa
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" value="Malvinas" type="radio" name="building" <?php echo ($building_post_rdg == "Malvinas" ? "checked" : "" ) ?>  id="">
                        <label class="form-check-label inline-block text-gray-800" for="lenguaje2">
                            Malvinas
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" value="Moderna" type="radio" name="building" <?php echo ($building_post_rdg == "Moderna" ? "checked" : "" ) ?> id="">
                        <label class="form-check-label inline-block text-gray-800" for="lenguaje2">
                            Moderna
                        </label>
                    </div>


                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Pisos
                    </label>
                    <div class="relative">
                        <div class="form-check">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chk_floor_one" value="floor" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                Piso 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chk_floor_two" value="floor" id="flexCheckChecked">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                Piso 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chk_floor_three" value="floor" id="flexCheckChecked">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                Piso 3
                            </label>
                        </div>

                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Estado
                    </label>
                    <select name="state_post_cmb" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="pendiente">Pendiente</option>
                        <option value="progreso">Progreso</option>
                        <option value="terminado">Terminado</option>
                    </select>
                    <div class="absolute right-0  items-center  text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>


                </div>
            </div>


            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 mt-6 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Registrar
                </span>
            </button>

        </form>

    </div>


</body>

</html>