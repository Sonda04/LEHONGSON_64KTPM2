<?php
    require_once('../models/product_model.php');
    // require_once ('../controllers/productController.php');
    // require_once('../config/database.php');
// require_once ./Router.php;

    $db = DatabaseConfig::getConnection();

    class productController{
        private $productModel;
        public function __construct($db){
            $this->productModel = new productModel($db);

        }
        public function index(){
            $products = $this->productModel->getAllproduct();
            print_r($products);
            include '../views/index.php';
        }
        public function create(){
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $price = $_POST['price'];
                var_dump($name);
                $gia = (int)$price;
                var_dump($gia);
                $this->productModel->AddProduct($name,$gia);
                header("Location:index.php");
            }
            include '../views/new_View.php';
        }
        public function delete($id){
            $this->productModel->DeleteProduct($id);
            header("Location:index.php");
        }
        public function update($id){
            include '../views/updateView.php';
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

                $name = $_POST['name'];
                $price = $_POST['price'];
                $this->productModel->updateProduct($id,$name,$price);
                header("Location:../public/index.php");
            }

        }

    }
    // $productnew = new productController($db);
    // $productnew->create();
?>