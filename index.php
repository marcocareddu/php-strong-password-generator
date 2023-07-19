<?php
// Import functions from file
include __DIR__ . '/includes/functions.php';

// Create alphabet variables
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$symbols = '!@#$%`&*';

// Get character quantity from user input
$char_qty = $_GET['char-qty'] ?? '';

// Get character repetition option from user
$character_repetition = $_GET['repetition'] ?? false;

// Get options values
$uppercase_option = $_GET['uppercase'] ?? false;
$numbers_option = $_GET['numbers'] ?? false;
$symbols_option = $_GET['symbols'] ?? false;

// Create pwd
$generated_pwd = get_random_characters($char_qty, $uppercase, $lowercase, $numbers, $symbols, $character_repetition);

// Export $generated_pwd
session_start();
$_SESSION['pwd'] = $generated_pwd;

// Redirect
if ($generated_pwd != '') {
    header('Location: ./pwd.php');
}

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

            <!-- Input form -->
            <form class="mt-4">

                <!-- Password length -->
                <div class="input-group">
                    <label for="char-qty" class="px-4">Inserisci la quantità di caratteri</label>
                    <input type="number" class="form-control" id="char-qty" name="char-qty" placeholder="Quanti caratteri?" min="0">
                </div>


                <!-- CHECKBOX OPTIONS -->

                <!-- Checkbox duplicate -->
                <div class="form-check form-switch d-flex justify-content-between ps-4 mt-4">
                    <label class="form-check-label" for="repetition">Consenti la ripetizione dello stesso carattere?</label>
                    <input class="form-check-input" type="checkbox" id="repetition" name="repetition">
                </div>

                <!-- Checkbox uppercase -->
                <div class="form-check d-flex justify-content-between ps-4 mt-4">
                    <label class="form-check-label" for="uppercase">Lettere Maiuscole</label>
                    <input class="form-check-input" type="checkbox" id="uppercase" name="uppercase">
                </div>

                <!-- Checkbox numbers -->
                <div class="form-check d-flex justify-content-between ps-4 mt-4">
                    <label class="form-check-label" for="numbers">Numeri</label>
                    <input class="form-check-input" type="checkbox" id="numbers" name="numbers">
                </div>

                <!-- Checkbox symbols -->
                <div class="form-check d-flex justify-content-between ps-4 mt-4">
                    <label class="form-check-label" for="symbols">Simboli</label>
                    <input class="form-check-input" type="checkbox" id="symbols" name="symbols">
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button class="btn btn-dark mt-4">Invia</button>
                </div>

            </form>
        </div>
</body>

</html>