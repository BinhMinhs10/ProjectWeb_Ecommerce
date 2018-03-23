<?php
    interface AdminDBOperation{
        
        function getAdmin($adminId);
        function updateAdmin($pass,$Name);
        static function deleteAdmin($adminId);
        function addAdmin($userName,$pass,$Name);
        
    }
?>