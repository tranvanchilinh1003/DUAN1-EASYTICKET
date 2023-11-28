<?php
// truy vấn danh sách categories đã nhập 
// mới lên trước 

function categories_select_all()
{
    $sql = "SELECT * FROM categories ";
    return pdo_query($sql);
}
// thêm mới loại 
function categories_insert($type_name)
{
    $sql = "INSERT INTO categories(`type_name`) VALUES('$type_name')";
    pdo_execute($sql);
}
// xóa
function categories_delete($id)
{
    $sql = "DELETE FROM `categories` WHERE id=?";
    pdo_execute($sql, $id);
}
// lấy thông tin 1 mã loại
function categories_select_by_id($id)
{
    $sql = "SELECT * FROM categories WHERE id = '$id';";
    return pdo_query_one($sql);
}
// cập nhật dữ liệu
function   categories_update($type_name, $id)
{
    $sql = "UPDATE `categories` SET `type_name`='$type_name'WHERE `id`='$id'";

    pdo_execute($sql);
}
function categories_exist_ten_categories_add($type_name)
{
    $sql = "SELECT count(*) FROM categories WHERE type_name=?";
    return pdo_query_value($sql, $type_name) > 0;
}
function categories_exist_ten_categories_update($id, $type_name)
{
    $sql = "SELECT count(*) FROM categories WHERE  id!=? and type_name=?";
    return pdo_query_value($sql, $id, $type_name) > 0;
}
function categories_exist($id)
{
    $sql = "SELECT count(*) FROM categories WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
function check_ma_categories()
{
    $sql = "SELECT categories.id, categories.type_name
    FROM categories
    LEFT JOIN movies ON categories.id = movies.categories_id
    WHERE movies.categories_id IS NOT null ";
    return pdo_query_one($sql);
}
function check_ten_categories($type_name)
{
    $sql = "SELECT type_name FROM categories WHERE type_name='$type_name'";
    return  pdo_query_one($sql);
}
