<?php
include 'IUserDBOperation.php';

class UserMySQLOperation implements IUserDBOperation {

    private $conn;

    
    
    function setConn($dbConnect) {
        $this->conn = $dbConnect->getConn();
    }

    
    // Ham nay can kiem tra xem co trung userName trong CSDL hay chua
    public function addUser($user_name, $password, $email, $phone_number, $address) {
        $sql = "INSERT INTO user (user_name,password,email, phone_number,address) VALUES ('$user_name','$password','$email','$phone_number','$address')";

        if ($this->conn->query(htmlspecialchars($sql)) == TRUE) {
            $lastId = $this->conn->insert_id;
            return new User($lastId,$user_name, $password, $email, $phone_number, $address);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function getUser($userId) {
        $sql = "SELECT * from user where user_id = $userId";
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            $row = $result->fetch_assoc();
            return new User($row["user_id"], $row['user_name'], $row['password'], $row['email'],$row['phone_number'], $row['address']);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function updateUser($userID, $user_name, $password, $email, $phone_number, $address) {
        $sql = "UPDATE user SET user_name='$user_name', password='$password', email='$email', phone_number='$phone_number', address='$address' where user_id='$userID'";

        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            $row = $result->fetch_assoc();
            return new User($row["user_id"], $row['user_name'], $row['password'], $row['email'],$row['phone_number'], $row['address']);
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function deleteUser($userId) {
        $sql = "DELETE FROM user WHERE admin_id='$userId'";
        $user = $this->getAdmin($userId);
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            return $user;
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

    public function getUsers() {
        $userList = array();
        $sql = "SELECT * FROM user";
        $result = $this->conn->query(htmlspecialchars($sql));
        if ($result == TRUE) {
            while ($row = $result->fetch_assoc()) {
                $user = new User($row["user_id"], $row['user_name'], $row['password'], $row['email'],$row['phone_number'], $row['address']);
                array_push($userList, $user);
            }
            return $userList;
        } else {
            $this->error = $this->conn->error;
            return false;
        }
    }

}

?>