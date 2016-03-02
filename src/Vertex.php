<?php 
	
	namespace Bispojr\GraphLib;

	class Vertex{

		private $id;
	    
	    //CONSTRUCTOR
	    public function __construct($id)
	    {
	        $this->id = $id;
	    }
	    //GETs AND SETs
	    public function getId(){
	        return $this->id;
	    }
	    public function setId($id){
	        $this->id = $id;
	    }
	    public function equals(Vertex $vertex){
	    	if($this->id == $vertex->getId())
	    		return true;
	    	return false;
	    }
	}

?>