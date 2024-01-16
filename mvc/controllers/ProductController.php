<?php
// Tạo ra các ham de xu ly tung chac nang rieng biet
require_once "models/Product.php";
function listProduct(){
//    echo "Hien danh sach san pham";
    $product = getAllProduct();
//    var_dump($product);
//    die();
    include "views/products/list.php";
}
function addProduct(){
    echo "Them danh sach san pham";
}