<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
extract($_REQUEST);
require "../../global.php";
require_once "../../model/pdo.php";
require_once "../../model/movies.php";
require_once "../../model/actor.php";
require_once "../../model/categories.php";
require_once "../../model/showtime.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $name_movie = $_POST['name_movie'];
    // $categories = $_POST['categories'];
    $time = $_POST['time'];
    $date_movie = $_POST['date_movie'];
    $discretion = $_POST['discretion'];
    $actor_id = $_POST['actor_id'];
    $categories_id = $_POST['categories_id'];
    // uploaded file 
    $status = $_POST['status'];
    $trailer = $_POST['trailer'];
    $image = save_file('image', $UPLOAD_URL);
    //    insert database 
    movies_insert($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image);
  
    // movies_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
} else if (exist_param("btn_actor")) {
   
    $VIEW_NAME = "actor.php";
} else if(exist_param("insert_actor")){
    $actor = $_POST['actor'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];

    actor_insert($actor, $director, $producer);
    $VIEW_NAME = "actor.php";

}
else if (exist_param("btn_delete")) {
    movies_delete_status($id);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
$item = movies_select_by_id($id);


    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_update")) {
    $id = $_POST['id'];
    movies_select_by_id($id);
    $name_movie = $_POST['name_movie'];
    // $categories = $_POST['categories'];
    $time = $_POST['time'];
    $date_movie = $_POST['date_movie'];
    $discretion = $_POST['discretion'];
    $actor_id = $_POST['actor_id'];
    $categories_id = $_POST['categories_id'];
    // uploaded file 
    $status = $_POST['status'];
    $trailer = $_POST['trailer'];
    $image = save_file('image', $UPLOAD_URL);
    if(empty($image)){
$image = $_POST['image_old'];
movies_update($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image, $id);

    }else{
        $image = save_file('image', $UPLOAD_URL);
        movies_update($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image, $id);
    }
    $VIEW_NAME = "list.php";
} 
else if(exist_param("history_movie")) {

    $VIEW_NAME = "history.php";
}
else if(exist_param("reset_movie")) {

    movie_reset($id);
    $VIEW_NAME = "history.php";
}
else if(exist_param("delete_vv")){

    delete_vv($id);
$VIEW_NAME = "history.php";
}

else if(exist_param("insert_show")){
if(isset($_POST['inser_showtime'])){
    if(empty($_POST['start_time'])){

$MESSAGE = "Không Để Trống";
    }else{
    $movies_id = $_POST['movies_id'];
$item =    movies_select_by_id($movies_id);
$time = $item['time'];
$start_time = $_POST['start_time'];

$end_time = "";
$cinemas_id = $_POST['cinemas_id'];


insert_time($start_time, $time, $cinemas_id, $movies_id);
$MESSAGE = "";
// add_time($time, $id);
}
}


    $VIEW_NAME = "show.php";
}







else {
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
