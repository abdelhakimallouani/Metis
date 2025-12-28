<?php

require_once __DIR__ . '/../app/Models/Membre.php';
require_once __DIR__ . '/../app/Models/Projet.php';
require_once __DIR__ . '/../app/Models/ProjetCourt.php';
require_once __DIR__ . '/../app/Models/ProjetLong.php';
require_once __DIR__ . '/../app/Models/Activite.php';


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


// $projetCourt = new ProjetCourt(
//     "Mini projet PHP",
//     "2025-12-01 09:00:00",
//     "2025-12-15 17:00:00",
//     1
// );
// $idProjetCourt = $projetCourt->saveProjet();


// $projetCourt = new ProjetCourt();
// $projetCourt->deleteProjetById(1);

// $projet = new ProjetCourt();
// $infoProjet = $projet->getProjetById(4);

// if ($infoProjet) {
//     echo "ID: " . $infoProjet['id_projet'] . "\n";
//     echo "Titre: " . $infoProjet['titre'] . "\n";
//     echo "Statut: " . $infoProjet['statut'] . "\n";
//     echo "Date debut: " . $infoProjet['date_debut'] . "\n";
//     echo "Date fin: " . $infoProjet['date_fin'] . "\n";
// }


// $idProjet = 4;
// $projet = new ProjetCourt();
// $dataUpdate = [
//     'titre' => 'Titre mis à jour',
//     'date_fin' => '2025-12-20 17:00:00'
// ];

// $result = $projet->updateProjet($idProjet, $dataUpdate);


// $projetLong = new ProjetLong(
//     "Mini projet PHP",
//     "2025-12-01 09:00:00",
//     "2025-12-15 17:00:00",
//     1
// );
// $idProjetLong = $projetLong->saveProjet();

// $projetLong = new ProjetLong();
// $projetLong->deleteProjetById(2);

// $projet = new ProjetLong();
// $infoProjet = $projet->getProjetById(3);

// if ($infoProjet) {
//     echo "ID: " . $infoProjet['id_projet'] . "\n";
//     echo "Titre: " . $infoProjet['titre'] . "\n";
//     echo "Statut: " . $infoProjet['statut'] . "\n";
//     echo "Date debut: " . $infoProjet['date_debut'] . "\n";
//     echo "Date fin: " . $infoProjet['date_fin'] . "\n";
// }


// $idMembre = 2;
// $projet = new ProjetCourt();
// $projets = $projet->getProjetsByMembre($idMembre);

// if (count($projets) > 0) {
//     echo " Liste des projets du membre ID $idMembre :\n\n";
//     foreach ($projets as $p) {
//         echo "- ID: " . $p['id_projet'] 
//            . " | Titre: " . $p['titre'] 
//            . " | Statut: " . $p['statut'] 
//            . " | Date debut: " . $p['date_debut'] 
//            . " | Date fin: " . $p['date_fin'] 
//            . "\n";
//     }
// }


// $idMembre = 2;
// $projet = new ProjetCourt();
// $projets = $projet->getProjetsByMembre($idMembre);

// if (count($projets) > 0) {
//     echo "Liste des projets du membre ID $idMembre :\n\n";
//     foreach ($projets as $p) {
//         $statut = ($p['statut'] === 'court') ? " | Statut: " . $p['statut'] : "";

//         echo "- ID: " . $p['id_projet'] 
//            . " | Titre: " . $p['titre'] 
//            . $statut
//            . " | Date debut: " . $p['date_debut'] 
//            . " | Date fin: " . $p['date_fin'] 
//            . "\n";
//     }
// }

// $activite = new Activite(
//     "Analyse des besoins",
//     "2025-01-10 10:00:00",
//     "en cours",
//     3 
// );

// $id = $activite->createActivite();

// $activite = new Activite();
// $result = $activite->getActiviteById(1);
// print_r($result);

// $activite = new Activite();

// $activite->updateActivite(1, [
//     'titre' => 'Analyse fonctionnelle',
//     'statut' => 'termine'
// ]);

// $activite = new Activite();

// $activites = $activite->getActiviteByProjet(3);

// if (count($activites) > 0) {
//     echo "Activites du projet 3:\n\n";
//     foreach ($activites as $a) {
//         echo "- ID: {$a['id_activite']} | {$a['titre']} | {$a['statut']} | {$a['date_activite']}\n";
//     }
// }

// $activite = new Activite();
// $activite->deleteActivite(1);


