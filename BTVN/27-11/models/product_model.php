<?php
    class productModel{
        private $conn;
        public function __construct($db){
            $this->conn = $db;
        }
        public function getAllproduct(){
            $sql = "SELECT * FROM product_table";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function AddProduct($name,$gia){
            $sql = "insert into product_table(Ten,Gia) values(:Ten,:Gia)";
            $smt = $this->conn->prepare($sql);
            // echo(var_dump($gia));
            $smt->execute(['Ten' => $name,'Gia'=>$gia]);
            
        }
        public function DeleteProduct($id){
            $sql = "delete from product_table where id = :id";
            $smt = $this->conn->prepare($sql);
            $smt->execute(['id' => $id]);
        }
        public function updateProduct($id,$ten,$gia){
            $sql = 'update product_table set Ten = :ten, Gia = :gia where id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id,'ten'=>$ten,'gia'=>$gia]);
        }
    }
?>