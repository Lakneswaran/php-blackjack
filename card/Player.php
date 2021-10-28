<?php 

class Player{

    private $cards = [];
    private $lost = false;

    
    public function hit(){
        
    }


    public function surrender(){
        
    }


    public function getScore(){
        $score=0;
        foreach($cards as $card){
            $score += $card->getvalue();
        }
    }


    public function hasLost(){
        
    }

}


?>
