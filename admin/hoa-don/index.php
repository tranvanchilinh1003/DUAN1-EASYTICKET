<?php
require "../../global.php";

extract($_REQUEST);
if (exist_param("id", $_REQUEST)) {

    // $items = binh_luan_select_by_hang_hoa($ma_hh);

    $VIEW_NAME = 'detail.php';
} 



else if (exist_param("delete",$_REQUEST)) {
    $ma_bl = $_GET['delete'];
    $productId = $_GET['productId'];
    echo $ma_bl;
    echo $productId;
    
    // $ma_hh die();
    // binh_luan_delete($ma_bl);
        
    // $items =   binh_luan_select_all();
        header("location: index.php?id=" .$productId);

    
    
} 
elseif (exist_param("delete_box")) {

    if (isset($_POST['delete_all'])) {

        $get_id = $_POST['check'];
        if (isset($get_id)) {
            foreach ($get_id as $id) {
                // binh_luan_delete($id);
            }
            header("location: index.php?btn_list");
        } else {

            header("location: index.php?btn_list");
        }
    }
} 
else {

    // $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}

// $VIEW_NAME = 'detail.php';

require '../layout.php';
