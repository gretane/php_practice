<?php

/*
2. Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir
metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į
piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai,
jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(),
kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai
sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios
popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.
*/

class Wallet{
    private $cash;
    private $coins;

    function put($amount) {
        if ($amount <= 2) {
            $this->coins += $amount;
            echo 'Put ' . $amount . ' Eur in coins into wallet. <br/><br/>';
        } else {
            $this->cash += $amount;
            echo 'Put ' . $amount . ' Eur in cash into wallet. <br/><br/>';
        }
    }

    function count() {
        echo 'There are ' . $this->coins . ' Eur in coins in the wallet. <br/><br/>';
        echo 'There are ' . $this->cash . ' Eur in cash in the wallet. <br/><br/>';
        $sum = $this->coins + $this->cash;
        echo 'Overall amount of money: ' . $sum . '. <br/><br/>';
    }
}