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
   if(isset($_POST['insert_actor'])){

    $actor = $_POST['actor'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];

    actor_insert($actor, $director, $producer);
    // $VIEW_NAME = "actor.php";


   }
    $VIEW_NAME = "actor.php";
}
else if (exist_param("btn_delete")) {
    movies_delete_status($id);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
    $actor_id = $_REQUEST['actor_id'];
$item = movies_select_by_id($id);
$item_actor =  actor_select_by_id($actor_id);

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
    $actor = $_POST['actor'];
    $producer = $_POST['producer'];
    $director = $_POST['director'];
    if(empty($image)){
$image = $_POST['image_old'];
update_all($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image, $id, $actor, $director, $producer);

    }else{
        $image = save_file('image', $UPLOAD_URL);
        update_all($name_movie, $discretion, $time, $status, $date_movie, $actor_id, $trailer, $categories_id, $image, $id, $actor, $director, $producer);
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
    actor_delete($actor_id);
    delete_vv($id);
    
$VIEW_NAME = "history.php";
}









else {
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
