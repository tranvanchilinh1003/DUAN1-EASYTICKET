<?php
require_once "../../global.php";
require "../../model/count.php";

$item = count_movie();
$VIEW_NAME = "trang-chinh/home.php";
require "../layout.php";
