<?php
 include 'kryarClass.php';
 include 'shooperClass.php';
 include 'bookClass.php';
    class Connecion{

    public $database;

    // to continously connected to the database use __construct()
    public function __construct(){
        $this->databaseConnection();
    }
    public function databaseConnection(){
        //we have a class of mysqli inside OOP phph itself therefore no need to write like mysqli_connect, write directly $variable = new mysqli ()
        $this->database =  new mysqli('localhost', 'root', '', 'Bookstore');
        if(!$this->database){
            die("Connection failed to Bookstore Database  ". $this->database->connect_error);
        }
    }

    //to write and run SQL query
    public function sqlQueryConfig($sqlQ){
        $result = $this->database->query($sqlQ);
        // it means always when you wnat to write sql query and make connect to database we made this sqlquery function
        // just write sqlquery("SELECT * FROM table-name;") mach easier than procetural PHP
        if(!$result){
            die("You have an error which is " . $this->database->error);
        }
        else{
            // if have result run following code
            return $result;
            //echo "did it";
        }
    }
    public function secureSQLcode($secSql){
        $secSql= $this->database->real_escape_string(htmlspecialchars($secSql)); 
    }
 }

 $db_config = new Connecion();


?>