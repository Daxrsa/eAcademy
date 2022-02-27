<?php
require_once('modeliStudenti.php');
if(isset($_POST['save'])){
    $regj = new Studenti();
    $regj->setUsername($_POST['username']);
    $regj->setName($_POST['name']);
    $regj->setSurname($_POST['surname']);
    $regj->setEmail($_POST['email']);
    $regj->setCourse($_POST['course']);
    $regj->setPassword($_POST['password']);

    $regj->insertDhenat();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register A New User</title>
</head>
<body>
    <div id="formulari">
        <h3>Add Data</h3>
        <form action='' method="POST">
          <label>Username</label>
          <input type="text" name='username' placeholder="Username..."></br>
          <label>Name</label>
          <input type="text" name='name' placeholder="Name..."></br>
          <label>Surname</label>
          <input type="text" name='surname' placeholder="Surname..."></br>
          <label>Email</label>
          <input type="email" name='email' placeholder="Email..."></br>
          <label>Course</label>
          <input type="text" name='course' placeholder="Course..."></br>
          <label>Password</label>
          <input type="password" name='password' placeholder="Password..."></br>
          <button name="save">Save User</button>
        </form>
    </div>
</body>
</html>



