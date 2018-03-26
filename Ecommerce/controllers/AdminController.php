<?php

// Auto include class if need
spl_autoload_register(function( $class_name ) {
    $file_name = '../' . 'models/dboperation' . $class_name . '.php';
    if (file_exists($file_name)) {
        require $file_name;
    }
});

class AdminController {
    private $adminList;
    
    function getAdminList() {
        return $this->adminList;
    }

    function setAdminList($adminList) {
        $this->adminList = $adminList;
    }

        
    function __contruct() {
        // Connect Database
        $dbConnect = new MySQLConnection('localhost:3306', 'root', 123456, 'ecomnerce');
        if ($dbConnect->getError() != NULL) {
            $dbConnect->close();
            die("Error: " . $dbConnect->getError());
        } else {
            $admin = new AdminMySQLOperation($dbConnect);
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