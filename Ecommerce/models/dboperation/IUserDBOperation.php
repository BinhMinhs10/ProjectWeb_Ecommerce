<?php

interface IUserDBOperation {

    function getUser($userId);

    function updateUser($userID, $user_name, $password, $email, $phone_number, $address);

    function deleteUser($userId);

    function addUser($user_name, $password, $email, $phone_number, $address);
}
?>

