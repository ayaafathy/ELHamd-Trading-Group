<?php

require_once(__ROOT__ . "controller/Controller.php");

class users_controller extends Controller{
	public function insert() {
		$username = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$empid = $_REQUEST['emp_id'];

		$this->model->registerUser($username, $pass, $empid);
    }
    
}