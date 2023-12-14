<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
extract($_REQUEST);
require "../../global.php";
require "../../model/categories.php";
require "../../model/pdo.php";
require "../../model/movies.php";
require "../../model/statistical.php";
require "../../model/seat.php";
require "../../model/rum.php";
require "../../model/user.php";

//-------------------------------//

extract($_REQUEST);
if (exist_param("selected_date")) {
    $id = $_GET['id'];
    $_SESSION['movies_id'] = $id;
    $selectedDate = $_GET['selected_date'];
    $item = detail_movies($id);
    $_SESSION['id'] = $item['id'];
    $find_cinemas = find_movie($id);
    $find_all = find_movie_cinemas($id, $selected_date);
    $VIEW_NAME = "dat-ve-ui.php";
} else if (exist_param("dat-ghe")) {
    $item = oder_sear($id);
    $VIEW_NAME = "dat-ghe.php";
} else if (exist_param("thanh-toan")) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        $id = $_POST['id'];
        $item = oder_sear($id);
        $username = $_SESSION['username'];
        $user = user_id($username);

        $selectedSeats = $_POST['selectedSeats'];
        $totalPrice = $_POST['totalPrice'];
        // Nhận dữ liệu từ biểu mẫu



        // Xử lý dữ liệu và lưu vào cơ sở dữ liệu, gửi email, hoặc các bước khác tùy thuộc vào yêu cầu của bạn
        // ... (Code xử lý đặt vé của bạn)
    }
    // $item = detail_movies($id);
    // $_SESSION['id_movies'] = $item['movies_id'];
    // $_SESSION['id'] = $item['id'];
    // $find_cinemas = find_movie($id);
    $VIEW_NAME = "thanh-toan.php";
} else if (exist_param("thong-tin")) {
    

    $VIEW_NAME = "thong-tin.php";
}else {
    $id =  $_SESSION['id'];
    $VIEW_NAME = "dat-ve-ui.php";
}

// $VIEW_NAME = "dat-ve-ui.php";
require '../layout.php';
