<?php
global $conn;
require_once "app/App.php";
require_once "app/configs/database.php";
require_once "app/controllers/BaseController.php";
$app = new App($conn);
