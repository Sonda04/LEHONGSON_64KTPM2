<?php
    require_once '../config/database.php';
    require_once '../controllers/productController.php';
    $db = DatabaseConfig::getConnection();
    
    $productController = new productController($db);

    


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $productController->update($id);
        // header("Location: index.php");
    }
    
?>