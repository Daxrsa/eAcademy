<?php
$GLOBALS['dbcon'] = null;
$dbcon;
function connection(){
    global $dbcon;

    $host = 'localhost';
    $dbname = 'eacademy';
    $username = 'root';
    $password = '';
    // Create connection
    try{
        $dbcon = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)."</br>";
        $dbcon->setAttribute(PDO::FETCH_BOUND,PDO::FETCH_BOTH);
      }catch(PDOException $pdo){
         die("Deshtoi lidhja me databazen ($dbname):".$pdo->getMessage());
      }
      $GLOBALS['dbcon'] = $dbcon;
}
/*
function merrStudentet(){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM students";
    $result = $dbcon->query($sql);
    return $result;
}
*/

function merrStudentet(){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM students";
    $result = mysqli_query($dbcon,$sql);
    return $result;
}
function merrInstruktoret(){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM instructors";
    $result = $dbcon->query($sql);
    return $result;
}

function merrKurset(){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM courses";
    $result = $dbcon->query($sql);
    return $result;
}

function merrKontaktin(){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM contact";
    $result = $dbcon->query($sql);
    return $result;
}
function signUp($username,$name,$surname,$email,$password){
    global $dbcon;
    connection();
    $sql = "INSERT INTO students(username,name,surname,email,password) VALUES('$username','$name','$surname','$email','$password')";
    $result = $dbcon->query($sql);
    if($result){
        header("Location: login.php");
        return $result;
    }
}

/*function login($username,$password){
    global $dbcon;
    connection();
    $sql = "SELECT * FROM students WHERE username = '$username'";   //kshyre tabelen qetu 
    $result = $dbcon->query($sql);                            //me instructors
    if($result){
        if(mysqli_num_rows($result) == 1){
            $res = mysqli_fetch_assoc($result);
            if(password_verify($password,$res['password'])){
                header("Location: courses.php");
                session_start();
                $_SESSION['studentid'] = $res['studentid'];
                $_SESSION['username'] = $res['username'];
                $_SESSION['password'] = $res['password'];
                return $result;
        }else{
            echo "<script>alert('Wrong username or password!');</script>";
        }
    }
}
}*/



/*function signup($name,$surname,$email,$password,$fieldofstudy,$degree,$country){ //become an instructor
    connection();
    $sql = "INSERT INTO instructors(name,surname,email,password,fieldofstudy,degree,country)";
    $sql += " VALUES('$name','$surname','$email','$password','$fieldofstudy','$degree','$country')";
    $result = $dbcon->query($sql);
    if($result){
        header("Location: login.php");
        return $result;

}*/

function shtoStudentet($username,$name,$surname,$email,$password){
    global $dbcon;
    connection();
    $sql = "INSERT INTO students(username,name,surname,email,password)";
    $sql += " VALUES('$username','$name','$surname','$email','$password')";
    $result = $dbcon->query($sql);
    if($result){
        header("Location: students.php");
        return $result;
    }
}

function modifikoStudentet($studentid,$username,$name,$surname,$email,$password){
    global $dbcon;
    connection();
$sql = "UPDATE students SET name = '$name',surname = '$surname',username = '$username',email='$email',password='$password' WHERE studentid = $studentid";
$result = $dbcon->query($sql);
if($result){
    header("Location:dashboard.php");
    return $result;
}
}

function shtoInstruktoret($name,$surname,$email,$fieldofstudy,$degree,$country,$password){
    global $dbcon;
    connection();
    $sql = "INSERT INTO instructors(name,surname,email,fieldofstudy,degree,country,password)";
    $sql += "VALUES('$name','$surname','$email','$fieldofstudy','$degree','$country','$password')";
    $result = $dbcon->query($sql);
    if($result){
        header("Location: instructors.php");
        return $result;
    }

}

/*function modifikoInstruktoret($instructorid,$name,$surname,$email,$fieldofstudy,$degree,$country,$password){
    global $dbcon;
    connection();
$sql = "UPDATE instructors SET name = '$name',surname = '$surname', email = '$email', fieldofstudy = '$fieldofstudy',degree = '$degree',country = '$country',password = '$password' WHERE instructorid = $instructorid";
$result = $dbcon->query($sql);
if($result){
    header("Location: instructors.php");
    return $result;
}
}*/

function becomeAnInstructor($name,$surname,$email,$password,$fieldofstudy,$degree,$country){
global $dbcon;
connection();
$sql = "INSERT INTO instructors(name,surname,email,password,degree,fieldofstudy,country) VALUES('$name','$surname','$email','$password','$degree','$fieldofstudy','$country')";
$result = $dbcon->query($sql);
header("Location:login.php");
return $result;
}

function kontakto($firstname,$lastname,$country,$subject){
    global $dbcon;
    connection();
    
    $sql = "INSERT INTO contact(firstname,lastname,country,subject)  VALUES('$firstname','$lastname','$country','$subject')";
    $result = $dbcon->query($sql);
    header("Location:login.php");
    return $result;
}
function choseCourse($course,$studentid){
    connection();

    $sql = "UPDATE students SET course = '".$course."' WHERE studentid = ".$studentid;
    $result = $GLOBALS['dbcon']->query($sql);
    header("Location:about.php");
    return $result;
}