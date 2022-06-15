<?php
require_once './config/config.php';
session_start();

$target_dir    = "../asset/image/";
if (isset($_POST['checkSubmitForm'])) {
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $product_id = $_POST['product_id'];
    $totalPrice = $_POST['totalPrice'];
    $sqlInsert = "INSERT INTO `btl_sneaker`.`orders` (`name`, `phone_number`, `email`,`quantity`,`product_id`,`size`,`totalPrice`,`note`) VALUES ('$name','$phoneNumber','$email','$quantity','$product_id','$size','$totalPrice','$note');";
    $result = $conn->query($sqlInsert);
    if ($result) {
        return header("Location: ./store.php");
    } else {
        echo $result;
    }
}
