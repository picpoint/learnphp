<?php

require_once "../models/readOneNewsDBClass.php";



class ReadNewsArticle {

	public $mass;
	
	public function __construct() {
		$this->arr = new ReadOneNewsDB();
		$this->mass = $this->arr -> readNews();        
	}


	public function outIndx() {
		foreach($this->mass as $ms) {
			foreach($ms as $key => $value) {                
				if($key == 'id') {
					echo("<a href=". "?id=$value" . ">$value</a>");
				}
			}
		}        
		// return ($this->mass);

	}


	public function outNews() {
		foreach($this->mass as $ms) {
			foreach($ms as $key => $value) {                
				if($key == 'id') {
					$get = new ReadOneNewsDB();
					$news = $get -> readOneNews($key);
					// return $news;
				}
			}
		}        

		foreach($news as $nws) {
			foreach($nws as $key => $value) {
				if($key != 'id') {
					echo("$value");
					echo("<br>");
				}				
			}
		}

	}



}