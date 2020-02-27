



<?php



function displayArticle(articles $articles)
{
//On créera une fonction displayArticle() qui admet en paramètre un objet Article, et qui permettra l’affichage de l’article en Html.

$this->articles = $articles;

$bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
$reponse = $bdd->query('SELECT*FROM articles');
while ($donnees = $reponse->fetch())
{
    echo '<p>'. $donnees['name'].'</p>';
    echo '<p>'. $donnees['description'] . '</p>';
    echo '<p>'. $donnees['price'] . '</p>';
    echo '<p>'. $donnees['weight'] . '</p>';
    echo '<p>'. $donnees['image'] . '</p>';
    echo '<p>'. $donnees['stock'] . '</p>';
    echo '<p>'. $donnees['for_sale'] . '</p>';


//------------------------------------------------------------------------------------------------

function displayClient(client $client)
    {
//On créera une fonction displayClient() qui admet en paramètre un objet client, et qui permettra l’affichage des clients en Html.
$this->client = $client;

$bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
$reponse = $bdd->query('SELECT*FROM users');
while ($donnees = $reponse->fetch())
{
    echo '<p>'. $donnees['email'] . '</p>';
    echo '<p>'. $donnees['name'] . '</p>';
    echo '<p>'. $donnees['adress'] . '</p>';
    echo '<p>'. $donnees['postal_code'] . '</p>';
    echo '<p>'. $donnees['city'] . '</p>';
}
    }

//------------------------------------------------------------------------------------------------


function displayCat($tabArticle)
    {
    //On affichera le catalogue en utilisant une fonction displayCat() qui admet en paramètre un objet Catalogue, et qui permettra l’affichage du catalogue en Html..

    $bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
    $reponse = $bdd->query('SELECT*FROM articles');
    while ($donnees = $reponse->fetch()){
    $article=new Article($donnees ['name'],['description'],['price'],['weight'],['image'],['stock'],['for_sale']);



    $this->$tabArticle []= $article;




    }



//------------------------------------------------------------------------------------------------






function displayListClient($tabclient)
    {
        //On affichera la listeClient en utilisant une fonction displayListClient qui admet en paramètre un objet Client, et qui permettra l’affichage de la liste client en Html..
        $bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
        $reponse = $bdd->query('SELECT*FROM users');
        while ($donnees = $reponse->fetch())

        $this->tabclient[] = $tabclient;

    }

//-----------------------------------------------------------------------------------------------

/*

1
CCI Grenoble
Voyage à la CCI Grenoble.
100
1
img/cci_grenoble.jpg
10
1
1


2
Machu Picchu
Voyage à Machu Pichu.
100
1
img/machu_picchu.jpg
10
1
1


3
Muraille de Chine
Voyage à Muraille de Chine.
10
0.5
img/muraille_de_chine.jpg
1
1
1



4
Petra
Voyage à Petra.
10
0.5
img/petra.jpg
1
1
1


5
Pyramide
Voyage à Pyramide.
10
0.5
img/pyramide.jpg
1
0
1


6
Taj_mahal
Voyage à Taj Mahal.
10
0.5
img/taj_mahal.jpg
1
0
1


7
Bangkok
Voyage à Bangkok.
15
0.5
img/bangkok.jpg
0
1
2


8
Chiang Mai
Voyage à Chiang Mai.
15
0.5
img/chiang_mai.jpg
0
1
2


9
Lampang
Voyage à Lampang.
56
1.2
img/lampang.jpg
2
1
2


10
Pattaya
Voyage à Pattaya.
56
1.2
img/pattaya.jpg
2
1
2


11
Levi
Voyage à Levi.
500
1.2
img/levi.jpg
5
1
3


12
Luosto
Voyage à Luosto.
500
1.2
img/luosto.jpg
5
1
3


13
Tour Rovaniemi
Voyage à Tour Rovaniemi.
500
1.2
img/tour_rovaniemi.jpg
5
1
3





*/



?>