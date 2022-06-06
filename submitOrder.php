<?php 
require_once './config/config.php';
session_start();

$target_dir    = "../asset/image/";
if (isset($_POST['checkSubmitForm'])) {
    var_dump($_POST);
}
