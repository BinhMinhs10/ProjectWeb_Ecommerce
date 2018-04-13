<!DOCTYPE html>

<?php
    include 'controllers/AdminController.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Webpage Ecommerce</title>
    </head>
    <body>

        <h2>Information detail admin</h2>
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <th>Select</th>
                    <th>Admin Id</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                $admins = new AdminController();    
                $adminList = $admins->getAdminList();
                $length = count($adminList);
                for ($i = 0; $i < $length; $i++) {

                    printf("<tr>"
                            . "<td> <input name='select[]' type='checkbox' value='" . $adminList[$i]->getAdminId(). "'/>"
                            . "<td>" . $adminList[$i]->getAdminId() . "</td>"
                            . "<td>" . $adminList[$i]->getUserName() . "</td>"
                            . "<td>" . $adminList[$i]->getPassword() . "</td>"
                            . "<td>" . $adminList[$i]->getName() . "</td>");?>
                    <td>
                        <form action="" method="post">
                            <input type="submit" name="edit" value="Edit">
                        </form>
                    </td>
                </tr>
                <?php } ?>
                    
                <tr>
                    <td></td>
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
                    <td>
                        <input type="submit" name="update" value="Update Admin" />
                    </td>
                </tr>
            </table>
            <br/><br/><br/>  
            <input type="submit" name="addAdmin" value="Add Admin"/>
            <br/><br/><br/>
            <input type="submit" name="remove" value="Remove"/>
        </form>

    </body>
</html>
