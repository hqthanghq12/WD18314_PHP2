<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url'])? $_GET['url']: "/";
switch ($url){
    case '/':
        $listPro = new ProductController();
           $listPro->listProduct();
//        echo "Day la trang chu";
        break;
    case 'add-product':
        echo "Day la them";
        break;
}