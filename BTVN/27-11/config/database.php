<?php
class DatabaseConfig{
 const HOST = 'localhost:3305';
 const DB_NAME = 'product';
 const USERNAME = 'root';
 const PASSWORD = '';
 public static function getConnection() {
 try {
 $dsn = 'mysql:host=' . self::HOST . ';dbname=' . 
self::DB_NAME;
 $connection = new PDO($dsn, self::USERNAME, 
self::PASSWORD);
 $connection->setAttribute(PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION);
 return $connection;
 } catch (PDOException $e) {
 echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
 exit;
 }
 }
 }
 ?>