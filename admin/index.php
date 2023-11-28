<?php
require "../global.php";
if (!isset($_SESSION["username"])) {
  header("Location: " . $ADMIN_URL . "/form/login.php");
}

$VIEW_NAME = "trang-chinh/home.php";
require "layout.php";
