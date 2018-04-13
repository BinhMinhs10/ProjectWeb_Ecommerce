<?php
    
class MySQLConnection {
        
    private $conn;
    private $error;
    
    
    public function __construct($serverName, $userName, $password, $dbName) {
        $this->error = NULL;
        $this->conn = new mysqli($serverName, $userName, $password, $dbName);
        if ($this->conn->connect_error) {
            $this->error = mysqli_connect_error();
        }
        
    }
    


    public function getConn() {
        return $this->conn;
    }

    public function getError() {
        return $this->error;
    }

        
    public function close(){
        
        $this->conn->close();
    }

}

?>