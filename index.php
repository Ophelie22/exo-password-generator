<?php
    require_once "./CheckPassword.php";
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Exercice: Générateur de mot de passe</title>
</head>

<body>
    <div class="container py-2">
        <h1 class="text-center">Exercice: Générateur de mot de passe</h1>
        <?php if(empty($error)) : ?>
            <div class="alert alert-success" role="alert">
                Success !
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Echec: <?= $error->getMessage() ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>