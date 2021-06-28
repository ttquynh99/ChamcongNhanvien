<?php
 
header("Content-Type:application/json");
include('connection.php');
 
if (isset($_GET['id']) && $_GET['id']!="") {
 
$id = $_GET['id'];
$query = "SELECT * FROM `chucvu` WHERE id=$id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
$customerData['id'] = $row['ID'];
$customerData['ChucVu'] = $row['ChucVu'];

$response["status"] = "true";
$response["message"] = "Customer Details";
$response["customers"] = $customerData;
 
} else {
$response["status"] = "false";
$response["message"] = "No customer(s) found!";
}
echo json_encode($response); exit;
 
?>