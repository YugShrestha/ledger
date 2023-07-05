<?php
class Data{
private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname = "myDB";

private $table="MyGuests";

public function data(){
    //create connection
    $conn = new mysqli(
    $this->servername,
    $this->username,
    $this->password,
    $this->dbname
    );

    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, firstname, lastname FROM $this->table";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
}
}
$yug= new Data;
$yug->data();

?>
