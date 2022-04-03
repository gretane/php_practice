<?php

/*
8. (STATIC) Sukurti klasę Tenisininkas. Klasė Tenisininkas turi privačią savybę
vardas, privačią savybę kamuoliukas (true jei turi ir false jei ne) privačią
static savybę zaidejas1, privačią static savybę zaidejas2 (žaidėjų
objektams saugoti) Klasė turi tokius metodus:
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas
objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam
žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. Iškviesti
statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti
kamuoliuką. Žaidėjo objekto metodu perduotiKamuoliuka() perduoti
kamuoliuką kitam žaidėjui ir grąžinti atgal iš kito žaidėjo objekto
*/

class TennisPlayer
{
    private $name;
    private $ball;
    private static $player1;
    private static $player2;

    private function __construct($name ='', $ball = 0) {
        $this->ball = $ball;
        $this->name = $name;
    }

    // public function hasBall() {
    //    
    // }
    
    public static function startOfGame() {
        $rand = rand(1, 2);
        if ($rand == 1) {
            TennisPlayer::$player1 = new TennisPlayer('Bella', 1);
            TennisPlayer::$player2 = new TennisPlayer('Thomas', 0);
            echo TennisPlayer::$player1->name . ' has the ball and starts the game. <br/>';
            return TennisPlayer::$player1;
        } else {
            TennisPlayer::$player1 = new TennisPlayer('Bella', 0);
            TennisPlayer::$player2 = new TennisPlayer('Thomas', 1);
            echo TennisPlayer::$player2->name . ' has the ball and starts the game. <br/>';
            return TennisPlayer::$player2;
        }
    }

    public function passBall() {
        if (TennisPlayer::$player1->ball == 1 && TennisPlayer::$player2->ball == 0) {
            echo TennisPlayer::$player1->name . ' passes ball to Thomas. <br/>';
            TennisPlayer::$player1->ball == 0;
            TennisPlayer::$player2->ball == 1;
            return TennisPlayer::$player2;
        } else if (TennisPlayer::$player2->ball == 1 && TennisPlayer::$player1->ball == 0){
            echo TennisPlayer::$player2->name . ' passes ball to Bella. <br/>';
            TennisPlayer::$player1->ball == 1;
            TennisPlayer::$player2->ball == 0;
            return TennisPlayer::$player1;
        } else {
            echo 'Something went wrong. <br/>';
        }
    }

}