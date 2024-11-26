<?php
$products = [];
$csv = fopen('data.csv','r');
while(($rs = fgetcsv($csv)) !== false){
    array_push($products,$rs);
}
if (isset($_GET['name'])) {
$name = $_GET['name'];
$count = 0;
foreach($products as $product ){
    $count++;
    if($product[0] == $name){
        unset($products[$count-1]);
    }
}
$csvw = fopen('data.csv','w');
        
        foreach($products as $product){
            fputcsv($csvw,$product);
        }
    
     fclose($csvw);
header("Location:index.php");
}
?>
