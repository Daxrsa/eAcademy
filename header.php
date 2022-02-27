<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>eAcademy</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/index5.css" />
    <link href="index.js" />
    <script defer src="fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <script src="https://kit.fontawesome.com/5f9d989b53.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="header">
      <nav id="mainnav">
        <p style="color:white;">eAcademy</p>
        <h1>
          <strong><em>eAcademy</em></strong>
        </h1>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <?php
          if(isset($_SESSION['name'])){
          echo '<li><a href="contact.php">CONTACT US</a></li>';
          echo '<li><a href="courses1.php">COURSES</a></li>';
          }else{
            echo '<li><a href="#">CONTACT US</a></li>';
            echo '<li><a href="#">COURSES</a></li>';
          }
          ?>
          <li><a href="reviews.php">REVIEWS</a></li>
          <li><a href="becomeAnInstructor.php">BECOME AN INSTRUCTOR</a></li>
          <li><a href="signUp.php">BECOME A STUDENT</a></li>
          <?php
          if(!isset($_SESSION['name'])){
            echo '<li><a href="login.php">LOG IN</a></li>';
          } else {
            echo '<li><a href="logout.php">LOG OUT</a></li>';
          }
          ?>
    
        </ul>
      </nav>