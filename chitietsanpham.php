<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/chitietsanpham.css">
</head>

<body>
    <div id="web">
    <?php include_once 'header.php';include_once 'DAO/query.php'; ?>
        <?php if (isset($_REQUEST['id'])) {
            $masp = $_REQUEST['id'];
            $rs = getspbymasp($masp);
            $anh = explode("&",$rs[0]['anh']);
            
        ?>    
            <div class="wrap">
            <br>
            <div class="chitietsanpham">
                <p></p>
            </div>
            <div class="chitietsanpham">
                <div class="chitietsanpham-one">
                    <img src="img/sanpham/<?= $anh[0] ?>" alt="">
                </div>
                <div class="chitietsanpham-two">
                    <div style="width: 100%;display: flex;padding: 10px;
                    font-size: 20px;font-weight: bold;">
                        <div style="width: 50%;">
                            <p>SALVATORE FERRAGAMO</p>
                        </div>
                        <div style="width: 50%;">
                            Mã SP : <?= $rs[0]['masanpham'] ?> (Đọc mã này để cho nhân viên tư vấn)
                        </div>
                    </div>
                    <hr>
                    <br>
                    <p style="font-size: 22px;font-weight: bold;"><?= $rs[0]['tensanpham'] ?></p>
                    <div id="cost">
                        <p class="cost1">
                        Giá Bán : <b style="color: red;"><?= number_format($rs[0]['gia'] * ((100 - $rs[0]['khuyenmai'])/100)) ?> VNĐ</b>
                        <br>
                        <br>
                        Giá Gốc : <b style="color: red;"><?= number_format($rs[0]['gia']) ?> VNĐ</b>
                        </p>
                    </div>
                    <div class="khuyenmai">
                        <i class="fas fa-gift"></i> KHUYẾN MÃI
                    </div>
                    <form action="giohang.php" method="post">
                        <input type="hidden" name="st" value="true">
                        <input type="hidden" name="id" value="<?= $rs[0]['masanpham'] ?>">
                        <button type="submit">
                            MUA NGAY <br>
                            (Giao trong ngày hoặc nhận tại store)
                        </button>
                    </form>
                    <p>
                        › Mã sản phẩm: <?= $rs[0]['masanpham'] ?> <br>
                        › Nhập hàng 3-4 tuần <br>
                        › Miễn phí vận chuyển <br>
                        › Bảo hành 2 năm <br>
                        › Gọi (028) 3929 3939 hoặc (024) 3936 3939 để đặt hàng <br>
                    </p>
                    <h3 style="padding: 1em 0em;">NHẬP SỐ ĐIỆN THOẠI ĐỂ ĐƯỢC TƯ VẤN</h3>
                    <form id="formnumberphone" action="" method="post">
                        <input type="text" placeholder="Nhập số điện thoại của bạn....">
                        <button type="submit">Gửi</button>
                    </form>
                </div>
            </div>
            <h1 style="padding: 2em;text-align: center;">MÔ TẢ SẢN PHẨM</h1>
            <div class="motasanpham">
                THIẾT KẾ HIỆN ĐẠI CHO PHÁI MẠNH <br>
                <br>
                
                <br>
                <div style="width: 80%;margin: auto; display: flex;text-align: center;">
                    <img src="img/sanpham/<?= $anh[0] ?>" alt="" style="width: 30%;padding: 2%;object-fit: contain;">
                    <img src="img/sanpham/<?= $anh[1] ?>" alt="" style="width: 30%;padding: 2%;object-fit: contain;">
                </div>
                <br>
                
                <br>
                <div style="width: 80%;margin: auto; display: flex;text-align: center;">
                    <img src="img/sanpham/<?= $anh[2] ?>" alt="" style="width: 30%;padding: 2%;object-fit: contain;">
                    <img src="img/sanpham/<?= $anh[3] ?>" alt="" style="width: 30%;padding: 2%;object-fit: contain;">
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="wrap">
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