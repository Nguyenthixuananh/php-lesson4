<?php
class Nguoidung {
//    static trong php
//public static $ten;
public static $ten = "Xuan Anh";
public function set_ten($ten) {
    Nguoidung::$ten= $ten;
}
public function get_ten() {
    return Nguoidung::$ten;
}
public function all() {
    Nguoidung::set_ten($ten);
    Nguoidung::get_ten();
}
}

$nguoidung = new Nguoidung();
//$nguoidung->set_ten('Xuan Anh');
echo $nguoidung->get_ten();

echo Nguoidung::all();

//echo Nguoidung::$ten;