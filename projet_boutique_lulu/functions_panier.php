<?php 
function creationPanier() {

if (!isset($_session['panier'])){

    $_session['panier']=array();
    $_session['libelleproduit']=array();
    $_session['quantitéproduit']=array();
    $_session['prixproduit']=array();
    $_session['imageproduit']=array();
    $_session['verrou']=false;
}
return true;
}

function ajouterArticle($libelleproduit,$quantitéproduit,$prixproduit,$imageproduit){
    if(creationPanier()&& !isVerouille()){
        $position_produit = array_search($libelleproduit,$_session['panier']['libelleproduit']);
        if ($position_produit !== false){
            $_session['panier']['libelleproduit'][$position_produit] += $quantitéproduit;

        }else{

            array_push($_session['panier']['libelleproduit'],$libelleproduit);
            array_push($_session['panier']['quantitéproduit'],$quantitéproduit);
            array_push($_session['panier']['prixproduit'],$libelleproduit);
        }


    }
}


?>