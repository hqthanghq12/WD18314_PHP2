<?php
require_once "db.php";

function getAllProduct(){
    $sql = "SELECT * FROM products";
    return getData($sql);
}