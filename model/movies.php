<?php
require_once "pdo.php";
function detail_movies($id)
{
    $sql = "SELECT movies.*, categories.type_name , actor.actor, actor.director, actor.producer
FROM movies
JOIN categories ON movies.categories_id = categories.id
JOIN actor ON movies.actor_id = actor.id WHERE movies.id = '$id' ";
    return pdo_query_one($sql);
}
// load lại ds hàng hóa
function movies_select_all()
{
    $sql = "SELECT mv.*, categories.type_name FROM `movies` mv JOIN categories WHERE mv.categories_id = categories.id AND mv.status = 1 ";
    return pdo_query($sql);
}
function movies_select_history()
{
    $sql = "SELECT * FROM movies WHERE status = 0 ";
    return pdo_query($sql);
}
// thêm mới hàng hóa 
function movies_insert($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image)
{
    $sql = "INSERT INTO `movies`(`name_movie`, `discretion`, `time`, `status`, `date_movie`, `actor_id`, `trailer`, `categories_id`, `image`) 
    VALUES ('$name_movie','$discretion','$time','$status','$date_movie','$actor_id','$trailer','$categories_id','$image')";
    pdo_execute($sql);
}
function   movies_update($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image, $id)
{
    $sql = "UPDATE `movies` SET `name_movie`='$name_movie',`discretion`='$discretion',`time`='$time',`status`='$status',
`date_movie`='$date_movie',`actor_id`='$actor_id',`trailer`='$trailer',`categories_id`='$categories_id',`image`='$image' WHERE id  = '$id'";
    pdo_execute($sql);
}
// xóa
function movie_randum(){
    $sql = "SELECT mv.*, categories.type_name FROM movies mv JOIN categories WHERE categories.id = mv.categories_id ORDER BY RAND() DESC limit 9";
    return pdo_query($sql);
}
function movie_top_comment(){
    $sql = "SELECT mv.id, mv.name_movie, mv.image,
    COUNT(*) so_luong,
    MIN(cmt.comment_date) cu_nhat,
    MAX(cmt.comment_date) moi_nhat
    FROM comments cmt 
    JOIN movies mv ON mv.id = cmt.movies_id 
    GROUP BY mv.id, mv.name_movie 
    HAVING  so_luong > 0  ORDER BY so_luong DESC   limit 3";
    return pdo_query($sql);
}
function movies_delete_status($id)
{
    $sql = "UPDATE movies SET status = 0 WHERE id = '$id'";
    pdo_execute($sql);
}
function movie_reset($id)
{
    $sql = "UPDATE movies SET status = 1 WHERE id = '$id'";
    pdo_execute($sql);
}
function delete_vv($id)
{
    $sql = "DELETE FROM movies WHERE id = $id";
    pdo_execute($sql);
}
// lấy thông tin 1 mã hàng hóa
function movies_select_by_id($id)
{
    $sql = "SELECT * FROM movies WHERE id =" . $id;

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

function movies_view($id)
{
    $sql = "UPDATE movies SET view = view + 1 WHERE id=?";
    pdo_execute($sql, $id);
}

function movies_select_topview()
{
    $sql = "SELECT mv.*, categories.type_name   FROM movies mv JOIN categories  WHERE mv.view > 0 AND categories.id = mv.categories_id ORDER BY mv.view DESC LIMIT 0,5;";
    return pdo_query($sql);
}


function movies_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM movies WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function movies_select_keyword($keyword)
{
    $sql = "SELECT mv.*, cate.type_name FROM movies mv
    JOIN categories cate ON cate.id=mv.categories_id 
    WHERE mv.name_movie LIKE ? OR cate.type_name LIKE ?";
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
function movie_page(){
    if(isset($_GET['page'])){

        $page = $_GET['page'];
    }else{
        $page = 1;
    }

$row = 12;
$from = ($page - 1)*$row;
    $sql = "SELECT  mv.*, categories.type_name FROM `movies` mv JOIN categories WHERE mv.categories_id = categories.id AND mv.status = 1 LIMIT $from, $row";
    return pdo_query($sql);
}

