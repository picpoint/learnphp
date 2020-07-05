<?php



class ReadOneNewsDB {

    protected $cnnct;
    
    
    public function __construct() {
        $this->cnnct = new PDO('mysql:host=localhost;dbname=task8', 'rmtar', '2203');        
    }    


    
    public function readOneNews() {
        $sth = $this->cnnct -> prepare('SELECT * FROM news');
        $sth -> execute();
        $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}