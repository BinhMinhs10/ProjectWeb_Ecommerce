<?php

interface AdminDBOperation {

    function getAdmin($adminId);

    function updateAdmin($userName, $pass, $name);

    function deleteAdmin($adminId);

    function addAdmin($userName, $pass, $Name);
}

?>