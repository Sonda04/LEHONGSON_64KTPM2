<?php
$flowers = [];
$csv = fopen('datahoa.csv','r');
while(( $rs = fgetcsv($csv)) !== false){
    array_push($flowers,$rs);
}
fclose($csv);
$id = $_GET['id'];

// Xóa bản ghi
$count = sizeof($flowers);
for($i = $id-1; $i < $count;$i++){
    $flowers[$i] = $flowers[$i+1];
    $flowers[$i][0] = $i+1;
    
}
//array_splice($flowers,$count,$count);
unset($flowers[$count]);
//unset($flowers[sizeof($flowers)]);
$csvw = fopen('datahoa.csv','w');
    
    for($i = 0; $i < $count-1;$i++){
        fputcsv($csvw,$flowers[$i]);
    }

    fclose($csvw);
header("Location: admin.php");
    

//header("Location: index.php");
?>
