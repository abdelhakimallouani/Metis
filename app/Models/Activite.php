<?php

require_once __DIR__ . '/../Core/BaseModel.php';


class Activite extends BaseModel
{

    protected $table = 'activites';
    protected $primaryKey = 'id_activite';
    protected $idActivite;
    protected $dateActivite;
    protected $titre;
    protected $statut;
    protected $idProjet;

    function __construct($titre = null, $dateActivite = null, $statut = null, $idProjet = null)
    {
        parent::__construct();
        $this ->titre = $titre;
        $this ->statut = $statut;
        $this ->dateActivite = $dateActivite;
        $this ->idProjet = $idProjet;
    }

    public function createActivite()
    {
        return $this->create([
            'titre' => $this->titre,
            'date_activite' => $this->dateActivite,
            'statut' => $this->statut,
            'id_projet' => $this->idProjet
        ]);
    }

    public function updateActivite($idActivite, array $data)
    {
        return $this->update($idActivite, $data);
    }

    public function deleteActivite($idActivite)
    {
        return parent::delete($idActivite);
    }

    public function getActiviteById($idActivite){
        return $this->findById($idActivite);
    }

    public function getActiviteByProjet($idProjet){
        $sql = "SELECT * FROM {$this->table} WHERE id_projet = :idProjet";
        $stmt = $this ->conn->prepare($sql);
        $stmt -> execute(['idProjet' => $idProjet]) ;
        return $stmt->fetchAll();
    }
}
