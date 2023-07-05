<?php

Class Database
{
    // Server Credentials
    private $server = 'localhost';
    private $user = 'root'; 
    private $pass = '';
    private $dbname = 'news';

    // Table Name
    private $table = 'sports';

    public function InsertSportTable($title,$source)
    {

        // Create connection
        $conn = new mysqli(
            $this->server, 
            $this->user, 
            $this->pass,
            $this->dbname
        );

        // Check connection
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

        $sql = "INSERT INTO $this->table (title, source) VALUES ('$title','$source')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }

}

$sport = new Database;
$title = $_POST['user'];
$source =$_POST['pass'];
$sport-> InsertSportTable($title,$source);

?>