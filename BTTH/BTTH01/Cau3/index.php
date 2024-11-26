<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Ma sinh vien</th>
                    <th>Password</th>
                    <th>Ho</th>
                    <th>Ten</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Course</th>

                </tr>
            </thead>
            <tbody>
            <?php 
                include "data.php";
                $rs = getdata();
                foreach($rs as $student ):
            ?>
            <tr>
                <td><?=$student->getMSV();?></td>
                <td><?=$student->getPass();?></td>
                <td><?=$student->getHo();?></td>
                <td><?=$student->getTen();?></td>
                <td><?=$student->getCity();?></td>
                <td><?=$student->getEmail();?></td>
                <td><?=$student->getCourse();?></td>
            </tr>
            <?php endforeach; ?>
            
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>