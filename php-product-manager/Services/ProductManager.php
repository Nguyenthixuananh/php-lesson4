<?php
namespace Services;
class ProductManager {
    private $products;
//Lớp ProductManager có một thuộc tính là một mảng chứa danh sách các sản phẩm
    public function __construct() {
        $this->products = [];
    }
    public function add($product) {
        $this->products[] = $product;
    }
    public function getProducts() {
        return $this->products;
    }
}