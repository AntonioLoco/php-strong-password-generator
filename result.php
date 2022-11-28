<?php
session_start();

$pwd_result = $_SESSION["password"];
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
    <title>Result Password</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>La tua password è:</h1>
            <h2><?php echo $pwd_result ?></h2>

            <a href="lougout.php">Ritorna al Generator</a>
        </div>
    </header>
</body>

</html>