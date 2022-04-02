<?php
/*
7. (STATIC) Sukurkite klasę MarsoPalydovas. Kontroliuokite objekto kūrimą iš
klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima
sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite
privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik
lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas
vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.
*/

class MarsSatellite
{
    private static $twoObjects = 1;
    private $title;

    private function __construct($title) {
        $this->title = $title;
    }

    static function createMarsSatellite() {
        $twoObjects = MarsSatellite::$twoObjects;
        $object1 = new MarsSatellite("Deimas");
        $object2 = new MarsSatellite("Fobas");
        
        if ($twoObjects == 1) {
            MarsSatellite::$twoObjects++;
            return $object1;
        } else if ($twoObjects == 2) {
            MarsSatellite::$twoObjects++;
            return $object2;
        } else if ($twoObjects > 2) {
            $rand = rand(1, 2);
            if ($rand == 1) {
                return $object1;
            } else {
                return $object2;
            }
        }
    }
}