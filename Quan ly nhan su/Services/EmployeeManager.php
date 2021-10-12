<?php

include '../Models/Employee.php';
class EmployeeManager {
    private array $employees;
    private $path = __DIR__.'/employee.json';

    public function __construct()
    {
        $this->employees = [];
    }
    public function getAllEmployees() {
        return$this->employees;
    }
    public function storeEmployees($employee) {
        array_push($this->employees, $employee);
    }
    public function save() {
        $dataJson = json_encode($this->employees);
        file_put_contents($this->path,$dataJson);
    }
    public function load() {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data)
    {
        $employees = [];
        foreach ($data as $e) {
            $employee = new Employee($e);
        }
    }




}