<?php
    $flowers = [];
    $csv = fopen('datahoa.csv','r');
    while(( $rs = fgetcsv($csv)) !== false){
        array_push($flowers,$rs);
    }
    fclose($csv);

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Xử lý upload ảnh
    $so = sizeof($flowers)+1;
    $imagePath1 = '';
    if (!empty($_FILES['image1']['name'])) {
        $targetDir = "image/";
        $imagePath1 = $targetDir . strtolower($so).'-1.jpg';
        if (!move_uploaded_file($_FILES['image1']['tmp_name'], $imagePath1)) {
            echo "Lỗi khi tải ảnh 1 lên.";
            exit;
        }
    }
    $imagePath2 = '';
    if (!empty($_FILES['image2']['name'])) {
        $targetDir = "image/";
        $imagePath2 = $targetDir . strtolower($so).'-2.jpg';
        if (!move_uploaded_file($_FILES['image2']['tmp_name'], $imagePath2)) {
            echo "Lỗi khi tải ảnh 2 lên.";
            exit;
        }
    }
    $flower = [sizeof($flowers)+1,$name,$description];
    $csvw = fopen('datahoa.csv','a');
    
        fputcsv($csvw,$flower);

    fclose($csvw);
    header("Location: admin.php");
    print_r($flower);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Information and Upload Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Your flower Information Form</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Họ tên -->
            <div class="form-group">
                <label for="fullName">Ten hoa</label>
                <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your your flower name" required>
            </div>
            <!-- Mo ta -->
            <div class="form-group">
                <label for="Description">Your flower desc</label>
                <input type="text" class="form-control" id="fullName" name="description" placeholder="Enter your flower desc" required>
            </div>
            
            <!-- Upload Ảnh -->
            <div class="form-group">
                <label for="profilePicture">Upload Anh 1</label>
                <input type="file" class="form-control-file" id="profilePicture" name="image1" accept="image/*" required>
            </div>
            <!-- Upload Ảnh -->
            <div class="form-group">
                <label for="profilePicture">Upload Anh 1</label>
                <input type="file" class="form-control-file" id="profilePicture" name="image2" accept="image/*" required>
            </div>
            <!-- Submit -->
            <button type="submit" class="btn btn-primary btn-block">Them</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
