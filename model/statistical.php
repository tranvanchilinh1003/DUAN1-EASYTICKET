<?php
require_once "pdo.php";

function avr_ratings($movies_id){
    $sql = "SELECT AVG(ratings) as averageRating, COUNT(*) as totalRatings FROM comments WHERE movies_id = $movies_id";
    return pdo_query_value($sql);
}
// thêm mới bình luận
function comments_insert($content, $comment_date, $ratings, $movies_id, $users_id)
{
    $sql = "INSERT INTO `comments`( `content`, `comment_date`, `ratings`, `movies_id`, `users_id`) VALUES ('$content','$comment_date','$ratings','$movies_id','$users_id')";
    pdo_execute($sql);
}
// cập nhập bình luận 
function comments_update($id,  $users_id, $movies_id, $content, $comment_date, $ratings)
{
    $sql = "UPDATE comments SET users_id=?,movies_id=?,content=?,comment_date=? ,ratings=? WHERE id=?";
    pdo_execute($sql, $id,  $users_id, $movies_id, $content, $comment_date, $ratings);
}

function count_comment($movies_id){
    $sql = "SELECT COUNT(*)   FROM `comments` WHERE movies_id = $movies_id";
    return pdo_query_value($sql);
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

function comments_select_by_id_movies($id)
{
    $sql = "SELECT cmt.*, mv.name_movie, users.username,users.image FROM comments cmt  JOIN movies mv ON mv.id = cmt.movies_id JOIN users ON cmt.users_id = users.id WHERE cmt.movies_id = ? ORDER By comment_date DESC";
    return pdo_query($sql, $id);
}
function comments_movies($movies_id)
{
    $sql = "SELECT comments.*, users.full_name, users.image
     FROM comments JOIN users ON comments.ma_kh = khach_hang.ma_kh WHERE comments.ma_hh = ?";
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
        . " JOIN categories lo ON lo.ma_loai = hh.ma_loai "
        . " GROUP BY lo.ma_loai, lo.ten_loai ";
    return pdo_query($sql);
}
// thống kê bình luận 
function thong_ke_comment()
{
    $sql = "SELECT mv.id, mv.name_movie, mv.image,
    COUNT(*) so_luong,
    MIN(cmt.comment_date) cu_nhat,
    MAX(cmt.comment_date) moi_nhat
    FROM comments cmt 
    JOIN movies mv ON mv.id = cmt.movies_id 
    GROUP BY mv.id, mv.name_movie 
    HAVING so_luong > 0";

    return pdo_query($sql);
}
