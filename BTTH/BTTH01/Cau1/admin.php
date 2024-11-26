<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
<!-- Bootstrap JS and dependencies -->  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">User <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      
</nav>
    </header>
    <div class="container">
        <h1>Quản lý hoa</h1>
        <a href="create.php">+ Thêm hoa mới</a>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
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
                    <tr>
                        <td><?php echo$rs[0] ;?></td>
                        <td><?php echo $rs[1]; ?></td>
                        <td><?php echo $rs[2];?></td>
                        <td><img src="<?=$strpath1?>" width="100"> <img src="<?=$strpath2?>" width="100"></td>
                        
                        <td class="actions">
                            <a href="update.php?id=<?= $rs[0] ?>">Sửa</a>
                            <a href="delete.php?id=<?= $rs[0] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>