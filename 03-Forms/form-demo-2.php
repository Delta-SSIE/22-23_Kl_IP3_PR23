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
<form method='get'>
    <input type="checkbox" name="order[pizza][]" value="šunková" />Šunková<br />
    <input type="checkbox" name="order[pizza][]" value="hawaii" />Hawaii<br />
    <input type="checkbox" name="order[pizza][]" value="quatro" />Čtyři roční období<br />
    <input type="submit" value="odeslat" />
</form>
<?php  var_dump($_GET); ?>

</body>
</html>