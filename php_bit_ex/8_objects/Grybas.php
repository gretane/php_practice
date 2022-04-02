<?php

/*
6. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą dydis
lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes,
svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos
taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki
45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir
valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių
ir valgomų grybų (gali būti biški daugiau nei dydis).
*/

class Mushroom
{
    private $edible;
    private $wormEaten;
    private $weight;

    public function __construct($edible = 0, $wormEaten = 0, $weight = 0){
        $edible = rand(0, 1);
        $wormEaten = rand(0, 1);
        $weight = rand(5, 45);
        $this->edible = $edible;
        $this->wormEaten = $wormEaten;
        $this->weight = $weight;
    }

    function getEdible() {
        return $this->edible;
    }

    function getWormEaten() {
        return $this->wormEaten;
    }

    function getWeight() {
        return $this->weight;
    }
}