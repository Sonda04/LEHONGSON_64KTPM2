<?php
    require_once('../config/database.php');
    require_once ('../controllers/productController.php');
    require_once('./Route.php');
// require_once ./Router.php;

    $db = DatabaseConfig::getConnection();

    $productController = new productController($db);
    if (isset($_SERVER['REQUEST_URI']) == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {
        $productController->index();
        exit();
        echo(isset($_SERVER['REQUEST_URI']));
        echo("home");
    }elseif(isset($_SERVER['REQUEST_URI']) == '/create' && $_SERVER['REQUEST_METHOD']=='GET'){

        $productController->create();

    }
     


?>
