<?php

/*
5. Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti
metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra
mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti
metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas
netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150,
100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar
mažesnę.
*/

class Glass
{
    private $volume;
    private $amount;

    public function __construct($volume){
        $this->volume = $volume;
    }
    function pourInto($amount){
        echo $this->amount . '<br/>';
        if ($this->volume >= $amount) {
            $this->amount += $amount;
        } else {
            $this->amount = $this->volume;
        }
    }


    function spill() {
        return $this->amount;
    }
}