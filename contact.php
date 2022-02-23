<?php
include_once 'header.php';
include_once 'sqlFunctions.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="css/contact.css">
       </head>
       <?php
       if(isset($_POST['submit'])){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $country = $_POST['country'];
         $subject = $_POST['subject'];
         kontakto($firstname,$lastname,$country,$subject);
       }
       ?>
  <body>
    <div class="container">
      <form action="contact.php" method="post">
        <label for="firstname">First Name</label>
        <input
          type="text"
          id="firstname"
          name="firstname"
          placeholder="Your name.."
        />

        <label for="lastname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name.."
        />

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="kosovo">Kosovo</option>
          <option value="bulgaria">Bulgaria</option>
          <option value="albania">Albania</option>
        </select>

        <label for="subject" name="subject">Subject</label>
        <textarea
          id="subject"
          name="subject"
          placeholder="Write something.."
          style="height: 200px"
        ></textarea>

        <input type="submit" name="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
<?php
include_once 'footer.php'
?>