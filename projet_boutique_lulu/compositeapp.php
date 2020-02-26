 
 <?php  include('composite.php');

$produits = [
    ['image' => 'img/croisiere.jpg', 'nom' => "Croisièreeeeeee sur le bayou", 'prix' => "2370€"],
    ['image' => 'img/fflore.jpg', 'nom' => "Decouverte de la faune et la flore de la louisiane", 'prix' => "2590€"],
    ['image' => 'img/jazzman.jpg', 'nom' => "La route du Jazz", 'prix' => "2160€"]
]

 ?>
 
 <html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Croisière en Louisiane</title>
</head>
<body>
    
    <header class="hero">
        <h1>Partez avec-nous pour une destination de rêve!</h1>
        <h2>Aventurier? Partez en croisière, découvrez les mystères des bayous... et frémissez! </h2>
    </header>
    
    <?php
    for ($i=0; $i<3; $i++) {
        afficheProduit($produits[$i]);
     } ?>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <h1>Découvrez aussi...</h1>
                <p>
                    Voyagez en thailande <br />
                    Partez à la decouverte des merveilles du monde <br />
                    Decouvrez la Laponie<br />
                </p> 
            </div>
        </div>
    </footer>
</body>
</html> 