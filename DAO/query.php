<?php 
    include 'MYSQL.php';
    function getsp($loai) {
        $q = "SELECT * FROM sanpham INNER JOIN loaisanpham 
        ON sanpham.maloai = loaisanpham.maloai WHERE sanpham.loai = '". $loai ."' LIMIT 5";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();
        $rs = $st->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
    function getspbymasp($masp) {
        $q = "SELECT * FROM sanpham INNER JOIN loaisanpham 
        ON sanpham.maloai = loaisanpham.maloai WHERE masanpham = '" . $masp . "'";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();
        $rs = $st->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
    function insertgiohang($id,$masp,$soluong) {
        $q = "INSERT INTO `giohang`(`id_session_user`, `masanpham`, `soluong`) 
        VALUES ('". $id . "','". $masp ."','". $soluong . "')";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();;
    }
    function deletegiohang($id,$masp) {
        $q = "DELETE FROM giohang WHERE id_session_user = '" .$id."' AND masanpham = '".$masp."'";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();;
    }
    function countsp($id) {
        $q = "SELECT COUNT(masanpham) as 'Num' FROM giohang WHERE id_session_user = '".$id."'";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();
        $rs = $st->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
    function updategiohang($id,$masp,$soLuong) {
        $q = "UPDATE giohang SET soluong = '".$soLuong . "' WHERE 
        id_session_user = '" .$id."' AND masanpham = '".$masp."'";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();;
    }
    function getgiohangbyid($idsess) {
        $q = "SELECT * FROM giohang INNER JOIN sanpham 
        ON giohang.masanpham = sanpham.masanpham WHERE id_session_user = '" . $idsess . "'";
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();
        $rs = $st->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
    function get1($loaisp,$boLoc) {
        $str = "";
        switch ($loaisp) {
            case 'LOAISP01':
                $str .= " WHERE sanpham.maloai = '" . $loaisp . "' " . get2($boLoc);
                break;
            case 'LOAISP02':
                $str .= " WHERE sanpham.maloai = '" . $loaisp . "' " . get2($boLoc);
                break;
            case 'LOAISP03':
                $str .= " WHERE sanpham.maloai = '" . $loaisp . "' " . get2($boLoc);
                break;
            case 'LOAISP04':
                $str .= " WHERE sanpham.maloai = '" . $loaisp . "' " . get2($boLoc);
                break;
            case '':
                $str .= " " . get2($boLoc);
                break;
        }
        return $str;
    }
    function get2($boLoc) {
        $str = "";
        switch ($boLoc) {
            case 'td':
                $str = " ORDER BY gia ASC";
                break;
            case 'gd':
                $str .= "  ORDER BY gia DESC";
                break;
            case 'yt':
                $str .= " AND sanpham.loai = 2 ";
                break;
            case 'tc':
                $str .= "";
                break;
        }
        return $str;
    }
    function getspbyloaisp($loaisp) {
        $q = "SELECT * FROM sanpham INNER JOIN loaisanpham 
        ON sanpham.maloai = loaisanpham.maloai " . $loaisp;
        $sql = sql();
        $st = $sql->prepare($q);
        $st->execute();
        $rs = $st->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
?>