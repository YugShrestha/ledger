<?php
 class Database{
  private $server='localhost';
  private $user='root';
  private $pass='';
  private $dbname='login_form';

  private $table='users';

  public function InsertUsers($email,$password,$repassword){
    $conn=new mysqli(
    $this->server,
    $this->user,
    $this->pass, 
    $this->dbname
    );

    if($conn->connect_error){
      die("connection erro".$conn->connect_error);
    }
    $sql="INSERT INTO $this->table ( `email`, `password`, `repassword`) VALUES ('$email','$password','$repassword')";

    if($conn->query($sql)===TRUE){
      echo"NEW RECORDS UPDATED";
    }
    else{
      echo"ERROR:".$sql."</br>".$conn_error;
    }
    $conn->close();

  }
  

 }
 $yug=new Database;
 $email=$_POST['email'];
 $password=$_POST['pass'];
 $repassword=$_POST['repass'];
 $yug->InsertUsers($email,$password,$repassword);
?>