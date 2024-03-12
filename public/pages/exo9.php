<?php
include '../common/head.php';
include '../common/nav.php';
?>
<h1>Sélection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso">
        <option value="p1">Luke</option>
        <option value="p2">Katy</option>
        <option value="p3">Marc</option>
    </select>
    <button type="submit">Voir le personnage</button>
</form>

<h2>Personnage :</h2>
<div class='gauche'>
    
    <?php
    $personnages = [
        "p1" => [
            "image" => "./img/player.png",
            "nom" => "Luke",
            "age" => 27,
            "sexe" => "Homme",
            "force" => 5,
            "agilite" => 4,
        ],
        "p2" => [
            "image" => "./img/playerF.png",
            "nom" => "Katy",
            "age" => 22,
            "sexe" => "Femme",
            "force" => 3,
            "agilite" => 6,
        ],
        "p3" => [
            "image" => "./img/playerM.png",
            "nom" => "Marc",
            "age" => 33,
            "sexe" => "Homme",
            "force" => 7,
            "agilite" => 2,
        ],
    ];

    if (isset($_POST['perso'])) {
        $personnage = $_POST['perso'];
        if (array_key_exists($personnage, $personnages)) {
            $p = $personnages[$personnage];
            echo "<img src='{$p["image"]}' alt='player {$p["nom"]}' /><br>
Nom : {$p["nom"]}<br>Age : {$p["age"]}<br>Sexe : {$p["sexe"]}<br>Force : {$p["force"]}<br>Agilité : {$p["agilite"]}";
        }
    }
    ?>
</div>
<?php
include '../common/footer.php';
?>
