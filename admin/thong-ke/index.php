<?php 
require "../../global.php";
// require "../../dao/thong-ke.php";
// require "../../dao/binh-luan.php";

extract($_REQUEST);
if(exist_param("chart", $_REQUEST)){

// $items = thong_ke_hang_hoa();
$VIEW_NAME = "chart.php";

}else{

// $items = thong_ke_hang_hoa();
$VIEW_NAME = "list.php";



}

require "../layout.php";