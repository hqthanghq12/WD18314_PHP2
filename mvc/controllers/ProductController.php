<?php
// Tạo ra các ham de xu ly tung chac nang rieng biet
require_once "models/Product.php";
class ProductController{
    public function listProduct(){
        $modelProduct = new Product();
//    echo "Hien danh sach san pham";
        $product =$modelProduct->getAllProduct();
//    var_dump($product);
//    die();
        include "views/products/list.php";
    }
    public function addProduct(){
        echo "Them danh sach san pham";
    }
}
