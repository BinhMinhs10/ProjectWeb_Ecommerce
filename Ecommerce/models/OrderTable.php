<?php
    class OrderTable{
        private $orderId;
        private $tranId;
        private $productId;         
        private $quantity;   
        private $status;
        private $databaseConnection;
        
        
        function __construct($orderId, $tranId, $productId, $quantity, $status, $databaseConnection) {
            $this->orderId = $orderId;
            $this->tranId = $tranId;
            $this->productId = $productId;
            $this->quantity = $quantity;
            $this->status = $status;
            $this->databaseConnection = $databaseConnection;
        }
        function getOrderTable($orderId){
            return $databaseConnection->getOrderTable($orderId);
        }
        function getOrderId() {
            return $this->orderId;
        }

        function getTranId() {
            return $this->tranId;
        }

        function getProductId() {
            return $this->productId;
        }

        function getQuantity() {
            return $this->quantity;
        }

        function getStatus() {
            return $this->status;
        }

        function setOrderId($orderId) {
            $this->orderId = $orderId;
        }

        function setTranId($tranId) {
            $this->tranId = $tranId;
        }

        function setProductId($productId) {
            $this->productId = $productId;
        }

        function setQuantity($quantity) {
            $this->quantity = $quantity;
        }

        function setStatus($status) {
            $this->status = $status;
        }



                
    }
?>