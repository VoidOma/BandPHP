
<?php require('db_connect.php'); ?>
<?php
function generate_bandname() {
    $list1 = array(
        "", "Weed","Speed","Smoke", "Shred", "Spit", "Carnal", "Riff", "Rock", 
        "Eletric", "Black", "Saint", "The", "Acid", "Kink","Bong", "The Church of", 
        "Flame", "Sacred", "Lord", "Burning", "Red", "Sapphire", "Night", "Cannabis", 
        "Doom", "Lizard", "Dope", "Worship", "Sludge", "Heavy", "Lady", "Toxic", "Bad", 
        "Monster", "Suck", "Leather", "Warrior", "Snow", "Orange", "Banshee", "Devil", 
        "The Dark", "Smoking", "Funeral", "Vapor", "Toke", "Goat", "Unholy", "Eternal", 
        "Spirit", "Stoner", "Pot", "Blood", "Intersteller", "Sacrificial", "Fuzz", "Tone");

    $list2 = array(
        " King"," Queen"," Lizard", "lord"," Jesus", " Fire", " Wizard", " Destroy", 
        "s", " Ripper", " Sluts", "", " Flame", " Witch", " Sabbath", " Stalker", 
        " Acid", " Burn Out", "opolis", " Warden", " Fettish", " Kink", " Pills", 
        " Sky", " Ash", " Sadist", " Masochist", " Preist", " Sacrafice", " Slayer", 
        " Crown", " Bitch", " Thunder", " Masculinity", " Patriarch", " Strike", 
        " Powder", " City", " Sayer", " Seer", " Mask", " Warrior", " Theif", 
        " Cult", " Occult", " Goblin", " Spit", "killer", " Pyre", " Thunder", 
        " Gas", " Fog", " Blaze", " Sacrafice", " Master", " Sucker", " Whip", 
        "zilla", " Sweat", " Eater", " Magnet", " Sword", " Axe", " Caravan", " Fang", 
        " Void", " Misery", " Stoner", " Junkie", " Marijuana", " Breather", "ess", " Tone", 
        " Ritual", " Weed", " Preistess");

    $name = $list1[array_rand($list1, 1)]."".$list2[array_rand($list2, 1)];
    return $name;
}

function generate_bandlogo() {
    $directory = 'logos';
    $files = scandir($directory);
    $images = array_diff($files, array('.', '..'));
    if (empty($images)) {
        return 'Aucune image trouvée dans le dossier spécifié.';
    }
    $random_image = $images[array_rand($images)];

    return $directory . DIRECTORY_SEPARATOR . $random_image;
}

if (!isset($_SESSION['bandname'])) {
    $_SESSION['bandname'] = generate_bandname();
}

if (!isset($_SESSION['bandlogo'])) {
    $_SESSION['bandlogo'] = generate_bandlogo();
}

$image_path=$_SESSION['bandlogo'];
?>

<header>
    <h1> <?php echo $_SESSION['bandname']; ?> </h1>
    <a> <img src="<?php echo $image_path; ?>" alt="" class='logo'> </a>
    <nav>
        <ul class="nav-menu">
            <li><a href="band_generators.php">Home</a></li>
            <li><a href="#band">Band</a></li>
            <li><a href="SETLIST.php">Setlist</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>