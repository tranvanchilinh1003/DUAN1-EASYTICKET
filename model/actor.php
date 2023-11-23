<?php
// truy vấn danh sách actor đã nhập 
// mới lên trước 

function actor_select_all()
{
    $sql = "SELECT * FROM actor ";
    return pdo_query($sql);
}
// thêm mới loại 
function actor_insert($actor, $director, $producer)
{
    $sql = "INSERT INTO `actor`( `actor`, `director`, `producer`) VALUES ('$actor',' $director',' $producer')";
    pdo_execute($sql);
}
// xóa
function actor_delete($id)
{
    $sql = "DELETE FROM `actor` WHERE id=?";
    pdo_execute($sql, $id);
}
// lấy thông tin 1 mã loại
function actor_select_by_id($id)
{
    $sql = "SELECT * FROM actor WHERE id = '$id';";
    return pdo_query_one($sql);
}
// cập nhật dữ liệu
function   actor_update($type_name, $id)
{
    $sql = "UPDATE `actor` SET `type_name`='$type_name'WHERE `id`='$id'";

    pdo_execute($sql);
}

function actor_exist_ten_actor_add($type_name)
{
    $sql = "SELECT count(*) FROM actor WHERE type_name=?";
    return pdo_query_value($sql, $type_name) > 0;
}
function actor_exist_ten_actor_update($id, $type_name)
{
    $sql = "SELECT count(*) FROM actor WHERE  id!=? and type_name=?";
    return pdo_query_value($sql, $id, $type_name) > 0;
}

function actor_exist($id)
{
    $sql = "SELECT count(*) FROM actor WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
function check_ma_actor()
{
    $sql = "SELECT actor.id, actor.type_name
            FROM actor
            LEFT JOIN movies ON actor.id = movies.id
            WHERE movies.id IS NULL";
    return pdo_query_one($sql);
}
function check_ten_actor($type_name)
{
    $sql = "SELECT type_name FROM actor WHERE type_name='$type_name'";
    return  pdo_query_one($sql);
}
