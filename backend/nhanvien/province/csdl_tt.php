<?php 
    include_once __DIR__ .'../../province/connect.php';

    $sql = "SELECT * FROM province";
    $result = mysqli_query($con,$sql);
    $data = [];
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $data[]= array(
            'idprovince' => $row['id'],
            'nameprovince'=> $row['_name']
        );
    }
?>