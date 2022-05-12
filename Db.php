<?php

include 'Students.php';

class Data {

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=fds', 'root', 'root'); 
    }


    public function get() 
    {
        $sql = "SELECT * from fds";
        $query = $this->conn->query($sql);
        $this->conn = null;
        return $query->fetchAll();   
    }

    public function post() 
    {
        $student = new Students(
            name: $_POST['name'],
            age: $_POST['age'],
            score: $_POST['score']
        );

        $sql = "INSERT INTO fds (name, age, score) VALUES (
            '{$student->name}',
            {$student->age},
            {$student->score})";   

        $this->conn->query($sql);
    }
}