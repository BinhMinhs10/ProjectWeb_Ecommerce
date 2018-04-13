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
                    <th>Admin Id</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>Name</th>
                </tr>
                <?php
                $admins = new AdminController();
//                    
                $adminList = $admins->getAdminList();
                $length = count($adminList);
                for ($i = 0; $i < $length; $i++) {
                    printf("<tr>"
                            . "<td>" . $adminList[$i]->getAdminId() . "</td>"
                            . "<td>" . $adminList[$i]->getUserName() . "</td>"
                            . "<td>" . $adminList[$i]->getPassword() . "</td>"
                            . "<td>" . $adminList[$i]->getName() . "</td>"
                            . "</tr>");
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
