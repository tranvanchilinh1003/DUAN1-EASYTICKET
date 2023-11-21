<?php
require_once "pdo.php";

function khach_hang_insert($username,$information,$password,$image,$role,$full_name,$gender)
{
    $sql = "INSERT INTO `users`( `username`, `information`, `password`, `image`, `role`, `full_name`, `gender`)
     VALUES ('$username','$information','$password','$image','$role','$full_name','$gender')";
    pdo_execute($sql);
}

function   khach_hang_update($information,$password,$image,$role,$full_name,$gender,$username)
{
$sql ="UPDATE `users` SET `information`='$information',`password`='$password',
`image`='$image',`role`='$role',`full_name`='$full_name',`gender`='$gender'
 WHERE   `username` = '$username'";

pdo_execute($sql);
}

function khach_hang_sellect_all (){
$sql = "SELECT * FROM users";

return pdo_query($sql);
}

function khach_hang_delete($id){
$sql = "DELETE FROM users WHERE id = ?";
if(is_array($id)){
foreach($id  as $ma    ){
pdo_execute($sql, $ma);
}
}else{
pdo_execute($sql, $id);


}




}

function khach_hang_select_by_id($username){
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return pdo_query_one($sql);
    }

    function khach_hang_exist($username)
{
    $sql = "SELECT count(*) FROM users WHERE username=?";
    return pdo_query_value($sql, $username) > 0;
}

function khach_hang_by_role($role){
$sql = "SELECT * FROM users WHERE role=?";
return pdo_query_value($sql, $role);


}

function khach_hang_change_password($ma_kh, $mat_khau_moi){
$sql = "UPDATE  khach_hang SET `mat_khau` = ? WHERE `ma_kh` = ?";
pdo_execute($sql, $mat_khau_moi, $ma_kh);

}


function update_otp($ma, $username){
    $sql = "UPDATE `khach_hang` SET `otp`= ? WHERE `username` = ?";
    pdo_execute($sql, $ma, $username);
}