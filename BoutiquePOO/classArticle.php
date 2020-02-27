<?php

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

};
?>
