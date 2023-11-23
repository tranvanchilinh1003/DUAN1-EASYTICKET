<?php
require_once "pdo.php";
// load lại ds hàng hóa
function movies_select_all()
{
    $sql = "SELECT * FROM movies WHERE status = 1 ";
    return pdo_query($sql);
}
// thêm mới hàng hóa 
function movies_insert($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image)
{
    $sql = "INSERT INTO `movies`(`name_movie`, `view`, `discretion`, `time`, `status`, `date_movie`, `actor_id`, `trailer`, `categories_id`, `image`) 
    VALUES ('$name_movie','$discretion','$time','$status','$date_movie','$actor_id','$trailer','$categories_id','$image')";
    pdo_execute($sql);
}
function   movies_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $mo_ta, $ngay_nhap, $dac_biet, $ma_loai, $hinh)
{
    if (!$hinh) {
        $sql = "UPDATE movies SET  ten_hh = '$ten_hh',don_gia = '$don_gia',giam_gia = '$giam_gia',mo_ta = '$mo_ta',ngay_nhap = '$ngay_nhap',dac_biet = '$dac_biet', ma_loai = '$ma_loai' WHERE ma_hh=$ma_hh;";
    } else {
        $sql = "UPDATE movies SET  ten_hh = '$ten_hh',don_gia = '$don_gia',giam_gia = '$giam_gia', hinh = '$hinh' ,mo_ta = '$mo_ta',ngay_nhap = '$ngay_nhap',dac_biet = '$dac_biet', ma_loai = '$ma_loai' WHERE ma_hh=$ma_hh;";
    }
    pdo_execute($sql);
}
// xóa
function movies_delete($ma_hh)
{
    $sql = "DELETE FROM movies WHERE ma_hh = ?";
    pdo_execute($sql, $ma_hh);
}

// lấy thông tin 1 mã hàng hóa
function movies_select_by_id($ma_hh)
{
    $sql = "SELECT * FROM movies WHERE ma_hh =" . $ma_hh;

    return  pdo_query_one($sql);
}

function movies_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM movies WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function movies_exist_add($ten_hh)
{
    $sql = "SELECT count(*) FROM movies WHERE ten_hh=?";
    return pdo_query_value($sql, $ten_hh) > 0;
}
function movies_exist_update($ma_hh, $ten_hh)
{
    $sql = "SELECT count(*) FROM movies WHERE ma_hh!=? and ten_hh=?";
    return pdo_query_value($sql, $ma_hh, $ten_hh) > 0;
}

function movies_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE movies SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function movies_select_top10()
{
    $sql = "SELECT * FROM movies WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function movies_select_dac_biet()
{
    $sql = "SELECT * FROM movies WHERE dac_biet=1";
    return pdo_query($sql);
}

function movies_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM movies WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function movies_select_keyword($keyword)
{
    $sql = "SELECT * FROM movies hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function movies_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM movies");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM movies ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}
