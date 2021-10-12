<?php
include_once "User.php";
$user = new User("Xuan Anh", "xatcbn@gmail.com",1);
$user->setName("Wang Yibo");
$user->setEmail("abc@gmail.com");
$user->setRole(2);
echo $user->getInfo();
