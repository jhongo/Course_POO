<?php


$txtNombre = "";
$rdgLenguaje = "";

$chkFlutter = "";
$chkReact_Native = "";
$chkXmarin = "";

$selectAnime = "";

$txtAreaComment ="";


if ($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['txtNombre'])) ? $_POST['lenguaje'] : "";

    $chkFlutter = (isset($_POST['chkflutter']) == "si") ? "checked" : "";
    $chkReact_Native = (isset($_POST['chkreact_native']) == "si") ? "checked" : "";
    $chkXmarin = (isset($_POST['chkxamarin']) == "si") ? "checked" : "";

    $selectAnime = (isset($_POST['selectAnime'])) ? $_POST['selectAnime'] : "";

    $txtAreaComment = (isset($_POST['txtAreaComment'])) ? $_POST['txtAreaComment'] : "Sin Comentarios";
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
        <br/>
        <strong>Estas aprendiendo </strong>
        <?php echo ($chkFlutter == "checked" ? "Flutter" : "") ?> <br/>
        <?php echo ($chkReact_Native == "checked" ? "React Native" : "") ?> <br/>
        <?php echo ($chkXmarin == "checked" ? "Xamarin" : "") ?> <br/>
        <strong>Tu anime favorito es </strong>:
        <?php echo $selectAnime; ?>
        <br/>
        <strong>Tu comentario </strong>:
        <?php echo $txtAreaComment; ?>
        

    <?php } ?>



    <form class="bg-[#f8edeb] w-1/3 h-1/3 m-12 p-12 " action="index.php" method="post">

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

            <br />

            <div class=" ml-12 flex justify-center">
                <div>
                    <div class="form-check">
                        <input <?php echo $chkFlutter ?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkflutter" value="si" id="flexCheckDefault">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                            Flutter
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php echo $chkReact_Native ?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkreact_native" value="si" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            React Native
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php echo $chkXmarin ?> class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="chkxamarin" value="si" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            Xamarin
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-8">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-600 ">Que anime te gusta?</label>
        <select name="selectAnime" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Ninguno</option>
            <option value="dragon_ball" <?php echo ($selectAnime == "dragon_ball") ? "selected" : "";  ?>>Dragon Ball</option>
            <option value="one_peace" <?php echo ($selectAnime == "one_peace") ? "selected" : ""; ?>>One Peace</option>
            <option value="snk" <?php echo ($selectAnime == "snk") ? "selected" : ""; ?>>SNK</option>
            <option value="naruto" <?php echo ($selectAnime == "naruto") ? "selected" : ""; ?>>Naruto</option>
        </select>
        </div>


        <label for="chat" class="sr-only">Tienes alguna duda</label>
        <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
            <textarea name="txtAreaComment" id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
        </div>


        <!-- <input type="submit" value="Enviar"> -->
        <button type="submit" class="mt-2.5 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Enviar</button>

    </form>

</body>

</html>