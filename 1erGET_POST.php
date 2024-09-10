<?php
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['PHP_SELF']
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de la Requête</title>
</head>
<body>

    <div>
        <h2>Méthode HTTP de la requête</h2>
        <p><?php echo $method; ?></p>
    </div>

    <div >
        <h2>URL complète de la requête</h2>
        <p><?php echo $url; ?></p>
    </div>

</body>
</html>
