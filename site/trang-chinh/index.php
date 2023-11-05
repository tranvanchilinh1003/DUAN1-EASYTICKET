<?php

require "../../global.php";
// require "../../dao/loai.php";
require "../../model/pdo.php";
// require "../../dao/hang-hoa.php";
extract($_REQUEST);
if(exist_param("gioi-thieu", $_REQUEST)){

$VIEW_NAME = 'gioi-thieu.php';

}else if(exist_param("lien-he", $_REQUEST)){

    $VIEW_NAME = 'lien-he.php';

}

else if(exist_param("tin-tuc", $_REQUEST)){

    $VIEW_NAME = 'tin-tuc.php';
    
}
else if(exist_param("san-pham", $_REQUEST)){

// $VIEW_NAME = 'san-pham.php';
// $dsloai = loai_selectall();
// $item_hang_hoa = hang_hoa_select_all();


}






else{
// $home  =  hang_hoa_seclect_all_home();
// $random = hang_hoa_select_all_detail();
    $VIEW_NAME = 'home.php';

}
// $dsloai = loai_selectall();

require "../layout.php";