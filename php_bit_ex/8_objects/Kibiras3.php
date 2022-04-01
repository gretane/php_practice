<?php

/*
4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3.
Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3.
KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas
Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5.
Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.
*/

class Kibiras3 
{

    protected $akmenuKiekis = 0;

    function prideti1Akmeni() {
        $this->akmenuKiekis++; 
        echo 'Put one stone. Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
    }

    function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
        echo 'Put ' . $kiekis . ' stones. Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
    }

    function kiekPririnktaAkmenu() {
        echo 'Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
    }

}

class KibirasNePo1 extends Kibiras3 
{
    function prideti1Akmeni() {
        $this->akmenuKiekis += rand(2, 5); 
        echo 'Put one stone. Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
    }

}