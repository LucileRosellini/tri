function afficheProduit($produit)
{ <?
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
     

<?php echo htmlspecialchars( $_POST ['image']); ?>
<?php echo htmlspecialchars ($_POST ['nom']); ?>
<?php echo htmlspecialchars ($_POST ['prix']); ?>
