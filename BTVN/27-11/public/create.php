<?php
    require_once '../config/database.php';
    require_once '../controllers/productController.php';
    $db = DatabaseConfig::getConnection();

    $productController = new productController($db);
    


    $productController->create();
?>