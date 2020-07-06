<?php



class ReadNewsArticle {

	public $mass;
	
	public function __construct() {
		$this->arr = new ReadOneNewsDB();
		$this->mass = $this->arr -> readNews();        
	}


	public function outIndx() {
		// foreach($this->mass as $ms) {
		// 	foreach($ms as $key => $value) {                
		// 		if($key == 'id') {
		// 			echo("<a href=". "id" . ">$value</a>");
		// 		}
		// 	}
		// }        

		return ($this->mass);

	}


	public function outNews() {

	}



}