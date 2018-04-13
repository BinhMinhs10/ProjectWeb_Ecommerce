<?php

interface IAdminDBOperation {

    function getAdmin($adminId);

    function updateAdmin($adminId,$userName, $pass, $name);

    function deleteAdmin($adminId);

    function addAdmin($userName, $pass, $Name);
}

?>