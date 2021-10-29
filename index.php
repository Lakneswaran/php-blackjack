<?php 

declare(strict_types=1);

require 'card/Suit.php';
require 'card/Card.php';
require 'card/Deck.php';
require 'card/Blackjack.php';
require 'card/Dealer.php';
require 'card/Player.php';

session_start();
if (!isset($_SESSION['Blackjack'])) {
    $blackjack = new Blackjack();
    $_SESSION["Blackjack"] = $blackjack;
}else{
    $blackjack = $_SESSION['Blackjack'];
}

var_dump($blackjack->getPlayer()->playcards());

// $deck = new Deck();
// $deck->shuffle();
// foreach($deck->getCards() AS $card) {
//     echo $card->getUnicodeCharacter(true);
//     echo '<br>';


// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <div id="communicate">
        <button type="submit" name="hit" >HIT</button>
        <button type="submit" name="stand">STAND</button>
        <button type="submit" name="surrender">SURRENDER</button>

    </form>
</body>
</html>