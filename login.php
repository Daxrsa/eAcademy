<?php
//session_start();
include_once 'header.php';
require_once 'studentRepo.php';
require_once 'modeliStudenti.php';

$studentOprations = new Studenti();
$students = $studentOprations->merrStudentet();
$instructors = $studentOprations->merrInstruktoret();

?>
<?php
if(!isset($_SESSION['name']) && !isset($_SESSION['instructorname'])){
if(isset($_POST['name'])){
  if(empty($_POST['name']) || empty($_POST['password'])){
    echo "Fill all fields";
  }else{
    $name = $_POST['name'];
    $password = hash('md5', $_POST['password']);
    
    $i = 0;
    foreach($students as $student){
      $i++;
      if($name == $student['name'] && $password == $student['password']){
        echo $name;
        echo $password;
        $_SESSION['name'] = $name;
        $_SESSION['studentid'] = $student['studentid']; 
        header("location:courses1.php");
        exit();
      }else{
        if($i == sizeof($students)){
         echo "Incorrect Username or password";
         //exit();
        }
      }
    }

    

    $i = 0;
    foreach($instructors as $inst){
      $i++;
      if($name == $inst['name'] && $password == $inst['Password']){
        echo $name;
        echo $password;
        $_SESSION['instructorname'] = $name;
        $_SESSION['instructorid'] = $inst['instructorid']; 

        header("location:dashboard2.php");
        exit();
      }else{
        if($i == sizeof($instructors)){
         echo "Incorrect Username or password";
         exit();
        }
      }
    }
  }
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <?php
   /*if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    login();
   }*/
  ?>
  <body>
<p class="errors" style ="margin-bottom:5px;"></p>
<form class="box" name="loginForm" action="login.php" method="post">
  <div class="login">Login</div>
  <input type="text" name="name" id="name" placeholder="Name" id="name">
 
  <input type="password" name="password" id="password" placeholder="Password" id="password">
  
  <div style = "clear:both;"></div>
  <p style="margin-right:25px;float:right;color:white;">Don't have an account yet?<span><a style="color: #009933;text-decoration:none;padding-left:10px" href="signup.php">Sign Up</a></span></p>
  <p style="margin-right:25px;float:right;color:white;">Want to become an Instructor?<span><a style="color: #009933;text-decoration:none;padding-left:10px" href="becomeAnInstructor.php">Click here instead</a></span></p>

  <input type="submit" name="login" value="Login">
</form>
</body>
</html>
  

<?php
include_once 'footer.php';
?>
