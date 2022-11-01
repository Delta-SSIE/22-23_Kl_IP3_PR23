<?php
session_start();
$name = filter_input(INPUT_POST, "name");
$password = filter_input(INPUT_POST, "password");

$error = false;

//validační část - v db
if ($name === "admin" && $password === "Tajemstv9.") {
    //zapiš login a přesměruj
    $_SESSION['logged'] = true;
    header("Location: homepage.php"); //před headerem nikdy neodesílat žádná HTML data
    exit;
    //za redirectem ukončit
} else if ($name !== null) {
    $error = true;
}
?>

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
if ($error) {
    echo "<h2>Chyba přihlášení</h2>";
}
?>
<form method="post"> <!-- bez action - sám na sebe-->
    Jméno: <input type="text" value="<?= htmlspecialchars($name) ?>" name="name" placeholder="vaše jméno" /><br />
    heslo: <input type="password" name="password" placeholder="heslo" /><br />
    <input type="submit" value="Přihlásit se" />
</form>

</body>
</html>
