<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
<p> Bonjour <?php echo htmlspecialchars( $_POST ['prenom']); ?></p>
<p> Votre nom de famille est <?php echo $_POST ['nom']; ?></p>
<p> Vous habitez à <?php echo $_POST ['ville']; ?></p>
<?php
if (isset($_POST['végétarien']))
{
    echo $_POST['végétarien'];
    //alternative: 
    //echo '<p>Vous êtes donc végétarien. </p>';

    //astuce: '<p>Vous n\'êtes pas végétarien. => \' permet a l'ordi de pas confondre avec fin de string. </p>'
    //astuce: /!\ Faille XLS!!! Un utilisateur pourrait rentrer du code dans le input===> Utiliser la valeur htmlspecialchars.
} ?>



 </body>
</html>