<?php
namespace App\Controllers;

class ProductController extends BaseController {
//    public function __construct()
//    {
//        echo "Bình chọn đi";
//    }
    public function index(){
        return $this->render('product.list');
    }
}