<!-- display_logo.php -->
<?php
include 'generate_bandlogo.php'; // Ensure this file contains the generate_bandlogo function

$logo_path = generate_bandlogo();

if ($logo_path) {
    // Convert the path to a format suitable for a web browser (use forward slashes)
    $web_path = str_replace('\\', '/', $logo_path);
    echo "<img src='$web_path' alt='Random Band Logo' />";
} else {
    echo "Aucune image trouvée dans le dossier spécifié.";
}
?>
