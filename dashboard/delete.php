<?php

require('../config/config.php');

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = $id";

$result = $conn->query($sql);

if ($result) {
    header('location:index.php');
}
