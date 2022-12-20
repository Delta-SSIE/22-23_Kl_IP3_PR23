<?php

require_once "./zvire.class.php";

$krava = new Krava("Stračena", "strakatá");
//$krava->setBarva("hnědá");
echo $krava->predstavSe();

//$mlok = new Zvire("černá");

echo "<br>Už máme " . Krava::$pocet . " zvířat";
