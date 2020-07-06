<?php



class ReadOneNewsDB {
	protected $cnnct;
	
	public function __construct() {
		$this->cnnct = new PDO('mysql:host=localhost;dbname=task8', 'rmtar', '2203');        
	}    

	
	public function readNews() {
		$sth = $this->cnnct -> prepare('SELECT * FROM news');
		$sth -> execute();
		$data = $sth -> fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	

	public function readOneNews($id) {
		$sth = $this->cnnct -> prepare('SELECT * FROM news WHERE id=:id');
		$sth -> execute([':id' => $_GET["$id"]]);
		$data = $sth -> fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}



}