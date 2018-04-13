<?php
include 'IAdminDBOperation.php';

class AdminMySQLOperation implements IAdminDBOperation {

    private $conn;

    
    
    function setConn($dbConnect) {
        $this->conn = $dbConnect->getConn();
    }

    
    // Ham nay can kiem tra xem co trung userName trong CSDL hay chua
    public function addAdmin($userName, $pass, $Name) {
        $sql = "INSERT INTO admin (user_name,password,name) VALUES ('$userName','$pass','$Name')";

        if ($this->conn->query(htmlspecialchars($sql)) == TRUE) {
            $lastId = $this->conn->insert_id;
            return new Admin($lastId, $userName, $pass, $Name);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function getAdmin($adminId) {
        $sql = "SELECT * from admin where admin_id = $adminId";
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            $row = $result->fetch_assoc();
            return new Admin($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function updateAdmin($adminId,$userName, $pass, $name) {
        $sql = "UPDATE admin SET user_name='$userName', password='$pass', name='$name' where admin_id='$adminId'";

        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            $row = $result->fetch_assoc();
            return new Admin($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function deleteAdmin($adminid) {
        $sql = "DELETE FROM admin WHERE admin_id='$adminid'";
        $admin = $this->getAdmin($adminid);
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            return $admin;
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function getAdmins() {
        $adminList = array();
        $sql = "SELECT * FROM admin";
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
                $admin = new Admin($row["admin_id"], $row['user_name'], $row['password'], $row['name']);
                array_push($adminList, $admin);
            }
            return $adminList;
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

}

?>