<?php
require_once 'Projet.php';

class ProjetLong extends Projet
{
    public function __construct($titre = null, $dateDebut = null, $dateFin = null, $idMembre = null)
    {
        parent::__construct($titre, $dateDebut, $dateFin, $idMembre);
        $this->setStatut('long');
    }

    public function saveProjet()
    {
        return $this->createProjet();
    }
}
