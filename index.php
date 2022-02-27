<?php
include_once 'header.php';

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <div class="container">
        <img src="images/abs.jpg" class="wallpaper" width="120%" heigh="120%" />
        <div class="bottom-left"></div>
        <div class="top-left">
      <?php
      if(isset($_SESSION['instructorname'])){
        echo '<a href="dashboard2.php">Dashboard</a>';
        echo '<li><a href="logout.php">LOG OUT</a></li>';

      }
      ?>
      </div>
        <div class="top-right"><a href="logout.php"></a></div>
        <button id="button1">LEARN MORE</button>
        <div class="centered">
          <strong
            ><em
              >READY TO MASTER SOME COMPETENT AND PROFICIENT IT SKILLS TO ATTAIN
              YOUR GOALS WITHING NO TIME?</em
            ></strong
          >
        </div>
      </div>
    </div>
    <div class="main">
      <div id="wrap">
        <div class="box">
          <img src="images/academy.png" width="200" height="170" />
          <div>
            <p><strong>Join the Academy!</strong></p>
            <p>
              <em
                >Enroll yourself for free and have the chance to unlock some
                exceptional online courses that are highly demanded by today’s
                technological era!</em
              >
            </p>
          </div>
          <button id="button2">ENROLL NOW</button>
        </div>
      </div>
      <div class="b">
      <div id="wrap2">
        <img src="images/courses.png" width="180" height="100" class="omg" />
        <h2>Trendy Courses</h2>
        <p>
          Have access to the courses that are distant and invigorating. Our
          courses are not limited to a specific segment, but covering a
          multitude of subject matter.
        </p>
      </div>
      <div id="wrap3">
        <img src="images/anywhere.png" width="180" height="100" class="omg" />
        <h2>Anytime, Anywhere</h2>
        <p>
          Just take out a little bit time from your schedule and start learning
          something phenomenal from anywhere you want to either from your
          laptop, mobile or a tablet.
        </p>
      </div>
      <div id="wrap4">
        <img src="images/instructor.png" width="180" height="100" class="omg" />
        <h2>Exceptional Instructors</h2>
        <p>
          We have dedicated working professionals on board with years of
          experience in the fields they teach. They are outstanding experts in
          their subject matter.
        </p>
      </div>
      <div id="wrap5">
        <img src="images/certificate.png" width="160" height="100" class="omg" />
        <h2>Certifications</h2>
        <p>
          We assure you that whatever you learn from our extravagant courses
          will not go in vain by any means and for this we're presenting you
          with a certificate.
        </p>
      </div>
</div>
    </div>
    <div class="footer">
      <p><strong>YOU CAN GET</strong></p>
      <div class ="ach">
       
          <div class="pic">
            <img src="images/wrench.png" width="50" height="50" class="img" />
            <li>Networking</li>
          </div>
          <div class="pic">
            <img src="images/code.jpg" width="70" height="50" class="img" />
            <li>Programming Courses</li>
          </div>
          <div class="pic">
            <img src="images/pen.jpg" width="70" height="50" class="img" />
            <li>Penetration Testing</li>
          </div>
          <div class="pic">
            <img src="images/hack.png" width="60" height="50" class="img" />
            <li>Ethical Hacking</li>
          </div>
          <div class="pic">
            <img src="images/free.jpg" width="70" height="50" class="img" />
            <li>Free Courses</li>
          </div>
          <div class="pic">
            <img src="images/hat.png" width="80" height="50" class="img" />
            <li>Cisco</li>
          </div>
     
      </div>
    </div>
    <div class="end">
      <img  src="images/net.jpg" id="imazhi" />
      <h3 style="color:black;">ACHIEVEMENTS</h3>
      <p style="color:black;"><strong>Here you can review some statistics about our Education Center</strong></p>
      <div class="list">
        
          <div class="kard">
            <img src="images/globe.png" width="70" height="70" style="padding-left:5px;">
          <div><p style="color:black;">94,532<br>
            FOREIGN FOLLOWERS</p></div>
          </div>
          <div class="kard">
          <img src="images/class.png" width="70" height="70" style="padding-left:5px;">
            <div><p style="color:black;">11,223<br>
              CLASSES COMPLETE<p></p></div>
          </div>
          <div class="kard">
          <img src="images/student..png" width="90" height="70" style="padding-left:5px;">
              <div><p style="color:black;">282,673<br>
                STUDENTS ENROLLED</p></div>
          </div>
          <div class="kard">
            <img src="images/bag.png" width="70" height="70" style="padding-left:5px;">
                <div><p style="color:black;">100+<br>
                  CERTIFIED TEACHERS</p></div>
          </div>
                
</div>
</div>
</div>
<?php
include_once 'footer.php';

?>
