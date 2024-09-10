<?php
$title = "Ma Première Page en PHP";
$content = "Bienvenue sur ma première page générée avec PHP !";
$footer = " MonSiteWeb";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <main>
        <p><?php echo $content; ?></p>
    </main>

    <footer>
        <p><?php echo $footer; ?></p>
    </footer>
</body>
</html>
