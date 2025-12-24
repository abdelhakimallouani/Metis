<?php

class Membre
{
    private $idMembre;
    private $nom;
    private $prenom;
    private $email;
    private $dateIscription;

    function __construct($idMembre, $nom, $prenom, $email,$dateIscription) 
    {
        $this.$idMembre->$idMembre;
        $this.$nom->$nom;
        $this.$prenom->$prenom;
        $this.$email->$email;
        $this.$dateIscription->$dateIscription;
    }

    public function getIdMembre()
    {
        return $this->idMembre;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDateIscription()
    {
        return $this->dateIscription;
    }


}

?>