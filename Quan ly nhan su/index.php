<?php
include_once "Models/Employee.php";
include_once "Services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$employee1 = new Employee("Nguyen", "Thanh", "17/10/2003", "Viet Tri", "Nhan vien");
$employee2 = new Employee("Nguyen", "Xanh", "9/6/2004", "Bac Ninh", "Chu tich");
$employee3 = new Employee("Vu", "Hoang", "30/10/2003", "Ha Noi", "Giam doc");
$employeeManager->storeEmployees($employee1);
$employeeManager->storeEmployees($employee2);
$employeeManager->storeEmployees($employee3);

echo "<pre>";
print_r($employeeManager->getAllEmployees());