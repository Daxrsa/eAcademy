<?php
include_once 'DB_Connection.php';
include_once 'sqlFunctions.php';
class StudentRepo{
    private $connection;
    function __construct()
    {
        $conn = new dbConnect();
        $this->connection = $conn->connectDB();

    }
    function login(){
        $conn = $this->connection;
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM students WHERE username='$name'";
        $statement = $conn->query($sql);
        $student = $statement->fetch(PDO::FETCH_ASSOC);
        if($statement->rowCount() < 1){
           echo"<script>alert('Incorrect Username');</script>";
        }else{
            if(!password_verify($password,$student['password'])){
                echo"<script>alert('Incorrect Password');</script>";
            }else{
                session_start();
                $_SESSION['username'] = $student['username'];
                header("location:courses.php");
            }
        }
    
    }
}
?>