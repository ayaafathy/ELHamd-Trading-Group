<?php

require_once(__ROOT__ . "controller/controller.php");

class EmployeeController extends Controller
{
    public function insertEmp()
  {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //$dep = $_POST['Dep'];
    $mobile = $_POST['phoneno'];
    $DoB = $_POST['birthdate'];
    $Degree = $_POST['edudegree'];
    $EmpDate = $_POST['empdate'];
    $Salary = $_POST['salary'];
    $compid = $_POST['code'];


    $this->model->insertEmployee($first_name, $last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$Salary,$compid);
  }  
  
  public function editEmp()
  {
    $id = $_POST['empid'];
    $empfirstname = $_POST['empfirstname'];
    $last_name = $_POST['emplastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $Degree = $_POST['edudegree'];
    $dob = $_POST['DOB'];
    $EmpDate = $_POST['empdate'];
    $Salary = $_POST['salaryy'];
    $compid = $_POST['compid'];

    $this->model->editEmployee($id,$empfirstname,$last_name,$email,$address,$mobile,$dob,$Degree,$EmpDate,$Salary,$compid);
  }

  public function deleteEmp() 
  {
  $id = $_POST['ID'];
  $this->model->deleteEmployee($id);
  }
  
}