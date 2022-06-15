<?php
require_once("../config/config.php");
if (isset($_POST["search"])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM btl_sneaker.products WHERE `name` like '%$search%' order by id DESC ;";
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $sql = "SELECT * FROM products  order by id DESC; ";
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
}
$sqlOrder = "SELECT orders.*, products.name as nameProduct, products.image  FROM btl_sneaker.orders INNER JOIN btl_sneaker.products on orders.product_id = products.id  order by id DESC ;";
$result2 = $conn->query($sqlOrder);
$orders = $result2->fetch_all(MYSQLI_ASSOC);


$uuid = 0;
$uuidOrder = 0;
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
                <h1 class="text-black header-title"><a href="../store.php" class="header-title">2022 Sneaker</a></h1>

            </div>
            <form action="./index.php" method="POST">
                <input class="input-search" type="text" name="search" placeholder="Nhập tên sản phẩm">
                <button class="btn-submit-search">Tìm kiếm</button>
            </form>
        </div>
        <div class="divider-gray"></div>
        <div class="container-custome mt-4">
            <nav class="d-flex justify-content-between">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active navbar-custome" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sản phẩm</a>
                    <a class="nav-link navbar-custome" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đơn đặt hàng</a>
                </div>
                <div>
                    <a href="./create.php" class="btn-submit-search">Thêm sản phẩm mới</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table">
                        <thead class="thead-dark background-table-custome">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : $uuid++ ?>
                                <tr>
                                    <th scope="row"><?php echo $uuid ?></th>
                                    <td><?php echo $product["name"] ?></td>
                                    <td><?php echo $product["description"] ?></td>
                                    <td><?php echo number_format($product["price"], 0, "", ".") ?></td>
                                    <td class="div-image-table"><img class="image-table" src="../asset/image/<?php echo $product["image"] ?>" alt=""></td>
                                    <td>
                                        <a href="./update.php?id=<?php echo $product["id"] ?>" class="socialColor"><i class="fas fa-pen"></i></a>
                                        <a href="./detail.php?id=<?php echo $product["id"] ?>" class="socialColor mr-2 ml-2"><i class="fas fa-eye"></i></a>
                                        <a href="./delete.php?id=<?php echo $product["id"] ?>" class="socialColor"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table">
                            <thead class="thead-dark background-table-custome">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) : $uuidOrder++   ?>
                                    <tr>
                                        <th scope="row"><?php echo $uuidOrder ?></th>
                                        <td><?php echo $order['name'] ?></td>
                                        <td><?php echo $order['phone_number'] ?></td>
                                        <td><?php echo $order['email'] ?></td>
                                        <td><?php echo $order['nameProduct'] ?></td>
                                        <td><?php echo $order['quantity'] ?></td>
                                        <td><?php echo $order['size'] ?></td>
                                        <td><?php echo $order['totalPrice'] ?></td>
                                        <td><?php echo $order['note'] ?></td>
                                        <td class="div-image-table"><img class="image-table" src="../asset/image/<?php echo $order['image'] ?>" alt=""></td>
                                        <td>
                                            <a href="./deleteOrder.php?id=<?php echo $order["id"] ?>" class="socialColor"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="footer">
        <div class="container-custome mt-4">
            <div class="row p-2">
                <div class="col-8">
                    <h1 class="header-title text-white">2022 Sneaker</h1>
                    <p class="text-white">Địa chỉ: Đ. Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội, Việt Nam <br> Số điện thoại: 039xxxxxxx <br>Email: contact@gmail.com</p>
                </div>
                <div class="col-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8807222035275!2d105.77214005000697!3d21.037458085924914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b6240401b9%3A0xb41bb48d633e1b80!2zxJDhuqFpIEjhu41jIFRoxrDGoW5nIE3huqFp!5e0!3m2!1svi!2s!4v1653188917310!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
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