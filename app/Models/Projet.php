<?php

abstract class Projet
{
    protected $idProject;
    protected $titre;
    protected $dateDebut;
    protected $dateFin;
    protected $idMembre;

    function __construct($idProject, $titre, $dateDebut, $dateFin,$idMembre) 
    {
        $this.$idProject->$idProject;
        $this.$titre->$titre;
        $this.$dateDebut->$dateDebut;
        $this.$dateFin->$dateFin;
        $this.$idMembre->$idMembre;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    
    public function getIdMembre()
    {
        return $this->idMembre;
    }


}

?>
