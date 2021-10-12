<?php
class Application {
    private $name;
    public static $count = 0;
//biến $count là một biến static,
// được sử dụng để đếm số lượng các đối tượng được sinh ra.
    public function __construct($name) {
        $this->name = $name;
        self::$count++;
//        biến $count sẽ tăng thêm khi có đối tượng mới được tạo ra.
    }
    public function toString() {
        return 'Application name: '.$this->name;
    }
}
echo "Total object count: ".Application::$count."<br/>";
$app1 = new Application('App one');
echo "Total objects count: ".Application::$count."<br/>";
$app2 = new Application('App two');
echo "Total objects count: ".Application::$count."<br/>";
echo $app1->toString()."<br/>";
echo $app2->toString()."<br/>";