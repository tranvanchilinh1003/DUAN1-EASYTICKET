<?php 
require "../../global.php";
require "../../model/statistical.php";
// require "../../dao/binh-luan.php";

extract($_REQUEST);
if(exist_param("chart", $_REQUEST)){

// $items = statistical_chart();
$VIEW_NAME = "chart.php";

}else{

// $items = statistical_chart();
$VIEW_NAME = "list.php";



}

require "../layout.php";