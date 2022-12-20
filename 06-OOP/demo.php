<?php
class Cislo {

    protected $hodnota = 2;

    public function vypis() { //metoda
        echo $this->hodnota;
    }

    public function uloz($novaHodnota) {
        $this->hodnota = $novaHodnota;
    }

    public function pricti($kolik) {
            $this->hodnota += $kolik;
    }
}

class CeleCislo extends Cislo {
    public function uloz($hodnota) {
        $this->hodnota = (int)$hodnota;
    }
}


$cislo = new Cislo();
$cislo->vypis();
echo "<br>";

$cislo->uloz(4);
$cislo->vypis();
var_dump($cislo);

$cislo->data = "DATA";

echo $cislo->data;
var_dump($cislo);

$cc = new CeleCislo();
$cc->uloz(3.5);
$cc->vypis();