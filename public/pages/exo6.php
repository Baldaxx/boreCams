<?php
include '../common/head.php';
include '../common/nav.php';
?>
<h1>Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select> <br />
    <input type="submit" value="Valider">
</form>

<?php
if (isset($_POST['perso'])) {
    $personnage = $_POST['perso'];
    if ($personnage == "homme")
        echo '<img src="./img/player.png" alt="player homme">';
    else {
        echo '<img src="./img/playerF.png" alt="player femme">';
    }
}
?>

<?php
include '../common/footer.php';
?>
