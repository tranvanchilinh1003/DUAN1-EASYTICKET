<?php 
require "../../global.php";
require "../../model/seat.php";
require "../../model/pdo.php";
// require "../../dao/binh-luan.php";
$seats = seat_all();

$VIEW_NAME = 'seat.php';

require "../layout.php";