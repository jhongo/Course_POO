<?php


class createAccountUser{ // CLASE CREATE_ACCOUNT_USER

    // Propiedades de Student
    public $name;
    public $lastname;
    public $email;
    private $password;

    // Metodos de una clase
    public function getDataUser($newName, $newLastname,$newEmail)
    {
        $this->name = $newName;
        $this->lastname = $newLastname;
        $this->email = $newEmail;
    }

     public function printDataUser()
     {
        echo "Welcome ". $this->name." ".$this->lastname. " with email ". $this->email;
     }


    public function AddCourseStudent($newCourse, $newDegree)
    {

    }    
}

if ($_POST) {

    $nameUser = $_POST['txtNameUser'];
    $lastnameUser = $_POST['txtLastnameUser'];
    $emailUser = $_POST['textEmailUser'];

    // Instanciar de una clase u Objeto de una clase
    $objDataAccount = new createAccountUser();
    $objDataAccount-> getDataUser($nameUser,$lastnameUser,$emailUser);
    $objDataAccount-> printDataUser();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Encapsulacion</title>

</head>
<body>

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
  <form method="post" action="index.php">
    <div class="grid grid-cols-2 gap-4">

      <div class="form-group mb-6">
        <input type="text" name="txtNameUser" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
          aria-describedby="emailHelp123" placeholder="First name">
      </div>

      <div class="form-group mb-6">
        <input name="txtLastnameUser" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
          aria-describedby="emailHelp124" placeholder="Last name">
      </div>
    </div>

    <div class="form-group mb-6">
      <input name="textEmailUser" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
        placeholder="Email address">
    </div>

    <!-- <div class="form-group mb-6">
      <input type="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
        placeholder="Password">
    </div> -->

    <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
      ease-in-out"  >Sign up</button>
  </form>
</div>


    
    
</body>
</html>