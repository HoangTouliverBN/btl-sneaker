<?php
$host = '127.0.0.1:3305';
$database ='btl_sneaker';
$user = 'root';
$password = '';

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die('Không thể kết nối');
}
