<?php 

declare(strict_types=1);

require 'card/Suit.php';
require 'card/Card.php';
require 'card/Deck.php';

$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';


}


?>