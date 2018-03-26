<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Webpage Ecommerce</title>
    </head>
    <body>
        <?php
        // put your code here
           spl_autoload_register( function( $class_name ) {
		$file_name = './controllers/'.$class_name . '.php';
		if( file_exists( $file_name ) ) {
			require $file_name;
		}
           }); 
        ?>
        <h2>Information detail admin</h2>
        <form action="controllers/AdminController.php" method="POST">
            <table border="1">
                <tr>
                    <th>Admin Id</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>Name</th>
                </tr>
                <?php
                    $admins = new AdminController();
                    $adminList = array();
                    $adminList = $admins->getAdminList();
                    if (count($adminList) > 0) {
                        // output data of each row
                        while($row = $adminList->fetch_assoc()) { 
                            printf("<tr>"
                                    . "<td>".$row["admin_id"]."</td>"
                                    . "<td>".$row["user_name"]."</td>"
                                    . "<td>".$row["password"]."</td>"
                                    . "<td>".$row["name"] . "</td>"
                                . "</tr>");
                        }
                    }
                ?>

                <tr>
                    <td>
                        AUTO_INCREATE
                    </td>
                    <td>
                        <input type="text" name="user_name"/>
                    </td>
                    <td>
                        <input type="text" name="password"/>
                    </td>
                    <td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
            </table>
        
            <input type="submit" name="submit" value="Add Admin"/>
        </form>
        
    </body>
</html>
