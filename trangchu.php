<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/trangchu.css">
</head>

<body>
    <div id="web">
    <?php include_once 'header.php'; include_once 'DAO/query.php';?>
        <div class="wrap">
            <p class="wrap_p">Mẫu HOT Trong Ngày</p>
            <?php $rs1 = getsp(0); ?>
            <div class="uuDaiTrongNgay">
            <?php for ($i=0; $i < sizeof($rs1); $i++) {
                    $anh = explode("&",$rs1[$i]['anh']);
                ?>
                    <div class="sp">
                        <a href="chitietsanpham.php?id=<?= $rs1[$i]['masanpham'] ?>"><img src="img/sanpham/<?= $anh[0] ?>" alt=""></a><br>
                        <p><a href="chitietsanpham.php?id=<?= $rs1[$i]['masanpham'] ?>"><?= substr($rs1[$i]['tensanpham'],0,50) ?></a></p>
                        <p><?= number_format($rs1[$i]['gia'] * ((100 - $rs1[$i]['khuyenmai'])/100)) ?> VNĐ</p>
                        <s style="font-size:14px;"><?= number_format($rs1[$i]['gia']) . " VNĐ" ?></s>
                    </div>
                <?php 
                } ?>
            </div>
            <p class="wrap_p">Mẫu HOT Năm 2021</p>
            <?php $rs2 = getsp(1); ?>
            <div class="mauHot">
                <?php for ($i=0; $i < sizeof($rs2); $i++) {
                    $anh = explode("&",$rs2[$i]['anh']);
                ?>
                    <div class="sp">
                        <a href="chitietsanpham.php?id=<?= $rs2[$i]['masanpham'] ?>">
                        <img src="img/sanpham/<?= $anh[0] ?>" alt=""></a><br>
                        <p><a href="chitietsanpham.php?id=<?= $rs2[$i]['masanpham'] ?>"><?= substr($rs2[$i]['tensanpham'],0,50) ?></a></p>
                        <p><?= number_format($rs2[$i]['gia'] * ((100 - $rs2[$i]['khuyenmai'])/100)) ?> VNĐ</p>
                        <s style="font-size:14px;"><?= number_format($rs2[$i]['gia']) . " VNĐ" ?></s>
                    </div>
                <?php 
                } ?>
            </div>
            <p class="wrap_p" style="text-align: center;">TẠI SAO CHỌN LIKEWATCH</p>
            <div class="wrap2">
                <div class="why">
                    <img src="img/why1.PNG" alt=""><br>
                    <p>BẢO HÀNH <br> TOÀN CẦU</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
                <div class="why">
                    <img src="img/why2.PNG" alt=""><br>
                    <p>NƠI MUA SẮM <br> ĐÁNG TIN CẬY</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
                <div class="why">
                    <img src="img/why3.PNG" alt=""><br>
                    <p>100% SẢN XUẤT<br> TẠI THỤY SĨ</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
                <div class="why">
                    <img src="img/why4.PNG" alt=""><br>
                    <p>THANH TOÁN <br> DỄ DÀNG</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
                <div class="why">
                    <img src="img/why5.PNG" alt=""><br>
                    <p>FREESHIP <br> TOÀN QUỐC</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
                <div class="why">
                    <img src="img/why6.PNG" alt=""><br>
                    <p>QUÀ TẶNG <br> BẤT NGỜ</p>
                    <br>
                    <h6>TÌM HIỂU THÊM</h6>
                </div>
            </div>
            <p class="wrap_p">THƯƠNG HIỆU NỔI BẬT</p>
            <div class="thuongHieu">
                <div class="img-ThuongHieu">
                    <a href=""><img src="img/fas1.PNG" alt=""></a>
                </div>
                <div class="img-ThuongHieu">
                    <a href=""><img src="img/fas2.PNG" alt=""></a>
                </div>
                <div class="img-ThuongHieu">
                    <a href=""><img src="img/fas3.PNG" alt=""></a>
                </div>
                <div class="img-ThuongHieu">
                    <a href=""><img src="img/fas4.PNG" alt=""></a>
                </div>
                <div class="img-ThuongHieu">
                    <a href=""><img src="img/fas5.PNG" alt=""></a>
                </div>
            </div>
        </div>
        <div class="wrap">
            <p class="wrap_p">BLOGS SPOT</p>
            <div class="blog">
                <div class="sub-blog">
                    <a href=""><img src="img/blog1.PNG" alt=""></a><br>
                    <a href="">RA MẮT TAG HEUER CARRERA BẤM GIỜ</a><br>
                    <h6>Thứ sáu, ngày 25/12/2020</h6>
                    <p>TAG Heuer vừa cho ra mắt mẫu đồng hồ
                        Carrera Chronograph Birthday Gold Limited Edition kỉ</p>
                    <p><a href="">Xem thêm</a></p>
                </div>
                <div class="sub-blog">
                    <a href=""><img src="img/blog2.PNG" alt=""></a><br>
                    <a href="">RA MẮT TAG HEUER CARRERA BẤM GIỜ</a><br>
                    <h6>Thứ sáu, ngày 25/12/2020</h6>
                    <p>TAG Heuer vừa cho ra mắt mẫu đồng hồ
                        Carrera Chronograph Birthday Gold Limited Edition kỉ</p>
                    <p><a href="">Xem thêm</a></p>
                </div>
                <div class="sub-blog">
                    <a href=""><img src="img/blog3.PNG" alt=""></a><br>
                    <a href="">RA MẮT TAG HEUER CARRERA BẤM GIỜ</a><br>
                    <h6>Thứ sáu, ngày 25/12/2020</h6>
                    <p>TAG Heuer vừa cho ra mắt mẫu đồng hồ
                        Carrera Chronograph Birthday Gold Limited Edition kỉ</p>
                    <p><a href="">Xem thêm</a></p>
                </div>
                <div class="sub-blog">
                    <a href=""><img src="img/blog4.PNG" alt=""></a><br>
                    <a href="">RA MẮT TAG HEUER CARRERA BẤM GIỜ</a><br>
                    <h6>Thứ sáu, ngày 25/12/2020</h6>
                    <p>TAG Heuer vừa cho ra mắt mẫu đồng hồ
                        Carrera Chronograph Birthday Gold Limited Edition kỉ</p>
                    <p><a href="">Xem thêm</a></p>
                </div>
            </div>
        </div>
        <div id="footer">
            <h1 style="text-align: center;">ƯU ĐÃI KHI NHẬP EMAIL</h1>
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