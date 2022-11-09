<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/admin/lib/session.php');
require_once(__ROOT__.'/admin/lib/database.php');
require_once(__ROOT__.'/helper/format.php');
require_once(__ROOT__.'../admin/class/cartegory_class.php');
require_once(__ROOT__.'../admin/class/brand_class.php');
require_once(__ROOT__.'../admin/class/comment_class.php');
require_once(__ROOT__.'../admin/class/product_class.php');
Session::init();
Session::checkSession()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
  