<?php



function count_movie(){

$sql = "SELECT COUNT(*)  FROM `movies` WHERE `status` = 1";
return pdo_query_value($sql)>0 ;
}