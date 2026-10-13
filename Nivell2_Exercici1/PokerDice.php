<?php
/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Ha de tenir un mètode que no faci altra cosa que tirar el dau.
Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.
*/
declare(strict_types=1);

class PokerDice{
    const array FACES = ["As","K", "Q", "J", "7", "8"];

    private ?string $lastFace = null;
    private static int $totalRolls = 0;


    public function rollDice(): void {
    $this->lastFace = self::FACES[random_int(0, count(self::FACES) - 1)];
    self::$totalRolls++;
    }

    public function getLastFace(): ?string {
        return $this->lastFace;
    }

    public static function getTotalRolls(): int {
        return self::$totalRolls;
    }
}