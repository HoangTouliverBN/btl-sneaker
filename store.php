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
                <h1 class="text-black header-title"><a href="#" class="header-title">2022 Sneaker</a></h1>

            </div>
            <form action="" method="POST">
                <input class="input-search" type="text" placeholder="Nhập tên sản phẩm">
                <button class="btn-submit-search">Tìm kiếm</button>
            </form>
        </div>
        <div class="divider-gray"></div>
    </header>

    <div class="container-custome mt-4">
        <section class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <img class="image-section1" width="400" height="400" src="https://cdn.vox-cdn.com/thumbor/NQCTg912dkuZZandsN1gG0YbA9w=/0x0:2000x1196/920x613/filters:focal(840x438:1160x758):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70267766/a16z_rtfkt_sneakers.0.jpg" alt="">
                </div>
                <div class="col-7">
                    <h2>Đây là giày</h2>
                    <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn-submit-search" data-toggle="modal" data-target="#exampleModal">Mua hàng</button>
                </div>
            </div>
        </section>
        <div class="divider-gray mt-4"></div>
    </div>

    <div class="container-custome mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col">
                    <div class="card">
                        <a href="">
                            <img src="https://cdn.vox-cdn.com/thumbor/NQCTg912dkuZZandsN1gG0YbA9w=/0x0:2000x1196/920x613/filters:focal(840x438:1160x758):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70267766/a16z_rtfkt_sneakers.0.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="">Card title</a></h5>
                            <p class="card-text"><a class="text-decoration-none text-dark" href="">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</a></p>
                            <button class="btn-submit-search" data-toggle="modal" data-target="#exampleModal">Mua hàng</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="divider-gray mt-4"></div>
    </div>

    <div class="container-custome mt-4">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
            <?php for ($i = 0; $i < 7; $i++) { ?>
                <div class="col <?php echo $i > 12 - 4 && $i < 12 ?  "" : "mb-4"  ?>">
                    <div class="card" style="width: 18rem;">
                        <a href="">
                            <img src="https://cdn.vox-cdn.com/thumbor/NQCTg912dkuZZandsN1gG0YbA9w=/0x0:2000x1196/920x613/filters:focal(840x438:1160x758):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70267766/a16z_rtfkt_sneakers.0.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none text-black" href="">Đây là giày</a></h5>
                            <p class="card-text"><a class="text-decoration-none text-dark" href="">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
                            <button class="btn-submit-search" data-toggle="modal" data-target="#exampleModal">Mua hàng</button>
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
                    <h1 class="text-white header-title">2022 Sneaker</h1>
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
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin mua hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Số lượng</label>
                            <input type="number" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Size</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Ghi chú</label>
                            <textarea class="form-control" aria-label="With textarea" rows="6"></textarea>

                        </div>
                        <img src="https://cdn.vox-cdn.com/thumbor/NQCTg912dkuZZandsN1gG0YbA9w=/0x0:2000x1196/920x613/filters:focal(840x438:1160x758):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70267766/a16z_rtfkt_sneakers.0.jpg" class="card-img-top" alt="...">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary hide-modal" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Đặt hàng</button>
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