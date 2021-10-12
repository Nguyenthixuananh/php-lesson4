<?php
class Taikhoan {
    public $public = "Truy cap du lieu o bat cu dau";
    private $private = "Truy cap du lieu o trong class";
    protected $protected = "Truy cap du lieu o trong class va class ke thua";
//    Muon truy cap $private:
function lay_private() {
    return $this->private;
}
// Muon truy cap $protected
function lay_protected() {
    return $this->protected;
}
}
//class ke thua:
class Khachhang extends Taikhoan {
    function lay_protected() {
        return $this->protected;
    }
}


$doituong1 = new Taikhoan();
echo $doituong1->public;
echo "<br/>";
echo $doituong1->lay_private();
echo "<br/>";
echo $doituong1->lay_protected();
echo "<br/>";

$doituong2 = new Khachhang();
echo $doituong2->lay_protected();