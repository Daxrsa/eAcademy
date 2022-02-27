<?php
require_once('modeliStudenti.php');
require_once('DB_Connection.php');

$studentOprations = new Studenti();

if(isset($_GET['studentid'])){
  $studentOprations->setStudentID($_GET['studentid']);
  $studentOprations->deleteStudent();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eAcademy</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script defer src="fontawesome/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css" />
   
    <script src="https://kit.fontawesome.com/5f9d989b53.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="menu">
      <div class="logo">
        <img src="images/dashboard.png" alt="">
        <h2>Welcome Admin</h2>
      </div>
      <div class="items">
          <li class="a"><img src="Icons/chart-area-solid.svg" class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Dashboard</a></li>
          <li class="a"><img src="Icons/bars-solid.svg" class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Ul Elements</a></li>
          <li class="a"><img src="Icons/table-cells-solid.svg" class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Tables</a></li>
          <li class="a"><img src="Icons/file-waveform-solid.svg" class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Forms</a></li>
          <li class="a"><img src="Icons/id-card-solid.svg"  class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Cards</a></li>
          <li class="a"><img src="Icons/modx-brands.svg" class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Modal</a></li>
          <li class="a"><img src="Icons/chart-area-solid.svg"  class = "li" alt="" srcset="" style="width:30px;height: 30px;"><a href = "#">Blank</a></li>

      </div>
    </section>
    <section id="interface">
      <div class="navigation">
        <div class="n1">
          <div class="search">
            <img src="Icons/magnifying-glass-solid.svg" alt="" srcset="" style="width:20px;height: 20px;">
            <input type="text" placeholder="Search...">
          </div>
        </div>
        <div class="profile">
          <img id = "b" src="Icons/bell-solid.svg" alt="" srcset="" style="width:30px;height: 30px;">
          <img id = "admin" src="images/admin.png" alt="">
        </div>
      </div>
      <h3 class = "i-name">
        Dashboard
      </h3>
      <a href="index.php">Go Back</a>
      <div class="values">

       <div class="val-box">
         <img src="Icons/users-solid.svg" alt="" srcset="" style="width:50px;height: 50px;">
         <div>
           <h3>8,267</h3>
           <?php ?>
         </div>
       </div>
   <!---------------------------------->
       <div class="val-box">
        <img src="Icons/cart-arrow-down-solid.svg" alt="" srcset="" style="width:50px;height: 50px;">
        <div>
          <h3>200,521</h3>
          <span>Total Orders</span>
        </div>
      </div>
 <!---------------------------------->
      <div class="val-box">
        <img src="Icons/dollar-sign-solid.svg" alt="" srcset="" style="width:50px;height: 50px;">
        <div>
          <h3>215,542</h3>
          <span>Products Sold</span>
        </div>
      </div>
 <!---------------------------------->
      <div class="val-box">
        <img src="Icons/box-solid.svg" alt="" srcset="" style="width:50px;height: 50px;">
        <div>
          <h3>$677.89</h3>
          <span>This Month</span>
        </div>
      </div>
 <!---------------------------------->
      </div>

      <div class="board">
         <table width="100%">
           <thead>
             <tr>
               <td>Student ID</td>
               <td>Username</td>
               <td>Name</td>
               <td>Surname</td>
               <td>Email</td>
               <td>Course</td>
               <td>Password</td>
              
             </tr>
           </thead>
           <tbody>
             <tr>
             <?php
                $conn = mysqli_connect("localhost","root","","eacademy");
                if($conn->connect_error){
                    die("Connection failed:".$conn->connect_error);
                }
             $sql ="SELECT *FROM students";
             $result = $conn->query($sql);
             if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                echo
                "
                  <tr>
                  <td>$row[studentid]</td>
                  <td>$row[username]</td>
                  <td>$row[name]</td>
                  <td>$row[surname]</td>
                  <td>$row[email]</td>
                  <td>$row[course]</td>
                  <td>$row[password]</td>
      <td class='align-text-center'><a href='dashboard2.php?studentid=". $row["studentid"] ."'><button class='deleteBtn'>Delete</button></a></td> 
                  </tr>   
                ";
              }
              echo "</table>";
              }
              else{
                echo "0 results";
              }
             ?>     
        
             </tr>
           </tbody>
         </table>
         <td class="align-text-center"><a href="insert.php"><button>Add</button></a></td>
         <div class="contact">
    <div class="board">
         <table width="100%">
           <thead>
             <tr>
               <td>Name</td>
               <td>Lastname</td>
               <td>Country</td>
               <td>Subject</td>
             </tr>
           </thead>
           <tbody>
     <?php
     $conn = mysqli_connect("localhost","root","","eacademy");
     if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
     }
      $sql = "SELECT * FROM contact";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
          echo "
          <tr>
         
          <td>$row[firstname]</td>  
         
          <td>$row[lastname]</td>
         
          <td>$row[country]</td>
         
          <td>$row[subject]</td><br>
        
          </tr>
          ";
         }
         echo "</table";
      }
      else{
        echo "0 results";
      }
     ?>
    </tbody>
    </div>
     
      </div>
   
    </section>
</body>
</html>
               