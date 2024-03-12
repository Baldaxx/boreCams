<?php
include '../common/head.php';
include '../common/nav.php';
?>

<h1>Affichage d'une pyramide</h1>
<form action="#" method="POST">
    <label for="hauteur">Hauteur de la pyramide : </label>
    <input type="number" name="hauteur" id="hauteur">
    <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hauteur"])) {
    $hauteur = intval($_POST["hauteur"]);
    echo "<div class=\"pyramide\">";
    $txt = "";
    for ($i = 0; $i < $hauteur; $i++) {
        $txt .= "xx";
        echo $txt . "<br>";
    }
    for ($i = 0; $i < $hauteur - 1; $i++) {
        $txt = substr($txt, 0, -2);
        echo $txt . "<br>";
    }
}
?>

<?php
include '../common/footer.php';
?>
