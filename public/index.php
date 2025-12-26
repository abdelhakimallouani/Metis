<?php

require_once __DIR__ . '/../app/Models/Membre.php';
require_once __DIR__ . '/../app/Models/Projet.php';
require_once __DIR__ . '/../app/Models/ProjetCourt.php';
require_once __DIR__ . '/../app/Models/ProjetLong.php';


// $membre1 = new Membre();
// $membre1->createMembre("mohamed","ayadi","mohamed@gmail.com");

// $membre1->deleteMembre(3);

// $membre1->updateMembre(2,"abdelhakim","allouani","abdelhakimallouani@gamil.com");

// $membre1->updateMembre(1,[
//     'nom' => 'ayoub'
// ]);

// $membre = $membre1->MembreById(1);
// if ($membre) {
//     echo $membre['nom'] . "\n";
//     echo $membre['prenom'] . "\n";
//     echo $membre['email'] . "\n";
// }



// $projet = new ProjetCourt(
//     "Site Web YouCode", 
//     "2025-12-25",     
//     40,             
//     "haute",          
//     1                   
// );

// $projetId = $projet->saveProjet();


// $projetLong = new ProjetLong(
//     "Plateforme e-learning",
//     "2025-01-01",
//     "2025-06-01",
//     1,
//     50000,
//     "développement"
// );

// $id = $projetLong->saveProjet();


$projetCourt = new ProjetCourt();
$id = $projetCourt->deleteProjetCourt (1);


// $projetLong = ProjetCourt::deleteProjetCourt(1);


// $var = trim(fgetc(STDIN));

// $projetCong = new ProjetCourt();
// $projetLong->deleteProjetCourt($var);

// echo "delete id projet";

