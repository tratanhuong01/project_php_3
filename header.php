<?php session_start();include_once 'DAO/query.php'; ?>

<div class="wrap">
            <div class="header">
                <div class="hd-one">
                    <a href="trangchu.php"><img src="img/logo.PNG" alt=""></a>
                </div>
                <div class="hd-two">
                    <form action="" method="post">
                        <input type="text" name="text" placeholder="Quý khách muốn tìm thương hiệu gì ?">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div id="hd-two-1">
                        <p>GỌI CHÚNG TÔI</p>
                        <p>0987654321</p>
                    </div>
                </div>
                <div class="hd-three">
                    <div class="hd-three-1">
                        <button>HỆ THỐNG <br> Cửa Hàng </button>
                    </div>
                    <div class="tymcart">
                        <i class="fas fa-heart"></i>
                        <span id="tym">0</span>
                    </div>
                    <div class="tymcart">
                        <i class="fas fa-shopping-bag"></i>
                        <span style="    font-size: 21px;
                        font-weight: bold;
                        position: relative;
                        top: -5px;">(<?php echo countsp(session_id())[0]['Num']; ?>)</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="sanpham.php">SẢN PHẨM</a></li>
                <li><a href="sanpham.php?loaisp=LOAISP04">QUÀ TẶNG</a></li>
                <li><a href="sanpham.php?loaisp=LOAISP02">ĐỒNG HỒ NỮ</a></li>
                <li><a href="sanpham.php?loaisp=LOAISP01">ĐỒNG HỒ NAM</a></li>
                <li><a href="sanpham.php?loaisp=LOAISP03">TRANG SỨC</a></li>
                <li><a href="">ƯU ĐÃI ĐẶC BIỆT</a></li>
            </ul>
        </div>
        <div class="wrap">
            <div class="banner">
                <a href=""><img src="img/banne.PNG" alt=""></a>
            </div>
        </div>