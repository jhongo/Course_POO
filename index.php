<?php


$txtNombre = "";
$rdgLenguaje = "";

$chkFlutter = "";
$chkReact_Native = "";
$chkXmarin = "";
if ($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['txtNombre'])) ? $_POST['lenguaje'] : "";

    $chkFlutter = ( isset($_POST['chkflutter']) == "si" ) ? "checked" : "";
    $chkReact_Native = (isset($_POST['chkreact_native']) == "si" ) ? "checked" : "";       
    $chkXmarin = ( isset($_POST['chkxamarin']) == "si" ) ? "checked" : "";


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) {  ?>
        <strong>Hola </strong>:<?php echo $txtNombre ?>
        <br />
        <strong>Tu lenguaje favorito es </strong>:<?php echo $rdgLenguaje ?>
    <?php } ?>

    <form class="bg-[#f8edeb] w-1/3 h-1/3 m-12 " action="index.php" method="post">

        <label for="">Nombre</label>
        <br />
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" placeholder="Ingresar dato" id=""> <br />
        <label for="">Lenguaje de preferencia</label>


        <div class="flex my-4 mx-1.5">
            <div>

                <div class="form-check">
                    <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" <?php echo ($rdgLenguaje == "Dart" ? "checked" : "") ?> value="Dart" type="radio" name="lenguaje" id="">
                    <label class="form-check-label inline-block text-gray-800" for="">
                        Dart
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" <?php echo ($rdgLenguaje == "Php" ? "checked" : "") ?> value="Php" type="radio" name="lenguaje" id="">
                    <label class="form-check-label inline-block text-gray-800" for="lenguaje2">
                        PHP
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" <?php echo ($rdgLenguaje == "Java" ? "checked" : "") ?> value="Java" type="radio" name="lenguaje" id="">
                    <label class="form-check-label inline-block text-gray-800" for="lenguaje2">
                        Java
                    </label>
                </div>

            </div>

            <br/>

            <div class=" ml-12 flex justify-center">
                <div>
                    <div class="form-check">
                        <input <?php echo $chkFlutter?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkflutter" value="si" id="flexCheckDefault">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                            Flutter
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php echo $chkReact_Native ?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkreact_native" value="si" id="flexCheckChecked" >
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            React Native
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php echo $chkXmarin ?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkxamarin" value="si" id="flexCheckChecked" >
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            Xamarin
                        </label>
                    </div>
                </div>
            </div>
        </div>




        <!-- <input type="submit" value="Enviar"> -->
        <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Enviar</button>

    </form>

</body>

</html>