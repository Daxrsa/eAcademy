<?php
include_once 'header.php';
include_once 'sqlFunctions.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAnimated Sign up Form</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .errors{
        color:red;
        font-size:14px;
        float:left;
        margin-left:30px;
        margin:-12px 0px -12px 30px;
      }
    </style>
    <script>
    function validate(e){
    //username
    var regUsername = /^[a-zA-Z]+$/;
  var username = document.getElementById('username').value;
  if(!regUsername.test(username)){
      alert('Please enter your username');
      document.getElementById('username').focus();
      e.preventDefault();
  }
  //surname
  var regSurname = /^[a-zA-Z]+$/;
  var surname = document.getElementById('surname').value;
  if(!regSurname.test(surname)){
      alert('Please enter your surname');
      document.getElementById('surname').focus();
      e.preventDefault();
  }
  //email
  var regEmail = /^\S+@\S+\.\S+$/;
  var email = document.getElementById('email').value;
  if(!regEmail.test(email)){
      alert('Please enter your email');
      document.getElementById('email').focus();
      e.preventDefault();
  }
  //name
  var regName = /^[a-zA-Z]+$/;
  var name = document.getElementById('name').value;
  if(!regName.test(name)){
      alert('Please enter your name');
      document.getElementById('name').focus();
      e.preventDefault();
  }
  //password
  var regPass = /^(?=.{8,})/;
  var password = document.getElementById('password').value;
  if(!regPass.test(password)){
    alert('Please enter your password');
    document.getElementById('password').focus();
    e.preventDefault();
  }
}
    </script>
  </head>
  <body>
<?php
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = hash('md5', $password);
  signup($username,$name,$surname,$email,$password);
}
?>
<p class="errors"></p>
<form class="box" action="signup.php" id="loginForm" method="post">
  <div class="registertitle">Register</div>
  <input type="text" name="username" placeholder="Username" id="username">
  <input type="text" name="name" placeholder="Name" id="name">
  <input type="text" name="surname" placeholder="Surname" id="surname">
  <input type="email" name="email" placeholder="Email" id="email">
  <input type="password" name="password" placeholder="Password" id="password">
  
  <p style="margin-right:33px;float:right;color:white;">Already have an account?<span style="color:#009933;"><a style="color:#009933;text-decoration:none;padding-left:10px"
  href="login.php">Log In</a></span></p>
  <input type="submit" name="signup" value="Sign Up" onclick="validate(event)">

</form>
  </body>
</html>
<?php
include_once 'footer.php'

?>
