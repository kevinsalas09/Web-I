<?php

class DbConnection{
    private $host;
    private $user;
    private $password;
    private $databaseName;

    function __construct($host, $user, $password, $databaseName){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->databaseName = $databaseName;  
    }

    /**
     * Get an active mysql connection
     */
    function getMySQLConnection() {
        //if(!$this->$activeConecction){
        $Conecction = new mysqli($this->host, $this->user, $this->password, $this->databaseName); 
        //}
        if ($Conecction->connect_errno) {
            echo("Failed to connect to MySQL: ".$Conecction->connect_error);
            exit;
        }
        return $Conecction;
    }
}

?>