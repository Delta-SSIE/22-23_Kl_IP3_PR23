<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Připojení k DB</title>
</head>
<body class="container">
<?php

require_once "inc/db_connect.inc.php";

$stmt = $pdo->query('SELECT room_id, name, no, phone FROM room ORDER BY no');

if ($stmt->rowCount() == 0) {
    echo "Záznam neobsahuje žádná data";
}
else
{
    echo "<table class='table table-striped'>";
    echo "<tr><th>Name</th><th>No.</th><th>Phone</th></tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td><a href='room.php?roomId={$row->room_id}'>{$row->name}</a></td>";
        echo "<td>{$row->no}</td>";
        echo "<td>{$row->phone}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
unset($stmt);

?>
</body>
</html>