<?php
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
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
    $sql = "UPDATE `drugs` 
    SET `Name`='$name',`Type`='$Type',`barcode`='$barcode',`dose`='$dose',`code`='$code',`cost_price`='$cost_price',`selling_price`='$selling_price',`expiry`='$expiry',`company_name`='$company_name',`production_date`='$production_date',`expiration_date`='$expiration_date',`place`='$place',`quantity`='$quantity' 
    WHERE `ID` = $id";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        //Query Executed and Admin Updated
        $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
        //Redirect to Manage Admin Page
        header('Location:' . SITEURL . 'detail-drug.php');
    } else {
        //Failed to Update Admin
        $_SESSION['update'] = "<div class='error'>Failed to Delete Admin.</div>";
        //Redirect to Manage Admin Page
    }
}
?>
