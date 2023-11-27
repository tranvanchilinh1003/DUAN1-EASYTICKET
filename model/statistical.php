<?php

require_once "pdo.php";
function statistical_chart()
{

    $sql = "SELECT item.id, item.type_name,  "
        . " COUNT(*) so_luong,"
        . "  MIN(mv.don_gia) gia_min,"
        . " MAX(mv.don_gia) gia_max,"
        . "  AVG(mv.don_gia) gia_avg"
        . "FROM movies mv  "
        . "  JOIN categories item ON item.id = mv.categories_id "
        . "     GROUP BY item.id, item.type_name ";
    return pdo_query($sql);
}

function thong_ke_binh_luan()
{
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_bl) cu_nhat,"
        . " MAX(bl.ngay_bl) moi_nhat"
        . " FROM binh_luan bl "
        . " JOIN hang_hoa hh ON hh.ma_hh = bl.ma_hh "
        . " GROUP BY hh.ma_hh, hh.ten_hh "
        . " HAVING so_luong > 0";

    return pdo_query($sql);
}
