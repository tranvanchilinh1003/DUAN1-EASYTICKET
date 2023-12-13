<?php
require_once "pdo.php";

function insert_rum($hall_name, $status, $movies_id, $date_show, $start_time, $time, $cinemas_id){
    $sql = "INSERT INTO `cinema_halls`( `hall_name`, `status`, `movies_id`, `date_show`, `start_time`, `end_time` , `cinemas_id`) 
    VALUES ('$hall_name','$status','$movies_id','$date_show','$start_time',ADDTIME('$start_time', '$time'),'$cinemas_id')";
    pdo_execute ($sql);
}

function update_rum($hall_name, $status, $movies_id, $id, $start_time, $time, $cinemas_id, $date_show){
    $sql = "UPDATE `cinema_halls` SET `hall_name`='$hall_name',`status`='$status',`movies_id`='$movies_id' ,
    `date_show` ='$date_show', `start_time` = '$start_time', `cinemas_id` = '$cinemas_id', `end_time` = ADDTIME('$start_time', '$time') WHERE id = '$id'";
    pdo_execute($sql);
}
function rum_all(){
    $sql = "SELECT rum.*, mv.name_movie, mv.image, cinemas.name FROM `cinema_halls` rum JOIN movies mv JOIN cinemas   WHERE  rum.movies_id = mv.id AND rum.cinemas_id = cinemas.id AND rum.status = 'Active' ORDER BY `hall_name` ASC  ";
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
    $sql = "SELECT * FROM cinema_halls WHERE  id =" . $id;

    return  pdo_query_one($sql);
}
function find_movie_cinemas($id, $selected_date){

    $sql = "SELECT cinema_halls.*, HOUR(start_time) as gio_bd, LPAD(MINUTE(start_time), 2, '0') as phut_bd , HOUR(end_time) as gio_kt, LPAD(MINUTE(end_time), 2, '0') as phut_kt, cinemas.name, cinemas.location, movies.name_movie FROM cinema_halls JOIN cinemas ON cinema_halls.cinemas_id = cinemas.id JOIN movies ON movies.id = cinema_halls.movies_id 
    WHERE movies_id = '$id' AND cinema_halls.date_show = '$selected_date' ";
    return pdo_query($sql);
}
function find_movie($id){

    $sql = "SELECT cinema_halls.*, HOUR(start_time) as gio_bd, LPAD(MINUTE(start_time), 2, '0') as phut_bd ,
     HOUR(end_time) as gio_kt, LPAD(MINUTE(end_time), 2, '0') as phut_kt, cinemas.name, cinemas.location, movies.name_movie FROM cinema_halls JOIN cinemas ON cinema_halls.cinemas_id = cinemas.id JOIN movies ON movies.id = cinema_halls.movies_id WHERE movies_id = '$id' ";
    return pdo_query_one($sql);
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

function cinemas(){
    $sql = "SELECT * FROM `cinemas`;";
    return pdo_query($sql);
}