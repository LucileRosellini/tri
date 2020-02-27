<?php

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
};
?>