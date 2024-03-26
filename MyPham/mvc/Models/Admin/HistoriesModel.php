<?php
class HistoriesModel extends Database
{
    function apiListBill($keyword, $IDCategory)
    {
        if ($IDCategory == 0) {
            $query = "SELECT LS.ID, LS.soLuong, LS.ngayBan, kh.hoTen, sp.tenSP, (sp.giaSP * ls.soLuong) as total 
            FROM `lichsubanhang` as ls 
            join sanpham as sp on ls.IDSP = sp.ID 
            join khachhang as kh on ls.IDKH = kh.ID";
        } else {
            $query = "SELECT LS.ID, LS.soLuong, LS.ngayBan, kh.hoTen, sp.tenSP, (sp.giaSP * ls.soLuong) as total 
            FROM `lichsubanhang` as ls 
            join sanpham as sp on ls.IDSP = sp.ID 
            join khachhang as kh on ls.IDKH = kh.ID
            WHERE sp.IDLoai = '" . $IDCategory . "'";
        }

        if ($keyword != null) {
            $query .= " AND ls.ID = '" . $keyword . "' or ls.ngayBan = '" . $keyword . "'";
        }

        $query .= " ORDER BY LS.ID";

        $result = mysqli_query(self::$connect, $query);

        $array = array();

        while ($rows = mysqli_fetch_assoc($result)) {
            $array[] = $rows;
        }

        return json_encode($array);
    }

    function removeBill($ID)
    {
        $query = "DELETE FROM `lichsubanhang` WHERE ID = '" . $ID . "'";
        mysqli_query(self::$connect, $query);
    }
}
