<?php
require_once('DB_Connection.php');

class Studenti extends dbConnect{
   private $studentid;
   private $username;
   private $name;
   private $surname;
   private $email;
   private $course;
   private $password;
   private $dbconn;

   public function __construct($studentid='',$username='',$name='',$surname='',$email='',$course='',$password='')
   {
      $this->studentid = $studentid;
       $this->username = $username;
       $this->name = $name;
       $this->surname = $surname;
       $this->email = $email;
       $this->course = $course;
       $this->password = $password;

       $this->dbconn=$this->connectDB();
   }
  public function setStudentID($studentid){
      $this->studentid = $studentid;
   }
   public function setUsername($username){
    $this->username = $username;
 }
 public function setName($name){
    $this->name = $name;
 }
 public function setSurname($surname){
    $this->surname = $surname;
 }
 public function setEmail($email){
    $this->email = $email;
 }
 public function setCourse($course){
    $this->course = $course;
 }
 public function setPassword($password){
    $this->password = $password;
 }
 /////////////////////////////////////
 public function getStudentID(){
     return $this->studentid;
 }
 public function getUsername(){
    return $this->username;
}
public function getName(){
    return $this->name;
}
public function getSurname(){
    return $this->surname;
}
public function getEmail(){
    return $this->email;
}
public function getCourse(){
    return $this->course;
}
public function getPassword(){
    return $this->password;
}
//krijimi i CRUD
public function insertDhenat(){  //per me shtu student
    $sql = "INSERT INTO students(username,name,surname,email,course,password) VALUES(:username,:name,:surname,:email,:course,:password)";
    $stm =$this->dbconn->prepare($sql);
    $stm->bindValue(':username',$this->username);
    $stm->bindValue(':name',$this->name);
    $stm->bindValue(':surname',$this->surname);
    $stm->bindValue(':email',$this->email);
    $stm->bindValue(':course',$this->course);
    $stm->bindValue(':password', hash('md5', $this->password));

    

    $stm->execute();
    echo "<script>alert('User has been sucesfully registered');
    document.location='dashboard2.php';
    </script>";
}
public function merrStudentet(){  //nuk perdoret
    $sql = "SELECT * FROM students";
    $statement = $this->dbconn->query($sql);
    $students = $statement->fetchAll();
    return $students;
}
public function lexoStudentet(){ // nuk perdoret
    $sql = "SELECT * FROM students";
    $stm=$this->dbconn->prepare($sql);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
public function deleteStudenti($studentid){
    $sql = "DELETE FROM students WHERE studentid=$studentid";
    $stm=$this->dbconn->prepare($sql);
    $stm->bindParam(':studentid',$studentid);
    $stm->execute();
    if($stm==true){
        echo "<script>alert('Student was succesfully deleted');
               document.location='dashboard2.php';
               </script>";
    }
    else{
        return false;
    }
}
function getNrOfStudents(){   //spo bon niher
    $sql = "SELECT COUNT(*) as total FROM students";
    $statement = $this->dbconn->query($sql);
    $students = $statement->fetchAll();
    return $students;
}
public function deleteStudent(){
    $sql = "DELETE FROM students WHERE studentid=".$this->studentid;
    $this->dbconn->query($sql);
}
}
?>