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
}
