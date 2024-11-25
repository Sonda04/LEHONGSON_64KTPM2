<?php
$products = [];
$csv = fopen('data.csv','r');
while(($rs = fgetcsv($csv)) !== false){
    array_push($products,$rs);
}
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    echo($price);
    $new = [$name,$price];
    array_push($products,$new);
    $csvw = fopen('data.csv','w');
        
        foreach($products as $product){
            fputcsv($csvw,$product);
        }
    
     fclose($csvw);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theem moi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form method = "POST" enctype="multipart/form-data">
  <div class="form-group" >
    <label for="name">Ten san pham</label>
    <input type="text" class="form-control" name = "name" id="name" placeholder="Enter your product name">
    </div>
    <div class="form-group" >
    <label for="price">price</label>
    <input type="text" class="form-control" name = "price" id="price" placeholder="Enter your product price">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>