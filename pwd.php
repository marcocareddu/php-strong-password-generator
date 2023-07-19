<?php
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>PHP - PWD Generator</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3">

            <h1>PHP PASSWORD GENERATOR</h1>
            <div>
                <h3>La tua password è: </h3>
                <?php session_start(); ?>
                <h4><?= $_SESSION['pwd'] ?></h4>
            </div>
            <a href="./index.php" class="btn btn-dark">Ritorna</a>
        </div>
</body>

</html>