<?php

require_once __DIR__ . '/../Core/BaseModel.php';

class Membre extends BaseModel
{
    protected $table = 'membres';
    protected $primaryKey = 'id_membre';
    protected $nom;
    protected $prenom;
    protected $email;
    protected $dateIscription;

    public function __construct($nom = null, $prenom = null, $email = null)
    {
        parent::__construct();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }


    public function createMembre()
    {
        return $this->create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
        ]);
    }

    public function updateMembre($idMembre, array $data)
    {
        return $this->update($idMembre, $data);
    }

    public function deleteMembre($idMembre)
    {
        return $this->delete($idMembre);
    }

    public function MembreById($idMembre)
    {
        return $this->findById($idMembre);
    }

    public function getAllMembre()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY date_inscription ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
