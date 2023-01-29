<?php
class  Club
{
    private $id;
    private $name;
    private $description;
    private $adresse;
    private $domaine;
    function __construct($id, $name, $description, $adresse, $domaine)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }
    function afficher()
    {
        echo "id : " . $this->id . "<br>";
        echo "nom : " . $this->name . "<br>";
        echo "description : " . $this->description . "<br>";
        echo "adresse : " . $this->adresse . "<br>";
        echo "domaine : " . $this->domaine . "<br>";
    }
}
