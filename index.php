<?php
include __DIR__ . "/partials/functions.php";

$pwd_length = $_GET["passwordLength"] ?? 0;
$pwd_length = intval($pwd_length);

$pwd_result = pwd_generator($pwd_length);
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
    <link rel="stylesheet" href="style.css">
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
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                </div>
            </form>
        </div>

        <div class="container mt-5 p-4 text-center">
            <h4>La password generata:</h4>
            <h2><?php echo $pwd_result; ?></h2>
        </div>
    </main>
</body>

</html>