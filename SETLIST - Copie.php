<?php
session_start();
require('db_connect.php');

// Paramètres pour le tri
$sort_column = isset($_GET['sort']) ? $_GET['sort'] : 'title';
$sort_order = isset($_GET['order']) && $_GET['order'] === 'desc' ? 'DESC' : 'ASC';


$valid_columns = ['title', 'artist', 'style'];
if (!in_array($sort_column, $valid_columns)) {
    $sort_column = 'title';
}
if (!in_array($sort_order, ['ASC', 'DESC'])) {
    $sort_order = 'ASC';
}


$sql = "SELECT title, artist, style FROM setlist ORDER BY $sort_column $sort_order";
$stmt = $pdo->query($sql);
$tracks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setlist</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('header.php'); ?>
    <main>
        <h2>Liste des Titres</h2>
        <table border="1">
            <thead>
                <tr>
                    <th><a href="?sort=title&order=<?php echo $sort_order === 'ASC' ? 'desc' : 'asc'; ?>">Titre</a></th>
                    <th><a href="?sort=artist&order=<?php echo $sort_order === 'ASC' ? 'desc' : 'asc'; ?>">Artiste</a></th>
                    <th><a href="?sort=style&order=<?php echo $sort_order === 'ASC' ? 'desc' : 'asc'; ?>">Style</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($tracks)) {
                    foreach ($tracks as $track) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($track['title']) . "</td>";
                        echo "<td>" . htmlspecialchars($track['artist']) . "</td>";
                        echo "<td>" . htmlspecialchars($track['style']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucun titre trouvé</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

</body>
<?php require('footer.php'); ?>
</html>
