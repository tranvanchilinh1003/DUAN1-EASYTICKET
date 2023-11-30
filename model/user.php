<?php
require_once "pdo.php";

function khach_hang_insert($username,$information,$password,$image,$role,$full_name,$gender)
{
    $sql = "INSERT INTO `users`( `username`, `information`, `password`, `image`, `role`, `full_name`, `gender`, `is_hidden`) 
    VALUES ('$username','$information','$password','$image','$role','$full_name','$gender', 1)";
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
$sql = "SELECT * FROM users WHERE is_hidden = 1";

return pdo_query($sql);
}
function delete_history(){
    $sql = "SELECT * FROM users WHERE is_hidden = 0";

return pdo_query($sql);
}
function remove_hidden_user($id){
$sql = "UPDATE users SET is_hidden = 0 WHERE id = '$id' ";
pdo_execute($sql);

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
function reset_user($id){
    $sql = "UPDATE users SET is_hidden = 1 WHERE id = '$id' ";
    pdo_execute($sql);
}
function khach_hang_select_by_id($username){
    $sql = "SELECT * FROM users WHERE username = '$username'  ";
    return pdo_query_one($sql);
    }
    function user_id($username){
        $sql = "SELECT * FROM users WHERE username = '$username' AND is_hidden = 1 ";
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
function update_otp($otp,$username){
    $sql = "UPDATE `users` SET `otp`='$otp' WHERE username = '$username'";
    pdo_execute($sql);
}
function khach_hang_change_password($username, $password){
$sql = "UPDATE  users SET `password` = '$password' WHERE `username` = '$username'";
pdo_execute($sql);

}


