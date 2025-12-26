<?php

require_once 'Projet.php';

class ProjetCourt extends Projet
{
    private $dureeJours;
    private $priorite;

    function __construct($titre = null , $dateDebut = null ,$dateFin = null, $dureeJours = null, $priorite = null, $idMembre = null)
    {

        parent::__construct($titre, $dateDebut, $dateFin, $idMembre);

        $this->dureeJours = $dureeJours;
        $this->priorite = $priorite;

        if ($dureeJours <= 30) {
            $this->statut = 'court';
        } else {
            $this->statut = 'long';
        }
    }

    public function saveProjet()
    {
        return $this->createProjet();
    }

    public function deleteProjetCourt($idProjet)
    {
        return $this->deleteProjetById($idProjet);
    }






    public function getDureeJours()
    {
        return $this->dureeJours;
    }
    public function setDureeJours($dureeJours)
    {
        $this->dureeJours = $dureeJours;
    }

    public function getPriorite()
    {
        return $this->priorite;
    }
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    }
}
