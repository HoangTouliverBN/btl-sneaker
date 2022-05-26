<?php
require_once("../config/config.php");
$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id = $id";

$result = $conn->query($sql);

$product = $result->fetch_assoc();

$target_dir    = "../asset/image/";
if (isset($_POST['checkSubmitForm'])) {
    var_dump($_FILES);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    if (isset($_FILES["fileupload"]) && $_FILES["fileupload"]['error'] == 0) {
        $target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);
        move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
        var_dump($target_file);
        die;
    } else {
        $target_file = $product["image"];
    }
    $sqlUpdate = "UPDATE btl_sneaker.products SET `name` = '$name' , `description` = '$description', `price` = '$price',`image` = '$target_file' WHERE id = $id;";
    var_dump($sqlUpdate);
    $result = $conn->query($sqlUpdate);

    if ($result) {
        return header("Location: ./index.php");
    } else {
        echo $result;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/dashboardIndex.css">
</head>

<body>
    <header class="container-custome mt-4">
        <div class="divider-red"></div>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <ul class="d-flex m-0 mt-2">
                    <li class="socialIcon">
                        <a class="socialColor">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="socialIcon">
                        <a class="socialColor">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="socialIcon">
                        <a class="socialColor">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="socialIcon">
                        <a class="socialColor">
                            <i class="fab fa-skype"></i>
                        </a>
                    </li>
                </ul>

                <h1 class="text-black header-title">2022 Sneaker</h1>
            </div>
            <form action="" method="POST">
                <input class="input-search" type="text" placeholder="Nhập tên sản phẩm">
                <button class="btn-submit-search">Tìm kiếm</button>
            </form>
        </div>
        <div class="divider-gray"></div>
    </header>
    <div class="container mt-4">
        <h1 class="text-center">Cập nhật sản phẩm</h1>
        <form action="" class="pl-5 pr-5" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="recipient-name" value="<?php echo $product["name"] ?>">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Mô tả</label>
                <input type="text" class="form-control" name="description" id="recipient-name" value="<?php echo $product["description"] ?>">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Giá tiền</label>
                <input type="price" class="form-control" name="price" id="recipient-name" value="<?php echo $product["price"] ?>">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Hình ảnh</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="fileupload" id="fileupload" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01"></label>
                </div>
            </div>
            <div class="text-center mt-3 mb-3">
                <img width="30%" height="180" src="<?php echo $product["image"] ?>" class="image-section1" alt="...">
            </div>
            <div class="d-none">
                <input type="text" name="checkSubmitForm" value=true readonly>
            </div>

            <div class="text-center">
                <button class="btn-submit-search">Cập nhật</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#submit-form").submit(function() {
                e.preventDefault();
            })
        })
    </script>
</body>

</html>