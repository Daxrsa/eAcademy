<?php
include_once 'header.php';
include_once 'sqlFunctions.php';
?>
    <link rel="stylesheet" href="css/becomeAnInstructor.css">
    <style>
      .errors{
        color:red;
        font-size:14px;
        float:left;
        margin-left:30px;
        margin:-12px 0px -12px 30px;
      }
    </style>
  <?php
   if(isset($_POST['signup'])){
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $fieldofstudy = $_POST['fieldofstudy'];
     $degree = $_POST['degree'];
     $country = $_POST['country'];
     $password = password_hash($password, PASSWORD_DEFAULT);
     becomeAnInstructor($name,$surname,$email,$password,$fieldofstudy,$degree,$country);
   }
  ?>
  <body>
<p class="errors"></p>
<form class="box" id="becomeAnInstructor" action="becomeAnInstructor.php" method="post">
 
  <div class="registertitle">Register</div>
  <input type="text" name="name" placeholder="Name" id="name">
  <p id="nameMessage" class="errors"></p>
  <input type="text" name="surname" placeholder="Surname" id="surname">
  <p id="surnameMessage" class="errors"></p>
  <input type="email" name="email" placeholder="Email" id="email">
  <p id="emailMessage" class="errors"></p>
  <input type="password" name="password" placeholder="Password" id="password">
  <p id="passwordMessage" class="errors"></p>
  <input type="text" name="fieldofstudy" placeholder="Field Of Study" id="fieldofstudy">
  <p id="fieldofstudyMessage" class="errors"></p>
  <input type="text" name="degree" placeholder="Degree" id="degree">
  <p id="degreeMessage" class="errors"></p>
  <input type="text" name="country" placeholder="Country" id="country">
  <p id="countryMessage" class="errors"></p>
  
  <p style="margin-right:33px;float:right;color:white;">Already have an account?<span style="color:white;"><a style="color:#009933;text-decoration:none;padding-left:10px"
  href="login.php">Log In</a></span></p>
  <input type="submit" name="signup" value="Sign Up">
  
</form>
<script>
/*$(document).ready(function()){
$("#becomeAnInstructor").submit(function(){
  var name = $("#name").val();
  var surname = $("#surname").val();
  var email = $("#email").val();
  var password = $("#password").val();
  var fieldofstudy = $("#fieldofstudy").val();
  var degree = $("#degree").val();
  var country = $("#country").val();
  var errors=false;
  //----------------------------------------------------------- //name
  if(name == ""){
    $("#nameMessage").html("Please type in your name");
    errors = true;
  }else{
    $("#nameMessage").html("");
    errors = false;
  }
 // ------------------------------------------------------------ //surname
  if(surname == ""){
    $("#surnameMessage").html("Please type in your surname");
    errors = true;
  }else{
    $("#surnameMessage").html("");
    errors = false;
  }
  //-----------------------------------------------------------  //email
  if(email == ""){
    $("#emailMessage").html("Please type in your email");
    errors = true;
  }else{
    $("#emailMessage").html("");
    errors = false;
  }
  //----------------------------------------------------------- //fieldofstudy
  if(fieldofstudy == ""){
    $("#fieldofstudyMessage").html("Please type in your fieldofstudy");
    errors = true;
  }else{
    $("#fieldofstudyMessage").html("");
    errors = false;
  }
  //----------------------------------------------------------- //degree
  if(degree == ""){
    $("#degreeMessage").html("Please type in your degree");
    errors = true;
  }else{
    $("#degreeMessage").html("");
    errors = false;
  }
  //----------------------------------------------------------- // country
  if(country == ""){
    $("#countryMessage").html("Please type in your country");
    errors = true;
  }else{
    $("#countryMessage").html("");
    errors = false;
  }
  //----------------------------------------------------------- //password
  if(password == ""){
    $("#passwordMessage").html("Please type in your password");
    errors = true;
  }else{
    $("#passwordMessage").html("");
    errors = false;
  }
  //------------------------------------------------------------ //fund
  if(errors){
    return false;
  }else{
    return true;
  }
});
});
*/
</script>

<?php
include_once 'footer.php';

?>