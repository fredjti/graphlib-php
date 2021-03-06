<?php
	
	namespace BispoJr\GraphLib;

	class Factory{

		//OTHER METHODS
	    public static function k ($n){
	        
	        $g = new Graph("K ".$n);
	        
	        for($i=1; $i<=$n; $i++){
	            $g->addVertexByID("v".$i);
	        }
	        
	        for($i=1; $i<$n; $i++){
	            for($j = $i+1; $j<=$n; $j++){
	                $g->addEdgeByID("v".$i, "v".$j);
	            }
	        }
	        
	        return $g;
	    }
	    public static function path ($n){
	        
	        $g = new Graph("Path ".$n);

	        for($i=1; $i<=$n+1; $i++){
	            $g->addVertexByID("v".$i);
	        }
	        
	        for($i=1; $i<$n+1; $i++){
	            $g->addEdgeByID("v".$i, "v".($i+1));
	        }
	        
	        return $g;
	    }
	    public static function circuit ($n){
	        
	        $g = self::path($n-1);
	        
	        $g->setName("Circuit ".$n);
	        $g->addEdgeByID("v1", "v".$n);
	        
	        return $g;
	    }    
	}
?>