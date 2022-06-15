<?php
require_once './config/config.php';
session_start();

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM btl_sneaker.products WHERE `name` like '%$search%' order by id DESC ;";
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
    $j = 0;
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
    <link rel="stylesheet" href="./styles/store.css">
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
                <h1 class="text-black header-title"><a href="./store.php" class="header-title">2022 Sneaker</a></h1>

            </div>
            <form action="./search.php" method="POST">
                <input class="input-search" type="text" name="search" placeholder="Nhập tên sản phẩm">
                <button class="btn-submit-search">Tìm kiếm</button>
            </form>
        </div>
        <div class="divider-gray"></div>
    </header>

    <div class="container-custome mt-4">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
            <?php foreach ($products as $product) {
                $j++  ?>
                <div class="col <?php echo $j > 12 - 4 && $j < 12 ?  "" : "mb-4"  ?>">
                    <div class="card" style="width: 18rem;">
                        <a href="">
                            <img src="./asset/image/<?php echo $product["image"] ?>" height="200" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none text-black" href=""><?php echo $product["name"] ?></a></h5>
                            <p class="card-text"><?php echo $product["description"] ?></p>
                            <p class="card-text">Giá: <?php echo number_format($product["price"], 0, "", ",") ?></p>
                            <button class="btn-submit-search show-modal" onclick="pickImage(`<?php echo $product['image'] ?>`,`<?php echo $product['name'] ?>`,`<?php echo $product['price'] ?>`,`<?php echo $product['id'] ?>`)" data-toggle="modal" data-target="#exampleModal">Mua hàng</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="divider-gray mt-4"></div>
    </div>

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


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin mua hàng <br> <span id="name"></span> <br> <span id="price"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="./submitOrder.php" class="form-submit">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Họ và tên<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nameInput" name="name">
                            <label id="errorName" class="text-danger m-0"></label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Số điện thoại<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber">
                            <label id="errorPhoneNumber" class="text-danger m-0"></label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Địa chỉ<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address">
                            <label id="errorAddress" class="text-danger m-0"></label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Số lượng<span class="text-danger">*</span></label>
                            <input type="number" onchange="handleChangeQuantity(value)" min="1" class="form-control" id="quantity" name="quantity">
                            <label id="errorQuantity" class="text-danger m-0"></label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tổng tiền</label>
                            <input type="number" class="form-control" readonly id="totalPrice" name="totalPrice">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Size<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="size" name="size">
                            <label id="errorSize" class="text-danger m-0"></label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Ghi chú</label>
                            <textarea class="form-control" aria-label="With textarea" rows="6" name="note"></textarea>
                        </div>
                        <div class="d-none">
                            <input type="text" name="checkSubmitForm" id="checkSubmitForm" value=true readonly>
                            <input type="number" name="product_id" id="product_id" value="" readonly>
                        </div>
                        <img id="imageModal" height="350" src="" class="card-img-top" alt="...">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary hide-modal" data-dismiss="modal">Đóng</button>
                    <button class="btn btn-primary" type="submit" id="submit">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }
        let price;
        let error = true;

        function pickImage(value, value2, value3, value4) {
            price = value3;
            $("#name").text(value2);
            $("#price").text("Giá: " + formatNumber(value3));
            $("#imageModal").attr("src", "./asset/image/" + value);
            $("#product_id").attr("value", value4);
        }

        function handleChangeQuantity(value) {
            if (value < 1) {
                error = false;
                $("#errorQuantity").show();
                $("#errorQuantity").text("Số lượng phải lớn hơn 1")
            }
            $("#totalPrice").attr("value", value * price);
        }
        $(function() {

            function resetValidation() {
                $("#errorQuantity").hide();
                $("#errorName").hide();
                $("#errorAddress").hide();
                $("#errorPhoneNumber").hide();
                $("#errorSize").hide();
            }

            function checkValidation(items, errorItems) {
                for ($i = 0; $i < items.length; $i++) {
                    if ($(items[$i]).val() == "") {
                        error = false;
                        $(errorItems[$i]).text("Không bỏ trống phần này")
                        $(errorItems[$i]).show();
                    }
                }
            }

            $("#submit").click(function() {
                error = true;
                $("#errorQuantity").hide();
                resetValidation();
                items = ["#nameInput", "#quantity", "#size", "#address", "#phoneNumber"];
                errorItems = ["#errorName", "#errorQuantity", "#errorSize", "#errorAddress", "#errorPhoneNumber"];
                handleChangeQuantity($("#quantity").val());
                checkValidation(items, errorItems);
                if (error) {
                    $("form").submit();
                }
            })
        })
    </script>
</body>

</html>