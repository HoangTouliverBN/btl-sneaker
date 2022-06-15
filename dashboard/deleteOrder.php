<?php

require('../config/config.php');

$id = $_GET['id'];

$sql = "DELETE FROM orders WHERE id = $id";

$result = $conn->query($sql);

if ($result) {
    header('location:index.php');
}
