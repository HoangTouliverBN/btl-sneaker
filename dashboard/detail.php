<?php
require_once("../config/config.php");
$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";

$result = $conn->query($sql);

$product = $result->fetch_assoc();
$uuid = 0;
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
            <form action="" method="POST" id="search">
                <input class="input-search" type="text" placeholder="Nhập tên sản phẩm">
                <button class="btn-submit-search" for="search">Tìm kiếm</button>
            </form>
        </div>
    </header>
    <div class="cotnainer-custome mt-4">
        <div class="container-custome mt-4">
            <section class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <img class="image-section1" width="400" height="400" src="<?php echo  $product["image"] ?>" alt="">
                    </div>
                    <div class="col-7">
                        <h2><?php echo  $product["name"] ?></h2>
                        <p>Mô tả:
                            <?php echo  $product["description"] ?></p>
                        <p>Giá: <?php echo number_format($product["price"], 0, '.') ?></p>
                    </div>
                </div>
            </section>
            <div class="text-center">
                <a href="./index.php" class="btn-submit-back pr-4 pl-4 mr-4">Trở về</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container-custome mt-4">
            <div class="row p-2">
                <div class="col-8">
                    <h1 class="text-white header-title">2022 Sneaker</h1>
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