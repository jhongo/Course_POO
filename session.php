<?php

  session_start();

  $_SESSION['usuario']="john";
  $_SESSION['status']="logueado";

  echo "Sesion iniciada"."<br/>";
  echo "Usuario: ". $_SESSION['usuario']."<br/>"."Status: ".$_SESSION['status'];


?>