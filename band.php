<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le SON</title>
    <link rel="stylesheet" href="style1.css">

</head>
<header>
    <h1> <?php echo generate_bandname(); ?> </h1>
    <a> <img src=" <?php echo generate_bandlogo() ; ?>" alt="" class='logo'> </a>
    <nav>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#setlist">Setlist</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>

<footer>
    <p><?php date_default_timezone_set('Europe/Paris'); 
    echo "Nous sommes le ";
    echo date('jS F Y');
    echo ", il est ";
    echo date('H:i');
    ?></p>
</footer>