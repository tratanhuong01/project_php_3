<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/giohang.css">
</head>

<body>

    <div id="web">
    <?php include_once 'header.php'; include_once 'DAO/query.php' ?>
        <?php 
            if (isset($_POST['st']) && isset($_POST['id'])) {
                $masp = $_POST['id'];
                insertgiohang(session_id(),$masp,1);
            }
            else if (isset($_POST['delete']) && isset($_POST['id'])) {
                $masp = $_REQUEST['id'];
                deletegiohang(session_id(),$masp);
            }
            else if (isset($_POST['update']) && isset($_POST['id'])) {
                $masp = $_REQUEST['id'];
                $soLuong = $_POST['soLuong'];
                updategiohang(session_id(),$masp,$soLuong);
            }
        ?>
        <div class="wrap">
            <h2 style="padding: 1em; text-align: center;">GIỎ HÀNG</h2>
            <h3 style="padding-bottom: 1em;">SẢN PHẨM</h3>
            <?php $rs = getgiohangbyid(session_id()); 
                $tongTien = 0;
                $soLuong = 0;
                for ($i=0; $i < sizeof($rs); $i++) {
                    $tongTien += ($rs[$i]['gia'] * ((100 - $rs[$i]['khuyenmai'])/100)) * $rs[$i]['soluong'];
                    $soLuong += $rs[$i]['soluong'];
                    $anh = explode("&",$rs[$i]['anh']);
            ?>
            <div class="giohang">
                <div class="giohang-one">
                    <div class="giohang-one-1">
                        <img src="img/sanpham/<?= $anh[0] ?>" alt="">
                    </div>
                    <div class="giohang-one-2">
                        <p><a href=""><?= $rs[$i]['tensanpham'] ?></a></p>
                        <br>
                        <p>Mã SP : <?= $rs[$i]['masanpham'] ?></p>
                        <p>Salvatore Ferragamo</p>
                    </div>
                </div>
                <div class="giohang-two">
                    <form action="giohang.php" method="POST">
                        <input type="hidden" name="id" value="<?= $rs[$i]['masanpham'] ?>">
                        <input type="number" name="soLuong" value="<?= $rs[$i]['soluong'] ?>">
                        <button type="submit" name="update">Sửa</button>
                    </form>
                </div>
                <div class="giohang-three">
                    <p style="text-align: center;">
                    <?= number_format(($rs[$i]['gia'] * ((100 - $rs[$i]['khuyenmai'])/100)) * $rs[$i]['soluong']) ?> VNĐ</p>
                    <form action="giohang.php" method="post">
                    <input type="hidden" name="delete" id="" value="true">
                    <input type="hidden" name="id" id="" value="<?= $rs[$i]['masanpham'] ?>">
                    <button type="submit">Xóa</button> 
                    </form>  
                </div>
            </div>
            <?php } ?>
            <div class="giohang">
                <div class="giohang-one" >
                    <h2 style="text-align: center;">TỔNG CỘNG</h2>
                </div>
                <div class="giohang-two">
                    <h2 style="text-align: center;"><?= $soLuong ?></h2>
                </div>
                <div class="giohang-three">
                    <h2 style="text-align: center;"><p style="text-align: center;">
                    <?= number_format($tongTien) ?> VNĐ</p></h2>
                </div>
            </div>
        </div>
        <div id="footer">
            <h1 style="text-align: center;padding: 2em;">ƯU ĐÃI KHI NHẬP EMAIL</h1>
            <div class="form-type-email">
                <form action="" method="post">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email">
                    <button type="submit">Enter</button>
                </form>
                <img src="img/logo.PNG" alt="">
            </div>
            <div class="footer-sub">
                <div class="footer-sub-1">
                    <h1>DỊCH VỤ SỬA CHỮA</h1>
                    <ul>
                        <li><a href="">BẢO QUẢN ĐỒNG HỒ</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">QUYỀN RIÊNG TƯ</a></li>
                        <li><a href="">CHÍNH SÁCH BẢO HÀNH</a></li>
                    </ul>
                </div>
                <div class="footer-sub-1">
                    <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
                    <ul>
                        <li><a href="">ĐỊA CHỈ</a></li>
                        <li><a href="">GIỚI THIỆU VỀ LIKEWATCH</a></li>
                    </ul>
                </div>
                <div class="footer-sub-1">
                    <h1>LIÊN KẾT VỚI CHÚNG TÔI</h1>
                    <ul class="submee">
                        <li><a href=""><img src="img/f1.png" alt=""></a></li>
                        <li><a href=""><img src="img/f2.png" alt=""></a></li>
                        <li><a href=""><img src="img/f3.png" alt=""></a></li>
                        <li><a href=""><img src="img/f4.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <hr style="width: 80%;margin: auto;">
            <div class="footer-sub">
                <div class="footer-col">
                    <div class="block">
                        <p class="block_title"><strong>CÔNG TY CỔ PHẦN TRANG SỨC VÀ <a href="https://likewatch.com">ĐỒNG
                                    HỒ
                                    THUỴ SĨ</a></strong></p>
                    </div>
                    <div class="block">
                        <p class="block_title"><strong>SHOWROOM TP HCM:</strong></p>
                        <p>
                            TẦNG 5, TOÀ NHÀ OPERA VIEW, 161 ĐỒNG KHỞI, <br>
                            QUẬN 1, TP HỒ CHÍ MINH. <br>
                            ĐIỆN THOẠI: (028) 3929 3939
                        </p>
                    </div>
                    <br>
                    <br>
                    <div class="block">
                        <p class="block_title"><strong>EMAIL:</strong></p>
                        <p>
                            SUPPORT@LIKEWATCH.COM <br>
                            MÃ SỐ DOANH NGHIỆP: 0313267315
                        </p>
                    </div>

                </div>
                <div class="footer-col">
                    <div class="block">
                        <p class="block_title"><strong>&nbsp;</strong></p>
                    </div>
                    <div class="block">
                        <p class="block_title"><strong>SHOWROOM HÀ NỘI: </strong></p>
                        <p>
                            TẦNG 6, TOÀ NHÀ CORNERSTONE, 16 PHAN CHU TRINH, <br>
                            QUẬN HOÀN KIẾM, HÀ NỘI <br>
                            ĐIỆN THOẠI: (024) 3936 3939
                        </p>
                    </div>

                    <div class="block">
                        <img src="img/fot.PNG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>