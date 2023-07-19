<?php

?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

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

            <!-- Input form -->
            <form class="input-group flex-nowrap mt-4 d-flex align-items-center">
                <label for="char-qty" class="px-4">Inserisci la Quantità di caratteri</label>
                <input type="number" class="form-control" id="char-qty" name="char-qty" placeholder="Quanti caratteri?" min="0">
                <button class="btn btn-dark">Invia</button>
            </form>

        </div>
</body>

</html>