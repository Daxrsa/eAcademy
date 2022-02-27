<?php
 class dbConnect{
   private $host = 'localhost';
   private $dbname = 'eacademy';
   private $username = 'root';
   private $password = '';

   private $conn = null;
   
   public function connectDB(){
       try{
         $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
         $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)."</br>";
         $this->conn->setAttribute(PDO::FETCH_BOUND,PDO::FETCH_BOTH);
       }catch(PDOException $pdo){
          die("Deshtoi lidhja me databazen ($this->dbname):".$pdo->getMessage());
       }
       return $this->conn;
    }
}
//$link = new dbConnect();
//$link->connectDB();
?>