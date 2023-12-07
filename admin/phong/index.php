<?php
require "../../global.php";
require_once "../../model/pdo.php";
require  "../../model/rum.php";
require_once "../../model/movies.php";
require_once "../../model/categories.php";
// require_once "../../model/showtime.php";
extract($_REQUEST);
if (exist_param("insert_rum")) {
    if (isset($_POST['insert_rum'])) {
        if (!empty(check_rum($hall_name))) {

            $MESSAGE = "Tên Phòng Tồn Tại";
            $VIEW_NAME = "insert.php";
        } else {
            $hall_name = $_POST["hall_name"];
            $status = $_POST["status"];
            $movies_id = $_POST["movies_id"];
            $start_time = $_POST["start_time"];
        
            $item =    movies_select_by_id($movies_id);
            $time = $item['time'];
            insert_rum($hall_name, $status, $movies_id,$start_time, $time, $cinemas_id);
            $VIEW_NAME = "list.php";
        }
    }
} else if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $item =    rum_sellect_id($id);
    $_SESSION['id_rum'] = $item['id'];

    $VIEW_NAME = "edit.php";
} else if (exist_param("update_rum")) {
    if (isset($_POST['update_rum'])) {
        $status = $_POST["status"];
        $movies_id = $_POST["movies_id"];
        $id = $_POST['id'];
        $hall_name = $_POST["hall_name"];
        $start_time = $_POST["start_time"];
        $item =    movies_select_by_id($movies_id);
        $time = $item['time'];
        $categories_id = $_POST["categories_id"];
        if (empty(check_rum_upadte($hall_name, $id))) {
            update_rum($hall_name, $status, $movies_id, $id, $start_time, $time, $cinemas_id);
            header("Location:" . $ADMIN_URL . "/phong/index.php?btn_list");
        } else {

            $id_rum = $_SESSION["id_rum"];
            $item =    rum_sellect_id($id_rum);
            $MESSAGE = "Lỗi Tên Phòng Tồn Tại";
            $VIEW_NAME = 'edit.php';
        }







        $VIEW_NAME = "list.php";
    }
    $VIEW_NAME = "edit.php";
} else if (exist_param("delete_rum_status")) {
    delete_rum_status($id);

    $VIEW_NAME = "list.php";
} else if (exist_param("history_movie")) {


    $VIEW_NAME = "history.php";
} else if (exist_param("reset_rum")) {
    reset_rum($id);

    $VIEW_NAME = 'history.php';
} else if (exist_param("delete_rum")) {
    delete_rum($id);

    $VIEW_NAME = 'history.php';
} else {
    $VIEW_NAME = 'insert.php';
}
require "../layout.php";
