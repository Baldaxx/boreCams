<?php
include '../common/head.php';
include '../common/nav.php';
?>

<h1>Cercle - Périmètre et Aire</h1>
<form action="#" method="POST">
    <label for="rayon">Rayon : </label>
    <input type="number" name="rayon" id="rayon"><br />
    <label for="perimetre">Perimetre:</label>
    <input type="checkbox" name="perimetre" id="perimetre" checked><br />
    <label for="aire">Aire:</label>
    <input type="checkbox" name="aire" id="aire" checked><br />
    <input type="submit" value="Envoyer">
</form>

<?php
include '../common/footer.php';
?>
