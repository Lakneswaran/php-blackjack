<?php 

class Player{

    private $cards = [];
    private $lost = false;
    

    public function __construct($deck)
    {
        for($i=0;$i<2;$i++){
            $this->cards[]= $deck->drawCard();    
        }
        
    }

    
    public function hit($deck){
        $this->cards[]= $deck->drawCard();
        $score = $this->getScore();
        if($score<=21){
            $this->lost =true;
        }
    }


    public function surrender(){
         $this->lost = true;
    }


    public function getScore(){
        $score=0;
        foreach($this->cards as $card){
            $score += $card->getvalue();
        }
        return $this->score;
    }


    public function hasLost(){
        return $this->lost;
    }

    public function playcards(){
        return $this->cards;
    }

    public function showcards(){
        $displaycards = "";
        foreach($this->cards as $card) { 
        $displaycards .= $card->getUnicodeCharacter(true) ." "; 
        
      }
      return $displaycards;
    }

}


?>
