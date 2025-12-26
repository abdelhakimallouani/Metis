<?php

require_once 'Projet.php';

class ProjetLong extends Projet
{
    private $budget;
    private $phase;

    public function __construct($titre, $dateDebut, $dateFin, $idMembre, $budget, $phase)
    {
        parent::__construct($titre, $dateDebut, $dateFin, $idMembre);

        $this->budget = $budget;
        $this->phase = $phase;
        $this->statut = 'long';
    }

    public function saveProjet()
    {
        $idProjet = $this->createProjet();
        $sql = "INSERT INTO projets_longs (id_projet, budget, phase) VALUES (:id, :budget, :phase)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $idProjet,
            'budget' => $this->budget,
            'phase' => $this->phase
        ]);

        return $idProjet;
    }
}
