<?php
require_once('DbConnection.php');

class Students{
    public $id;
    public $name;
    public $lastname;
    public $cedula;
    public $age;

    function __construct($i, $n, $l, $c, $a){
        $this->id = $i;
        $this->name = $n;
        $this->lastname = $l;
        $this->cedula = $c;
        $this->age = $a;
    }

    static function getStudents($limit = 100){
        $mysqlConnection = new DbConnection('localhost:3306', 'root', '', 'students');
        $result = $mysqlConnection->getMySQLConnection()->query("SELECT * from students LIMIT $limit");
        return $result->fetch_all();
    }

    function to_string(){
        return "{$this->id}, {$this->name}, {$this->lastname}, {$this->cedula}, {$this->age}";
    }


 
}
?>