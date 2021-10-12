<?php
class Application {

    private static $instance;
//Thuộc tính $instance giúp cho chúng ta trỏ đến một đối tượng duy nhất của
// Application, và cũng chỉ có một đối tượng duy nhất được sinh ra
    private function __construct()
    {
    }
    public static function getInstance(): Application {
        if (self::$instance===null) {
            self::$instance = new Application();
        } return self::$instance;
    }
}
$app1 = Application::getInstance();
$app2 = Application::getInstance();