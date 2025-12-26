<?php

require_once __DIR__ . '/../Core/BaseModel.php';

class Membre extends BaseModel
{
    protected $table = 'membres';
    protected $primaryKey = 'id_membre';


    public function createMembre($nom, $prenom, $email)
    {
        return $this->create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
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
}

// class Membre
// {
//     private $idMembre;
//     private $nom;
//     private $prenom;
//     private $email;
//     private $dateIscription;

//     function __construct($idMembre, $nom, $prenom, $email,$dateIscription) 
//     {
//         $this.$idMembre->$idMembre;
//         $this.$nom->$nom;
//         $this.$prenom->$prenom;
//         $this.$email->$email;
//         $this.$dateIscription->$dateIscription;
//     }

//     public function getIdMembre()
//     {
//         return $this->idMembre;
//     }

//     public function getNom()
//     {
//         return $this->nom;
//     }

//     public function setNom($nom)
//     {
//         $this->nom = $nom;
//     }

//     public function getPrenom()
//     {
//         return $this->prenom;
//     }

//     public function setPrenom($prenom)
//     {
//         $this->prenom = $prenom;
//     }

//     public function getEmail()
//     {
//         return $this->email;
//     }

//     public function setEmail($email)
//     {
//         $this->email = $email;
//     }

//     public function getDateIscription()
//     {
//         return $this->dateIscription;
//     }


// }
