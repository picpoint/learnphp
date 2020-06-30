<?php



class ReadFields {
	public $firstname;
	public $lastname;
	public $age;
	public $gender;
  public $sendbtn;  
  public $arr = [];


	function makeArr() {    
    $this->firstname = trim($_POST['firstname']);
    $this->lastname = trim($_POST['lastname']);
    $this->age = trim($_POST['age']);
    $this->gender = trim($_POST['gender']);
    
    if(isset($_POST['sendbtn']) && !empty($this->firstname) && !empty($this->lastname) && !empty($this->age) && !empty($this->gender)) {
      $arr[0] = $this->firstname;
      $arr[1] = $this->lastname;
      $arr[2] = $this->age;
      $arr[3] = $this->gender;    

      return $arr;
    } else {
      return false;
    }
    
  }


}