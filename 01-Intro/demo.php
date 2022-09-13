<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//$variable = "ABC";
//echo " this is a {$variable}";

//$retezec = "přesně😀";
//echo mb_substr($retezec, 2);
//echo mb_strlen($retezec);
//echo "<br>";


//$retezec[0]= "K";
//echo $retezec;
//echo "<br>";
//
//$r2 = $retezec . "abc";
//echo $r2;
//
//echo "12" + "34";

//$var = "Bob řekl: \"A to mě ani nehne. Já se s takovým 'nýmandem' vůbec nebudu bavit\"";
//var_dump( $var );

//$arr = [
//    1 => 2,
//    2 => 7,
//    5 => 4,
//];
//
//var_dump($arr);
//
//var_dump(count($arr));
//
//$arr2 = [
//    "pepa" => "Josef Novotný",
//    "lojza" => "Alois Němeček",
//    "ivča" => "Ivana Zelená"
//
//];

//var_dump($arr2["pepa"]);

//$squares = [];
//for($i = 0; $i < 11; $i++)
//    $squares[] = $i**2;
//
////var_dump($squares);
//
//foreach ($squares as $key => $value) {
//     echo "$key : $value <br>";
//}

function htmlSelect($name, $options, $selectedItem)
{
    $result = "";
    $result .= "<select name='$name'>";
    foreach ($options as $key => $val) {
        $selectHTML = $key === $selectedItem ? " selected" : "";
        $key = htmlspecialchars($key);
        $val = htmlspecialchars($val);
        $result .= "<option value='{$key}'{$selectHTML}>{$val}</option>";
    }
    $result .= "</select>";
    return $result;
}

$options = [
    "volvo" => "Volvo",
    "bmw" => "BMW",
    "trabant" => "Trabant",
    "skoda" => "Škoda"
];
echo htmlSelect( "auto", $options, "skoda" );


$options = [
  "p" => "<p>",
  "div" => "<div>",
  "br" => "<br>"
];

echo htmlSelect( "element", $options, "br" );

?>
</body>
</html>
