<?php
include 'elementPage/head.php';
include 'elementPage/nav.php';
include 'elementPage/footer.php';
?>

<?php
// Mise en place d'un cryptage en Mp
$password = 'azerty';
$hash = password_hash($password, PASSWORD_BCRYPT);
echo "<p>le mot de passe htpasswd:" . $hash . "</p>";
var_dump($hash);
?>

<h1>Le mot de passe est <?= $hash ?></h1>
