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
    <h2>La parola censurata è <?= $censured_word ?> </h2>
</body>

</html>