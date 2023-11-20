<?php

require "../../global.php";
// require "../../dao/loai.php";
require "../../model/pdo.php";
// require "../../dao/hang-hoa.php";
extract($_REQUEST);
if(exist_param("tin-tuc.php", $_REQUEST)){

//$VIEW_NAME = 'tin-tuc.php';

}
else if(exist_param("san-pham", $_REQUEST)){

// $VIEW_NAME = 'san-pham.php';
// $dsloai = loai_selectall();
// $item_hang_hoa = hang_hoa_select_all();


}


else{

// $home  =  hang_hoa_seclect_all_home();
// $random = hang_hoa_select_all_detail();
    $VIEW_NAME = 'anime-9.2.php';

}
// $dsloai = loai_selectall();

require "../layout.php";