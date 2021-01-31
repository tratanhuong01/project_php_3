<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/sanpham.css">
</head>

<body>
    <div id="web">
    <?php include_once 'header.php'; ?>
        <div class="wrap">
            <div class="spfull">
                <div class="spfull-one">
                    <p>THƯƠNG HIỆU</p>
                    <form action="" method="post">
                        <input type="text" placeholder="Nhập sản phẩm...">
                        <button type="submit">Tìm</button>
                    </form>
                    <p>LOẠI DÂY</p>
                    <div class="loc">
                        <input type="checkbox" name="" id="">Dây Kim Loại<br><br>
                        <input type="checkbox" name="" id="">Nhựa Tổng Hợp<br><br>
                        <input type="checkbox" name="" id="">Dây Cao Su<br><br>
                        <input type="checkbox" name="" id="">Vải<br><br>
                        <input type="checkbox" name="" id="">Dây Đá Caremic<br><br>
                        <input type="checkbox" name="" id="">Chất Liệu Khác<br><br>
                    </div>
                    <p>GIÁ</p>
                    <div class="loc">
                        <input type="checkbox" name="" id="">100.000 VNĐ - 500.000 VNĐ<br><br>
                        <input type="checkbox" name="" id="">1.000.000 VNĐ - 3.000.000 VNĐ<br><br>
                        <input type="checkbox" name="" id="">3.000.000 VNĐ - 5.000.000 VNĐ<br><br>
                        <input type="checkbox" name="" id="">5.000.000 VNĐ - 7.000.000 VNĐ<br><br>
                        <input type="checkbox" name="" id="">7.000.000 VNĐ - 10.000.000 VNĐ<br><br>
                        <input type="checkbox" name="" id="">10.000.000 VNĐ - 30.000.000 VNĐ<br><br>
                    </div>
                </div>
                <div class="spfull-two">
                    <?php 
                        
                        $loaisp = (isset($_REQUEST['loaisp'])) ? $_REQUEST['loaisp'] : "";
                        $boLoc = (isset($_POST['boLoc'])) ? $_POST['boLoc'] : "";
                        $rs = getspbyloaisp(get1($loaisp,$boLoc));
                    ?>
                    <form action="" method="POST" id="boloc">
                        <select name="boLoc" >
                            <option value="tc">Tất Cả</option>
                            <option value="td">Tăng Dần</option>
                            <option value="gd">Giảm Dần</option>
                            <option value="yt">Yêu Thích</option>
                        </select>
                        <input type="hidden" name="loasp" value="<?= $loaisp ?>">
                        <button type="submit">OK</button>
                    </form>

                    <div class="mauHot1">
                        <?php for ($i=0; $i < sizeof($rs); $i++) { 
                            $anh = explode("&",$rs[$i]['anh']);
                        ?>
                            <div class="sp1">
                                <a href="chitietsanpham.php?id=<?= $rs[$i]['masanpham'] ?>"><img src="img/sanpham/<?= $anh[0] ?>" alt=""></a><br>
                                <p><a href="chitietsanpham.php?id=<?= $rs[$i]['masanpham'] ?>"><?= substr($rs[$i]['tensanpham'],0,40) ?></a></p>
                                <p><?= number_format($rs[$i]['gia'] * ((100 - $rs[$i]['khuyenmai'])/100)) ?> VNĐ</p>
                                <s style="font-size:14px;"><?= number_format($rs[$i]['gia']) . " VNĐ" ?></s>
                            </div>
                        <?php } ?>
                    </div>
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