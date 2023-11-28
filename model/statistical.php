<?php
require_once "pdo.php";

// thêm mới bình luận
function comments_insert($id,  $users_id, $movies_id, $content, $comment_date, $ratings)
{
    $sql = "INSERT INTO `comments`(`id`, `users_id`,`movies_id`, `content`, `comment_date`, `ratings`) VALUES ( '$id', '$users_id', $movies_id, '$content', '$comment_date',`$ratings`)";
    pdo_execute($sql);
}
// cập nhập bình luận 
function comments_update($id,  $users_id, $movies_id, $content, $comment_date, $ratings)
{
    $sql = "UPDATE comments SET users_id=?,movies_id=?,content=?,comment_date=? ,ratings=? WHERE id=?";
    pdo_execute($sql, $id,  $users_id, $movies_id, $content, $comment_date, $ratings);
}
function comments_delete($id)
{
    $sql = "DELETE FROM comments WHERE id = ?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
// load lại ds bình luận
function comments_select_all()
{
    $sql = "SELECT * FROM comments bl ORDER BY comment_date DESC";
    return pdo_query($sql);
}

// lấy thông tin 1 mã bình luận
function comments_select_by_id($id)
{
    $sql = "SELECT * FROM comments WHERE id = ?";
    return pdo_query_one($sql, $id);
}
function comments_exist($id)
{
    $sql = "SELECT count(*) FROM comments WHERE id = ? ";
    return pdo_query_value($sql, $id) > 0;
}
function comments_select_by_movies($movies_id)
{
    $sql = "SELECT b.*, h.ten_hh FROM comments b JOIN movies h ON h.movies_id = b.movies_id WHERE b.movies_id = ? ORDER By comment_date DESC";
    return pdo_query($sql, $movies_id);
}
// thống kê phim 
function thong_ke_movies()
{
    $sql = "SELECT lo.ma_loai, lo.ten_loai, "
        . " COUNT(*) so_luong,"
        . " MIN(hh.don_gia) gia_min,"
        . " MAX(hh.don_gia) gia_max,"
        . " AVG(hh.don_gia) gia_avg"
        . " FROM hang_hoa hh "
        . " JOIN loai lo ON lo.ma_loai = hh.ma_loai "
        . " GROUP BY lo.ma_loai, lo.ten_loai ";
    return pdo_query($sql);
}
// thống kê bình luận 
function thong_ke_comments()
{
    $sql = "SELECT hh.movies_id, hh.name_movie,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.comment_date) cu_nhat,"
        . " MAX(bl.comment_date) moi_nhat"
        . " FROM comments bl "
        . " JOIN movies hh ON hh.movies_id = bl.movies_id "
        . " GROUP BY hh.movies_id, hh.name_movie "
        . " HAVING so_luong > 0";

    return pdo_query($sql);
}
