<?php
require_once __DIR__ . '/../Core/BaseModel.php';

abstract class Projet extends BaseModel
{
    protected $table = 'projets';
    protected $primaryKey = 'id_projet';
    protected $idProjet;
    protected $titre;
    protected $dateDebut;
    protected $dateFin;
    protected $idMembre;
    protected $statut;

    public function __construct($titre = null, $dateDebut = null, $dateFin = null, $idMembre = null)
    {
        parent::__construct();
        $this->titre = $titre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->idMembre = $idMembre;
    }

    public function createProjet()
    {
        return $this->create([
            'titre' => $this->titre,
            'date_debut' => $this->dateDebut,
            'date_fin' => $this->dateFin,
            'id_membre' => $this->idMembre,
            'statut' => $this->statut
        ]);
    }

    public function updateProjet($idProjet, array $data)
    {
        return $this->update($idProjet, $data);
    }

    public function deleteProjetById($idProjet)
    {
        return $this->delete($idProjet);
    }

    public function getProjetById($idProjet)
    {
        return $this->findById($idProjet);
    }

    public function getAllProjets()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY date_debut DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProjetsByMembre($idMembre)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id_membre = :idMembre";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['idMembre' => $idMembre]);
        return $stmt->fetchAll();
    }

    abstract public function saveProjet();

    public function getIdProjet()
    {
        return $this->idProjet;
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
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;
    }
    public function getStatut()
    {
        return $this->statut;
    }
    protected function setStatut($statut)
    {
        $this->statut = $statut;
    }
}
