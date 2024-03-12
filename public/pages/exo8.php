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
    </select> <button type="submit">Voir le personnage</button>
</form>

<h2>Personnage :</h2>
<div class='gauche'>

    <?php
    if (isset($_POST['perso'])) {
        $personnage = $_POST['perso'];
        switch ($personnage) {
            case "p1":
                echo '<img src="./img/player.png" alt="player Luke" /><br>
Nom : Luke<br>Age : 27<br>Sexe : Homme<br>Force : 5<br>Agilité : 4';
                break;
            case "p2":
                echo '<img src="./img/playerF.png" alt="player Katy" /><br>
Nom : Katy<br>Age : 22<br>Sexe : Femme<br>Force : 3<br>Agilité : 6';
                break;
            case "p3":
                echo '<img src="./img/playerM.png" alt="player Marc" /><br>
Nom : Marc<br>Age : 33<br>Sexe : Homme<br>Force : 7<br>Agilité : 2';
                break;
        }
        echo '</div>';
    }
    ?>

    <?php
    include '../common/footer.php';
    ?>
