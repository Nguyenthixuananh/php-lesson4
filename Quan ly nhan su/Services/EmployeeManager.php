<?php

include_once '../Models/Employee.php';

class EmployeeManager
{
    private array $employees;
    private $path = __DIR__ . '/employee.json';

    public function __construct()
    {
        $this->employees = $this->load();
    }

    public function getAllEmployees()
    {
        return $this->employees;
    }

    public function storeEmployees($employee)
    {
        array_push($this->employees, $employee);
        $this->save();
    }

    public function getEmployeeById($id)
    {
        return $this->employees[$id];
    }

    public function deleteEmployeeById($id)
    {
        array_splice($this->employees, $id, 1);
        $this->save();
    }

    public function save()
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($this->path, $dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data)
    {
        $employees = [];
        foreach ($data as $e) {
            $employee = new Employee($e['firstName'], $e['lastName'], $e["birthDate"], $e["address"], $e['jobTitle']);
            $employees[] = $employee; //array_push
        }
//        $this->showLog($employees);
        return $employees;
    }


    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }


}