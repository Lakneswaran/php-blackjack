<?php

class Dealer extends Player
{
    

    public function slash($deck){
        $score = parent::getScore();
        if($score<15){
            do{
                parent::hit($deck);
                $score = parent::getScore();
            }while($score<15);
            
        }

    }
}

?>