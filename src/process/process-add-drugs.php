<?php

$name = $_POST['name'];
$Type = $_POST['type'];
$barcode = $_POST['barcode'];
$dose = $_POST['dose'];
$code = $_POST['code'];
$cost_price = $_POST['cost_price'];
$selling_price = $_POST['selling_price'];
$expiry = $_POST['expiry'];
$company_name = $_POST['company_name'];
$production_date = $_POST['production_date'];
$expiration_date = $_POST['expiration_date'];
$place = $_POST['place'];
$quantity = $_POST['quantity'];
include '/xampp/htdocs/KTGK/src/config/config.php';

// Bước 02:
$sql = "INSERT INTO `drugs`(`Name`, `Type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) 
VALUES ('$name','$Type','$barcode','$dose','$code','$cost_price','$selling_price','$expiry','$company_name','$production_date','$expiration_date','$place','$quantity')";

$result = mysqli_query($conn, $sql);
// Bước 03:
if ($result > 0) {
    header('Location:'.SITEURL.'list-drugs.php');
} else {
    echo "Lỗi!";
}


//Bước 04: Đóng kết nối
mysqli_close($conn);
