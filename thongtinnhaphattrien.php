<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/giohang.css">
    <style>
        .thongtin {
            width: 80%;
            margin: auto;
            background-color: white;
            padding: 2em;
            display: flex;
        }

        .thongtin1 {
            width: 45%;
            padding: 2.5%;
            border: 14px solid orange;
            margin: 2em;
        }

        .thongtin1 table {
            width: 100%;
            font-weight: bold;
            font-size: 17px;
        }

        .thongtin1 table tr td:nth-child(1) {
            width: 25%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="web">
    <?php include_once 'header.php'; ?>
        <div class="thongtin">
            <div class="thongtin1">
                <table>
                    <tr>
                        <td>Họ Tên</td>
                        <td>Phan Ngọc Thịnh</td>
                    </tr>
                    <tr>
                        <td>Ngày Sinh</td>
                        <td>01/01/2001</td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td>0981763***</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>pnthinh.19@cit.udn.vn</td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td>Hiệp Đức Quảng Nam</td>
                    </tr>
                </table>
            </div>
            <div class="thongtin1">
                <table>
                    <tr>
                        <td>Họ Tên</td>
                        <td>Phạm Nguyễn Viết Cảnh</td>
                    </tr>
                    <tr>
                        <td>Ngày Sinh</td>
                        <td>01/01/2001</td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td>0981763***</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>pnvcanh.19@cit.udn.vn</td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td>Duy Xuyên Quảng Nam</td>
                    </tr>
                </table>
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