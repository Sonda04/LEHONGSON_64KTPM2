<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loài hoa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
<!-- Bootstrap JS and dependencies -->  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .flower-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .flower-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
        }
        .flower-info {
            max-width: calc(100% - 120px);
        }
        .flower-info h2 {
            margin: 0 0 10px;
            color: #555;
        }
        .flower-info p {
            margin: 0;
            color: #777;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">User <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      
</nav>
    </header>
    <div class="container">
        <h1>Danh sách các loài hoa</h1>
        <?php 
            $flowers = [];
            $csv = fopen('datahoa.csv','r');
            while(( $rs = fgetcsv($csv)) !== false){
                array_push($flowers,$rs);
            }
            fclose($csv);
            
                foreach($flowers as $rs):
                    $strpath1 = 'image/'.$rs[0].'-1.jpg';
                    $strpath2 = 'image/'.$rs[0].'-2.jpg';
    
                   
                ?>

                <!-- Bắt đầu hiển thị từng loại hoa -->
                <div class="flower-card">
                    <img src=<?=$strpath1?>>
                    <img src=<?=$strpath2?>>
                    <div class="flower-info">
                        <h2><?php echo($rs[0]);?>.<?php echo($rs[1]);?></h2>
                        <p><?php echo($rs[2]);?></p>
                    </div>
                </div>
        <?php 
    endforeach;
    ?>
        
    </div>
</body>
</html>