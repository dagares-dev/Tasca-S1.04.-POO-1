<?php
declare(strict_types=1);

require_once 'PokerDice.php';

$dice = [];


 for($i=0; $i<5; $i++) {
$dice[] = new PokerDice();
 }

 foreach($dice as $die) {
    $die->rollDice();
 }

echo "<h2>Nivell 2</h2>";
echo "<h3>Exercici 1</h3>";

foreach ($dice as $die) {
    echo "Con este dado ha salido la figura: " . $die->getLastFace() . "<br>";
}

echo "<br>";
echo "El número total de tiradas: " . PokerDice::getTotalRolls();