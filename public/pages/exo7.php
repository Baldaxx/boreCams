<?php
include '../common/head.php';
include '../common/nav.php';
?>
<!-- <h1>Tableaux</h1>
<h2>Etape 1 </h2>
Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
<h2>Etape 2 </h2>
Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non
<h2>Etape 3 </h2>
Afficher un message pour l'indiquer à l'utilisateur

<h2> Résultat : </h2>Le tableau contient des valeurs impaires -->

<?php
$tableau = [2, 6, 12, 5, 26, 34, 40, 60];
echo "Le tableau est : ";
var_dump($tableau);
$trouveNombreImpair = false;
foreach ($tableau as $valeur) {
    if ($valeur % 2 != 0) {
        $trouveNombreImpair = true;
        break;
    }
}
if ($trouveNombreImpair) {
    echo 'Il y a des nombres impairs dans le tableau.';
} else {
    echo 'Il y a que des nombres pairs dans le tableau.';
}
?>
<?php
include '../common/footer.php';
?>
