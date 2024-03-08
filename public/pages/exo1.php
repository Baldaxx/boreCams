<?php
include '../common/head.php';
include '../common/nav.php';
?>
<?php $name=@$_POST['table']; ?>
<h1>Affichage des tables de multiplication</h1>
<form action="#" method="post">
    <label for="table">Table de multiplication : </label>
    <input type="number" name="table" id="table" value="<?php echo $name;?>">
    <input type="submit" value="Envoyer">
</form>
<h2>Saisir une valeur dans le champ ci-dessus</h2>

<?php 
if(isset($_POST['table'])){
    echo"<br>Voici la tale de multiplication par" .$name.":<br>";
    for($i=1;$i<=10;$i++){
        echo"<br>$name * $i = ".$name*$i;
    }
}
?>

<?php
include '../common/footer.php';
?>



