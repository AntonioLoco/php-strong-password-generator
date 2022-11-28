<?php
include __DIR__ . "/partials/functions.php";
session_start();

$pwd_length = $_GET["passwordLength"] ?? "";
$pwd_length = intval($pwd_length);

$pwd_repetition = $_GET["repetition"] ?? "";
$pwd_letters = $_GET["lettersCheck"] ?? "";
$pwd_numbers = $_GET["numbersCheck"] ?? "";
$pwd_simbols = $_GET["simbolsCheck"] ?? "";

if (!empty($pwd_length) && !empty($pwd_repetition)) {
    $_SESSION["password"] = pwd_generator($pwd_length, $pwd_repetition, $pwd_letters, $pwd_numbers, $pwd_simbols);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css">
    <title>Password Generator</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="title">Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="index.php" method="GET">
                <div class="input mb-5 d-flex justify-content-between align-items-center">
                    <label for="password_length">Lunghezza password:</label>
                    <input type="number" name="passwordLength" id="password_length" class="form-control">
                </div>
                <div class="input mb-5 d-flex justify-content-between align-items-center">
                    <label for="">Consenti ripetizioni di uno o più caratteri: </label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetition" id="flexRadioDefault1" value="true" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetition" id="flexRadioDefault2" value="false">
                            <label class="form-check-label" for="flexRadioDefault2">
                                no
                            </label>
                        </div>
                    </div>
                </div>
                <div class="input mb-5 d-flex flex-column align-items-end">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" name="lettersCheck">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" name="numbersCheck">
                        <label class="form-check-label" for="flexCheckDefault">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" name="simbolsCheck">
                        <label class="form-check-label" for="flexCheckDefault">
                            Simboli
                        </label>
                    </div>
                </div>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                    <?php if (!empty($pwd_length)) { ?>
                        <a href="result.php" class="btn btn-primary">Vai al risultato</a>
                    <?php } ?>
                </div>
            </form>
        </div>
    </main>
</body>

</html>