<?php
include '../common/head.php';
include '../common/nav.php';
?>
<h1>Calculer une moyenne</h1>
<form action="#" method="GET">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb"><br />
    <input type="submit" value="Valider">
</form>

<form action="#" method="POST" name="note">
    <fieldset>
        <legend>Moyenne :</legend>
    </fieldset>
</form>

<?php
if (isset($_GET['nb'])) {
$nombre = $_GET['nb'];
    for ($i = 1; $i <= $nombre; $i++) {
            echo '<form method="POST">';
            echo '<label for="note' . $i . '">Note' . $i . ' :</label>';
            echo '<input type="number" name="notes[]" id="note' . $i . '" required><br />';
        }
         {
        echo '<input type="submit" name="submit" value="Calculer">';
        echo '</fieldset></form>';
        }
}
if (isset($_POST['submit'])) {
    if (isset($_POST['notes'])) {
        $notes = $_POST['notes'];
        $somme = array_sum($notes);
        $nombreDeNotes = count($notes);
        $moyenne = $somme / $nombreDeNotes;
        echo "La moyenne est : " . $moyenne;
}
}
?>
<?php
include '../common/footer.php';
?>
