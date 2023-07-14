<?php
    $censured_word = $_GET["word"];
    $paragraph = $_GET[trim("paragraph")];
    $final_text = str_replace(strtolower($censured_word)), '*********', strtolower($paragraph)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text with bad word</title>
</head>

<body>

    <!-- Badword:-->
    <h2>La parola censurata è <?= $censured_word ?> </h2>

    <!-- Original text: -->

    <h2 class="mt-3">Testo originale:</h2>
    <p><?= $paragraph ?></p>

    <!-- Lenght: -->
    <h3>Lungo <?= strlen($paragraph) ?> caratteri</h3>

    <!-- Original text: -->
    <h2 class="mt-3">Testo originale:</h2>
    <p><?= $final_text ?></p>

    <!-- Lenght: -->
    <h3>Lungo <?= strlen($final_text) ?> caratteri</h3>

</body>

</html>