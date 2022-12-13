<?php
var_dump($_POST);
var_dump($_FILES);

$targetDir = "uploads/";

$targetFile = $targetDir . basename($_FILES["uploadedName"]["name"]);
$imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);

$uploadSuccess = true; //pomocná  - označí nám chybu

//kontrola existence
if (file_exists($targetFile)) {
    echo "Soubor již existuje!";
    $uploadSuccess = false;
}

// Kontrola velikosti (vlastní limit)
if ($_FILES["uploadedName"]["size"] > 500000) {
    echo "Soubor je příliš velký";
    $uploadSuccess = false;
}

// Kontrola typu – vždy WHITELIST
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Bohužel jsou podporovány jen soubory typů JPG, JPEG, PNG a GIF.";
    $uploadSuccess = false;
}


// zkontrolujeme proměnnou, která by nesla chybu
if (! $uploadSuccess) {
    echo "Bohužel došlo k chybě uploadu";

// pokud je vše v pořádku, uložíme soubor trvale
} else {
    if (move_uploaded_file($_FILES["uploadedName"]["tmp_name"], $targetFile)) {
        echo "Soubor ". basename( $_FILES["uploadedName"]["name"]). " byl uložen.";
        echo "<img src='$targetFile' alt='uploaded file'>";
    } else {
        echo "Bohužel došlo k chybě uploadu";
    }
}
