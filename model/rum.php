<?php
require_once "pdo.php";

function insert_rum($hall_name, $status, $movies_id){
    $sql = "INSERT INTO `cinema_halls`( `hall_name`, `status`, `movies_id`) VALUES ('$hall_name','$status','$movies_id')";
    pdo_execute ($sql);
}
function update_rum($hall_name, $status, $movies_id, $id){
    $sql = "UPDATE `cinema_halls` SET `hall_name`='$hall_name',`status`='$status',`movies_id`='$movies_id' WHERE id = '$id'";
    pdo_execute($sql);
}
function rum_all(){
    $sql = "SELECT rum.*, mv.name_movie, mv.image FROM `cinema_halls` rum JOIN movies mv   WHERE  rum.movies_id = mv.id AND rum.status = 'Active' ORDER BY `hall_name` ASC  ";
    return pdo_query($sql);
}
function rum_all_inactive(){
    $sql = "SELECT rum.*, mv.name_movie, mv.image FROM `cinema_halls` rum JOIN movies mv  WHERE  rum.movies_id = mv.id AND rum.status = 'Inactive' ORDER BY `hall_name` ASC ";
    return pdo_query($sql);
}

function check_rum($hall_name)
{
    $sql = "SELECT hall_name FROM cinema_halls WHERE hall_name='$hall_name'";
    return  pdo_query_one($sql);
}
function check_rum_upadte($hall_name, $id){
    $sql = "SELECT COUNT(*) AS count
    FROM cinema_halls
    WHERE hall_name = '$hall_name' AND id <> $id;";
    return pdo_query_value($sql);
}
function rum_sellect_id($id)
{
    $sql = "SELECT * FROM cinema_halls WHERE id =" . $id;

    return  pdo_query_one($sql);
}

function delete_rum_status($id)
{
    $sql = "UPDATE cinema_halls SET status = 'Inactive' WHERE id = '$id'";
    pdo_execute($sql);
}
function reset_rum($id)
{
    $sql = "UPDATE cinema_halls SET status = 'Active' WHERE id = '$id'";
    pdo_execute($sql);
}
function delete_rum($id)
{
    $sql = "DELETE FROM cinema_halls WHERE id = $id";
    pdo_execute($sql);
}