<?php
include 'models/dboperation/AdminMySQLOperation.php';
include 'models/dboperation/MySQLConnection.php';
include 'models/Admin.php';
class AdminController {
    private $adminList;
    
    function getAdminList() {
        return $this->adminList;
    }

    function setAdminList($adminList) {
        $this->adminList = $adminList;
    }

        
    function __construct() {
        // Connect Database
        $dbConnect = new MySQLConnection('localhost:3306', 'root', 123456, 'ecommerce');
        if ($dbConnect->getError() != NULL) {
            $dbConnect->close();
            die("Error: " . $dbConnect->getError());
        } else {
            if($dbConnect->getConn() == null)    echo 'null';
            $admin = new AdminMySQLOperation();
            $admin->setConn($dbConnect);
            $this->adminList = $admin->getAdmins();
            if (isset($_POST["submit"])) {
                
                $userName = $_POST["user_name"];
                $password = $_POST["password"];
                $name = $_POST["name"];

                $result = $admin->addAdmin($userName, $password, $name);
                if (!$result) {
                    die("Error: " . $dbConnect->getError());
                } else {
                    array_push($this->adminList, $admin->getAdmin($result->getAdminId()));
                }
            }

            $dbConnect->close();
        }
    }
}

?>