<?php
require_once __DIR__ . '/../Core/BaseModel.php';

abstract class Projet extends BaseModel
{
    protected $table = 'projets';
    protected $primaryKey = 'id_projet';

    protected $titre;
    protected $dateDebut;
    protected $dateFin;
    protected $idMembre;
    protected $statut;

    public function __construct($titre, $dateDebut, $dateFin, $idMembre)
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

    abstract public function saveProjet();


    public function updateProjet($idProjet, array $data)
    {
        return $this->update($idProjet, $data);
    }

    public function deleteProjetById($idProjet)
    {
        return $this->delete($idProjet);
    }


    public function ProjetById($idProjet)
    {
        return $this->findById($idProjet);
    }

    // recuperer tous les projets d un membre
    public function getProjetsByMembre($idMembre)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id_membre = :idMembre";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id_membre' => $idMembre]);
        return $stmt->fetchAll();
    }



    // function __construct($idProject, $titre, $dateDebut, $dateFin, $idMembre)
    // {
    //     $this . $idProject->$idProject;
    //     $this . $titre->$titre;
    //     $this . $dateDebut->$dateDebut;
    //     $this . $dateFin->$dateFin;
    //     $this . $idMembre->$idMembre;
    // }

    // public function getTitre()
    // {
    //     return $this->titre;
    // }

    // public function setTitre($titre)
    // {
    //     $this->titre = $titre;
    // }

    // public function getDateDebut()
    // {
    //     return $this->dateDebut;
    // }

    // public function setDateDebut($dateDebut)
    // {
    //     $this->dateDebut = $dateDebut;
    // }

    // public function getDateFin()
    // {
    //     return $this->dateFin;
    // }

    // public function setDateFin($dateFin)
    // {
    //     $this->dateFin = $dateFin;
    // }

    // public function getIdMembre()
    // {
    //     return $this->idMembre;
    // }
}
