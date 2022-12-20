<?php

abstract class Zvire {

    public static int $pocet = 0;

    public static function pocetZvirat() : int {
        return self::$pocet;
    }

    private string $barva;

    public function __construct(string $barva)
    {
        $this->setBarva($barva);
        self::$pocet++;
    }

    /**
     * @return string
     */
    public function getBarva(): string
    {
        return $this->barva;
    }

    /**
     * @param string $barva
     */
    public function setBarva(string $barva): void
    {
        $this->barva = $barva;
    }

    public function zadupej() : string
    {
        return "Dupy dup!";
    }

    public function predstavSe() : string
    {
        return "Moje barva je {$this->barva}, dělám " . $this->ozviSe() . " a umím dupat: ".$this->zadupej();
    }

//    abstract function ozviSe() : string;
}

final class Krava extends Zvire
{
    private $jmeno;

    public function __construct(string $jmeno, string $barva)
    {
        $this->jmeno = $jmeno;
        parent::__construct($barva);
    }


    public function ozviSe() : string
    {
        return "Bůůůů";
    }
}
class Slon extends Zvire
{
    public function ozviSe() : string
    {
        return "Tůůůů";
    }
}

//class VeselaKrava extends Krava {
//
//}
