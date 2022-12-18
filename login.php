<?php

    session_start();

    if (isset( $_SESSION['usuario'] )) {
        echo "Usuario: ". $_SESSION['usuario']."<br/>"."Status: ".$_SESSION['status'];
    }else{
        echo "No hay usuarios registrados";
    }



?>