<?php
 $products = [
    ['name' => 'Sản phẩm 1', 'price' => '1000'],
    ['name' => 'Sản phẩm 2', 'price' => '2000'],
    ['name' => 'Sản phẩm 3', 'price' => '3000']
 ];
 $csvw = fopen('data.csv','w');
    
    foreach($products as $product){
        fputcsv($csvw,$product);
    }

 fclose($csvw);
 ?>
