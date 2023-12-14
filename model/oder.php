<?php


function insert_oder($total, $users_id, $id, $selectedSeats){
    $sql = "INSERT INTO `orders`( `total`, `users_id`, `cinema_halls_id`, `seat_number`, `status`)
    
    VALUES ('$total','$users_id','$id','$selectedSeats', 'Active')";
    pdo_execute($sql);
    
}