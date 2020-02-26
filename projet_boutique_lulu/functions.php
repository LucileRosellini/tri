<?php

function afficheArticle1 ()
{
    $nom_produit= 'Croisière sur le bayou';
    echo $nom_produit;
    $prix_produit= 2370;
    echo $prix_produit;
    $img_produit = 'img/croisiere.jpg';
    echo ('<img src=' . $img_produit. ' class="imgcroisiere">');
}

function afficheArticle2 ()
{
    $nom_produit= 'Decouverte de la faune et la flore de la louisiane';
    echo $nom_produit;
    $prix_produit= 2590;
    echo $prix_produit;
    $img_produit= 'img/fflore.jpg';
    echo ('<img src=' . $img_produit. ' class="imgfflore">');
}

function afficheArticle3 ()
{
    $nom_produit= 'La route du Jazz';
    echo $nom_produit;
    $prix_produit= 2160;
    echo $prix_produit;
    $img_produit= 'img/jazzman.jpg'; 
    echo ('<img src=' . $img_produit. ' class="imgjazzman">');
}

?>