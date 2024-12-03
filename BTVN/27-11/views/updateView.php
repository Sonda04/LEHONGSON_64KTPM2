<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suwa moi</title>
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