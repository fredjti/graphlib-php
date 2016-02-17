<?php
	
	namespace BispoJr\GraphLib;

	class Algorithm{

		/**
	     * It verifies if the graph is or not regular.
	     * 
	     * @param g
	     * @return true, if the graph is regular; or false, on the contrary.
	     */
	    public static function isRegular(Graph $g){
	        
	        $allVertices = $g->getVertexSet();

	        $degree = -1;
	        
	        foreach($allVertices as $vertex){
	            if($degree != -1){
	                if($g->degreeOf($vertex) != $degree)
	                    return false;
	            }
	            else $degree = $g->degreeOf($vertex);
	        }
	        
	        return true;
	    }

	    public static function somaDosGraus(Graph $g){
	        
	        $allArestas = $g->getEdgeSet();

			if(count($allArestas) == 1){
	        	return 2;
	        }
	        else{
	            $edge = self::anyEdge($g); 
	            $h = self::graphMinusEdge($g, $edge);
	            return ( 2 + self::somaDosGraus($h) );
	        } 
	       	                
	    }

	    public static function graphMinusEdge(Graph $g, Edge $edge){

	    	$newName = $g->getName()." - e";
	    	$h = new Graph($newName);

	    	$allVertices = $g->getVertexSet();
	    	$h->setVertexSet($allVertices);	
	    	
	    	$allEdges = $g->getEdgeSet();
	    	foreach ($allEdges as $e) {
				$endPoints = $e->getEndPoints();
				$source = $endPoints[0];
				$target = $endPoints[1];

				if( !($edge->contains($souce) && $edge->contains($target)) )
					$h->addEdge($source, $target);
	    	}    	

	    	return $h;
	    }

	    public static function anyEdge(Graph $g){

	    	$edgeSet = $g->getEdgeSet();
	    	$size = count($edgeSet);

	    	if($size != 0){		    	
		    	$position = rand(0, $size-1);
		    	return $edgeSet[$position];
		    }

		    return null;
	    }

	    public static function ArestasArvore(Graph $g){
	        
	        $allVertices = $g->getVertexSet();

	        
	        
	            if($allVertices == 1){
	                
	                    return 0;
	            }
	            else $degree = $g->degreeOf($vertex);
	        
	        
	        return (1+ ArestasArvore());
	    }


	}
?>