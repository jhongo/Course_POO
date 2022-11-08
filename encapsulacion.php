<?php


class getDataStudent{

    // Propiedades de Student
    public $name;
    public $lastname;
    public $age;
    public $course;
    public $degree;

    // Metodos de una clase
    public function getPrimaryDataStudent($newName, $newLastname,$newAge)
    {
        $this->name = $newName;
        $this->lastname = $newLastname;
        $this->age = $newAge;
        

    }
    public function AddCourseStudent($newCourse, $newDegree)
    {

    }    
}

// Instanciar una clasE 
$objDataStudent = new getDataStudent();
$objDataStudent-> getPrimaryDataStudent("John","Carlos","22");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulacion</title>
</head>
<body>
    
    
</body>
</html>