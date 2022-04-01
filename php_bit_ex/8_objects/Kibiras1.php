<?php
/*
Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai
savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir
metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti
akmenų rinkimą į kibirą ir rezultatų išvedimą.
*/

class Kibiras1 {

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



