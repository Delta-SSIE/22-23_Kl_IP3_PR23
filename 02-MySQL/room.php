<?php
$roomId = filter_input(
    INPUT_GET,
    'roomId',
    FILTER_VALIDATE_INT,
    ["options" => ["min_range" => 1]]
);

if (!$roomId) {
    http_response_code(400);
    echo "<h1>Bad request</h1>";
    die;
}


$roomId = filter_input(
    INPUT_GET,
    'roomId',
    FILTER_VALIDATE_INT,
    ["options" => ["min_range" => 1]]
);
require_once "inc/db_connect.inc.php";

$query = "SELECT * FROM `room` WHERE `room_id`=:roomId";
$stmt = $pdo->prepare($query);
$stmt->execute(['roomId' => $roomId]);

if ($stmt->rowCount() === 0)
{
    http_response_code(404);
    echo "<h1>Not found</h1>";
    die;
}

$room = $stmt->fetch();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail místnosti <?php echo $room->no ?></title>
</head>
<body>
<?php

echo "<h1>{$room->name}</h1>";
echo "<div>Tel: {$room->phone}</div>";
echo "<div>Číslo: {$room->no}</div>";

echo "<div><a href='rooms.php'>Zpátky</a></div>";
?>
</body>
</html>
