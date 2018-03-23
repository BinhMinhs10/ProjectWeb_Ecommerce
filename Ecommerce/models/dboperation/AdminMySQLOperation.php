<?php

class AdminMySQLOperation implements IAdminDBOperation {
    private $conn;
    function __contruct($conn){
        $this->conn = $conn;
    }
    
    // Ham nay can kiem tra xem co trung userName trong CSDL hay chua
    public function addAdmin($userName, $pass, $Name) {
        $sql = "INSERT INTO admin (user_name,password,name) VALUES ('$userName','$pass','$Name')";
        
        if ($this->conn->query(htmlspecialchars($sql)) == TRUE) {
            $lastId = $this->conn->insert_id;
            return new Admin($lastId,$userName, $pass, $Name);
        } 
        else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function getAdmin($adminId) {
        $sql = "SELECT * from admin where admin_id = $adminId";
        $result = $this->conn->query(htmlspecialchars($sql));
        if($result==TRUE){
            $row = $result->fetch_assoc();
            return new OrderTable($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
        } 
        else {
            $this->error = $this->conn->error;
            return false;
        }

    }

    public function updateAdmin($userName,$pass, $Name) {
        $sql = "UPDATE admin SET password='$pass', name='$name' where user_name='$userName'";
        $result = $this->conn->query(htmlspecialchars($sql));
        if($result==TRUE){
            $row = $result->fetch_assoc();
            return new OrderTable($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
        } 
        else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public static function deleteAdmin($userName) {
        $sql = "DELETE FROM admin WHERE user_name='$userName'";
        $result = $this->conn->query(htmlspecialchars($sql));
        if($result==TRUE){
            $row = $result->fetch_assoc();
            return new OrderTable($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
        } 
        else {
            $this->error = $this->conn->error;
            return false;
        }
    }
    
    public function getAdmins(){
        $adminList = array();
        $sql = "SELECT * FROM admin";
        $result = $this->conn->query(htmlspecialchars($sql));
        if($result==TRUE){
            while($row = $result->fetch_assoc()){
                $admin = new OrderTable($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
                array_push($adminList,$admin);
            }
            return $adminList;
        } 
        else {
            $this->error = $this->conn->error;
            return false;
        }
        
    }

}

?>