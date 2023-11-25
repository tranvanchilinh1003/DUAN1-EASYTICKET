<?php
require "../../global.php";
require_once "../../model/pdo.php";
require '../../model/user.php';

extract($_REQUEST);
if (exist_param("btn_edit")) {
  $username = $_SESSION['username'];
  $user = user_id($username);

  // movies_select_all();
  $VIEW_NAME = "login_thong-tin.php";
} else {
  $VIEW_NAME = "insert.php";
}
require "../layout.php";
