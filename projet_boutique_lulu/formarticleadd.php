<?php
function afficheArticle1 ()
{
    $nom_produit=["Croisière sur le bayou","Decouverte de la faune et la flore de la louisiane","La route du Jazz"];
    $prix_produit=["2370€","2590€","2160€"];
    $img_produit= ['img/croisiere.jpg','img/fflore.jpg','img/jazzman.jpg'];
 
    for ($i=0; $i<3; $i++)
    { ?>
        <div class="row">
            <div class="col-lg-2">
                <img src="<?php echo $img_produit [$i]?>" class="imgcroisiere">
            </div>
            <div class="col-lg-8">
                <h1 class ="nomcroisiere"><?php echo $nom_produit [$i] ?></h1>
                <p>
                Les Bayous, vastes étendues d'eau nés des méandres sinueux des anciens bras du Mississippi forment un réseau navigable de milliers de kilomètres. La grande région marécageuse du sud de la Louisiane, notamment dans la région de l'Acadiane est un espace amphibie complexe et amphibie où domine l'eau douce, ce qui le différencie de la mangrove. Autrefois occupé par les Cadiens francophones qui vivaient essentiellement des produits de la pêche et de la chasse.
                Mystérieux, attirants et repoussants à la fois, les bayous s'étendent sur tout le sud de la Louisiane et  Formés par les anciens bras du fleuve Mississipi, les bayous sont le refuge d'un grand nombre d'animaux, moustiques, oiseaux,serpents et alligators. C'est à bord d'un bateau à hélice que vous explorerez ces bayous et observerez cette faune sur les conseils avisés d'un guide cajun de souche.
                </p>
            </div>
            <div class="col-lg-2">
                <h1 class="prixcroisiere"><?php echo $prix_produit [$i] ?></h1>
            </div>
        </div>
        <?php
    }
}


function afficheProduit($produit)
{ ?>
    <div class="row">
        <div class="col-lg-2">
            <img src="<?php echo $produit['image']?>" class="imgcroisiere">
        </div>
        <div class="col-lg-8">
            <h1 class ="nomcroisiere"><?php echo $produit['nom'] ?></h1>
            <p>
           <b> Les Bayous</b>, vastes étendues d'eau nés des méandres sinueux des anciens bras du Mississippi forment un réseau navigable de milliers de kilomètres. La grande région marécageuse du sud de la Louisiane, notamment dans la région de l'Acadiane est un espace amphibie complexe et amphibie où domine l'eau douce, ce qui le différencie de la mangrove. Autrefois occupé par les Cadiens francophones qui vivaient essentiellement des produits de la pêche et de la chasse.
            Mystérieux, attirants et repoussants à la fois, les bayous s'étendent sur tout le sud de la Louisiane et  Formés par les anciens bras du fleuve Mississipi, les bayous sont le refuge d'un grand nombre d'animaux, moustiques, oiseaux,serpents et alligators. C'est à bord d'un bateau à hélice que vous explorerez ces bayous et observerez cette faune sur les conseils avisés d'un guide cajun de souche.
            </p>
        </div>
        <div class="col-lg-2">
            <h1 class="prixcroisiere"><?php echo $produit ['prix'] ?></h1>
        </div>
    </div>
<?php } ?>


<?php function addProduit()
{ ?>
    <div class="row">
        <div class="col-lg-2">
            <img src="<?php echo htmlspecialchars ( $_POST ['image']); ?>" class="imgcroisiere">
        </div>
        <div class="col-lg-8">
            <h1 class ="nomcroisiere"><?php echo htmlspecialchars ($_POST ['nom']); ?></h1>
            <p>
           <b> Les Bayous</b>, vastes étendues d'eau nés des méandres sinueux des anciens bras du Mississippi forment un réseau navigable de milliers de kilomètres. La grande région marécageuse du sud de la Louisiane, notamment dans la région de l'Acadiane est un espace amphibie complexe et amphibie où domine l'eau douce, ce qui le différencie de la mangrove. Autrefois occupé par les Cadiens francophones qui vivaient essentiellement des produits de la pêche et de la chasse.
            Mystérieux, attirants et repoussants à la fois, les bayous s'étendent sur tout le sud de la Louisiane et  Formés par les anciens bras du fleuve Mississipi, les bayous sont le refuge d'un grand nombre d'animaux, moustiques, oiseaux,serpents et alligators. C'est à bord d'un bateau à hélice que vous explorerez ces bayous et observerez cette faune sur les conseils avisés d'un guide cajun de souche.
            </p>
        </div>
        <div class="col-lg-2">
            <h1 class="prixcroisiere"><?php echo htmlspecialchars ($_POST ['prix']); ?></h1>
        </div>
    </div>
<?php } ?>




<form action="articleadd.php" method="POST" enctype="multipart/form-data">
<P><label> Image <input type="file" name='image' alt="Login"/></label></p>
<p><label> Nom <input type="text" name="nom"/></label></p>
<p><label> Prix <input type="text" name="prix"/></label></p>

<p><input type="submit"  value="Envoyer le fichier"/></p>     


</form>>






     