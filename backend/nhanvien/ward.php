<option value="">Chọn Phường/Xã</option>

<?php 
include_once __DIR__ .'../../nhanvien/province/connect.php';
    
$sql = "SELECT * FROM ward where _district_id = ".$_POST["districtid"];
$result= mysqli_query($con, $sql); 
$data_ward = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data_ward [] = array(
        'nameward' => $row['_name'],
        'idward' =>$row['id'],
        'prefix' =>$row['_prefix']
    );
}
?>

<?php  foreach($data_ward as $ward): ?>
<option value="<?= $ward['idward'] ?>">
    <?= $ward['prefix']."&nbsp".$ward ['nameward'] ?>
</option>

<?php endforeach;?>
