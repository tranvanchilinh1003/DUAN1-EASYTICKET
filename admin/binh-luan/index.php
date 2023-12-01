<?php
require '../../global.php';
require "../../model/pdo.php";
require '../../model/movies.php';
require '../../model/statistical.php';
require '../../model/categories.php';
extract($_REQUEST);
if (exist_param("id", $_REQUEST)) {

    $items = comments_select_by_id_movies($id);

    $VIEW_NAME = 'detail.php';
    if(empty($items[0]['name_movie'])) {
        header("location: index.php?btn_list");
} 


}
else if (exist_param("delete",$_REQUEST)) {
    $id = $_SESSION['id'];
    $movies_id = $_GET['movies_id'];
    // echo $_SESSION['id'];
    // echo $movies_id;
    // die();
    // $ma_hh die();
    comments_delete($id);
        
    $items =   comments_select_all();
        header("location: index.php?id=" .$movies_id);

    
    
} 
elseif (exist_param("delete_all")) {
    $movies_id = $_GET['movies_id'];
    if (isset($_POST['delete_all'])) {

        $get_id = $_POST['check'];
        if (isset($get_id)) {
            foreach ($get_id as $id) {
                comments_delete($id);
            }
            header("location: index.php?id=" .$movies_id);
        } else {

            header("location: index.php?btn_list");
        }
    }
} 
else {

    $items = thong_ke_comment();
    $VIEW_NAME = "list.php";
}



require '../layout.php';
