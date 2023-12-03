<?php 
require_once "pdo.php";


function show_all(){
    $sql = "SELECT st.*, mv.time  FROM `showtimes` st JOIN movies mv WHERE mv.id = showtimes.movies_id; ";
    return pdo_query($sql);
}

function cinemas(){
    $sql = "SELECT * FROM `cinemas`;";
    return pdo_query($sql);
}
function insert_time($start_time, $time, $cinemas_id, $movies_id){
    $sql = "INSERT INTO `showtimes`( `start_time`, `end_time` , `cinemas_id`, `movies_id`)
     VALUES ('$start_time',ADDTIME('$start_time', '$time'),'$cinemas_id','$movies_id')";
     pdo_execute($sql);
}









