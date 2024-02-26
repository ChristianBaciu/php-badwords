<?php
    $censored = $_POST['censored'];
    $paragrafo = $_POST['paragrafo'];
    $paragrafo_censurato = str_replace($censored, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconda pagina</title>
</head>
<body>

    <p>
        il paragrafo è: <?php echo $paragrafo ?> <br>
        la sua lunghezza è: <?php echo strlen($paragrafo) ?>
    </p>
        
    <p>
        la sua censura è: <?php echo ($paragrafo_censurato) ?> <br>
        la sua lunghezza è: <?php echo strlen($paragrafo_censurato) ?>
    </p>

</body>
</html>
