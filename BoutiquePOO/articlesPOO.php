



<?php

//--------------------------------------------------------------------------------------------

class Article
{

    //Créer une classe Article ayant comme attributs : Nom description Prix Image Poids Stock Disponible (O/N)
protected $name;
protected $description;
protected $price;
protected $weight;
protected $image;
protected $stock;
protected $for_sale;

    public function __construct($name,$description,$price,$weight,$image,$stock,$for_sale)
    {
    // Initier ici les valeurs des attributs:

    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->weight = $weight;
    $this->image = $image;
    $this->stock = $stock;
    $this->for_sale = $for_sale;

    }

}

function displayArticle(articles $articles)
{
//On créera une fonction displayArticle() qui admet en paramètre un objet Article, et qui permettra l’affichage de l’article en Html.

$this->articles = $articles;

$bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
$reponse = $bdd->query('SELECT*FROM articles');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['name'].'</p>';
}

}

//------------------------------------------------------------------------------------------------

class Catalogue 
{
    // Création de la classe Catalogue, contenant une tableau d’objets Article. 

    public $tabArticle=[];

    public function __construct()
    {
        //Le constructeur de cette classe permettra le remplissage du catalogue à partir de la base de données.
        // fetch les donnes d'article dans la bdd 
        mysql_fetch_row ( resource $result ) : array
        // boucle
        //{
       tabArticle[] = new Article();
        //}
        // ajout getcat
    }
    
}

function displayCat()
    {
        //On affichera le catalogue en utilisant une fonction displayCat() qui admet en paramètre un objet Catalogue, et qui permettra l’affichage du catalogue en Html..
        return $this->tabArticle;
    }



//------------------------------------------------------------------------------------------------

class Client
{
   //Créer une classe client ayant comme attributs : name,email,adress,postal_code,city.
protected $name;
protected $email;
protected $adress;
protected $postal_code;
protected $city;


    public function __construct($name,$email,$adress,$postal_code,$city)
    {
    // Initier ici les valeurs des attributs:

    $this->name = $name;
    $this->email = $email;
    $this->adress = $adress;
    $this->postal_code = $postal_code;
    $this->image = $city;
 

    }
}

function displayClient(client $client)
    {
//On créera une fonction displayClient() qui admet en paramètre un objet client, et qui permettra l’affichage des clients en Html.
$this->client = $client;

$bdd = new PDO('mysql:host=localhost;dbname=bd_boutique','root','');
$reponse = $bdd->query('SELECT*FROM users');
while ($donnees = $reponse->fetch())
{
    echo '<p>'. $donnees['email'] . ' - '. $donnees['name'] . '</p>';
}
    }


    //---------------------------------------------------------------------------------------------------

class ListeClients


{
    // Création de la classe ListeClients, contenant une tableau d’objets Client. 

    public $tabclient;

    public function __construct()
    {
        //Le constructeur de cette classe permettra le remplissage des listes à partir de la base de données.

    }
}

function displayListClient($tabclient)
    {
        //On affichera la listeClient en utilisant une fonction displayListClient qui admet en paramètre un objet Client, et qui permettra l’affichage de la liste client en Html..
  
        $this->tabclient[] = $tabclient;

    }



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