<?php
include '../common/head.php';
include '../common/nav.php';
?>
<h1>Trouver le nombre choisi par l'ordinateur</h1>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Reinitialiser">
</form>
<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre"><br />
    <input type="submit" value="Valider">
</form>

<?php
session_start();
if (!isset($_SESSION['nombreADeviner']) || isset($_POST['reinit'])) {
    $_SESSION['nombreADeviner'] = rand(0, 20);
    $_SESSION['count'] = 0;
}

if (isset($_POST['chiffre'])) {
    $nombreSaisi = $_POST['chiffre'];
    $_SESSION['count']++;

    if ($nombreSaisi == $_SESSION['nombreADeviner']) {
        echo "Bravo! Vous avez trouvé en " . $_SESSION['count'] . " fois.";
        $_SESSION['count'] = 0; 
    } elseif ($nombreSaisi < $_SESSION['nombreADeviner']) {
        echo "C'est plus grand ! Essaie encore.";
    } else { 
        echo "C'est plus petit ! Essaie encore.";
    }
}
?>

<?php
include '../common/footer.php';
?>
