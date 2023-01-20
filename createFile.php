<?php

$nameFile = "file.pdf";
$contentFile = "Hello My name is John";

$createFile = fopen($nameFile, "w");
fwrite($createFile, $contentFile);

fclose($createFile);
    
 
 
 ?>