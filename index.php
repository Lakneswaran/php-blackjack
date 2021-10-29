<?php 

declare(strict_types=1);

require 'card/Suit.php';
require 'card/Card.php';
require 'card/Deck.php';
require 'card/Player.php';
require 'card/Dealer.php';
require 'card/Blackjack.php';



session_start();
if (!isset($_SESSION['Blackjack'])) {
    $blackjack = new Blackjack();
    $_SESSION["Blackjack"] = $blackjack;
}else{
    $blackjack = $_SESSION['Blackjack'];
}





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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div id="communicate">
        <button type="submit" name="hit" >HIT</button>
        <button type="submit" name="stand">STAND</button>
        <button type="submit" name="surrender">SURRENDER</button>
        <button type="submit" name="restart">Restart</button>

    </form>
    <div id="dispalycard">
        <?php echo $blackjack->getPlayer()->showcards();   ?>
    </div>

    <div id="dispalycard1">
        <?php echo $blackjack->getDealer()->showcards();   ?>
    </div>
    <div id="score">
        <p>Points: <?php echo $blackjack->getPlayer()->getScore(); ?>
    </div>

</body>
</html>