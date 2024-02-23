<?php
// name="nome"
$testo = $_POST["nome"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconda pagina</title>
</head>
<body>

    <?php
        if($testo){
            // str_replace sostituisce "tutti" con *** in "$testo"
            $censored = str_replace("tutti", "***", $testo);

            // echo stampa il testo censurato
            echo "<p>$censored</p>";

            // strlen ritorna la lunghezza del $testo
            $lunghezza = strlen($testo);
            echo "<p>Il testo è lungo: $lunghezza</p>";
        }
    ?>
    
</body>
</html>
