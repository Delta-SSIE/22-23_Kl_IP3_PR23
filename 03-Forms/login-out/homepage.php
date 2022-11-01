<?php
session_start();
$notLogged = false;
if (!isset($_SESSION["logged"]) || $_SESSION["logged"] !== true) {
    $notLogged = true;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if ($notLogged)
        echo "<meta http-equiv='refresh' content='5;url=login.php'>"
    ?>
    <title>Document</title>
</head>
<body>
<?php
    if ($notLogged) {
        echo "<h1>Not logged in</h1>";
        echo "<p>You will be redirected in 5 seconds</p>";
    }
    else {
        echo "<h1>Welcome home</h1>";
        echo '<p>Log me <a href="logout.php">out</a>.</p>';

    }
?>
</body>
</html>
