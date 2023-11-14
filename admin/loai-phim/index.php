<?php

require "../../global.php";


extract($_REQUEST);
if (exist_param("btn_insert")) {

    
} else if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";

} 

else {
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
