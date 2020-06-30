<?php



class ReadFields {
	public $firstname;
	public $lastname;
	public $age;
	public $gender;
  public $sendbtn;  
  public $arr = [];


	function makeArr() {    
    $this->firstname = $_POST['firstname'];
    $this->lastname = $_POST['lastname'];
    $this->age = $_POST['age'];
    $this->gender = $_POST['gender'];
    
    if(isset($_POST['sendbtn']) && !empty($this->firstname) && !empty($this->lastname) && !empty($this->age) && !empty($this->gender)) {
      $arr["$this->firstname"] = $this->firstname;
      $arr["$this->lastname"] = $this->lastname;
      $arr["$this->age"] = $this->age;
      $arr["$this->gender"] = $this->gender;    

      return $arr;
    } else {
      return false;
    }
    
  }


}