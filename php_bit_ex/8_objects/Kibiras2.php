<?php

/*
3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2.
Patobulinkite pridėdami statinę privačią savybę
akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta
visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį
klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris
kibirus ir pademonstruokite veikimą.
*/

class Kibiras2 {

    protected $akmenuKiekis = 0;
    private static $akmenuKiekisVisuoseKibiruose;

    function prideti1Akmeni() {
        $this->akmenuKiekis++; 
        echo 'Put one stone. Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
        Kibiras2::$akmenuKiekisVisuoseKibiruose++;
    }

    function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
        echo 'Put ' . $kiekis . ' stones. Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
        Kibiras2::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    function kiekPririnktaAkmenu() {
        echo 'Now there are ' . $this->akmenuKiekis . ' stones in the bucket. <br/>';
    }

    static function getVisuoseKibiruose() {
        echo 'Stones in all buckets: ' . Kibiras2::$akmenuKiekisVisuoseKibiruose . '.<br/>';
    }

}