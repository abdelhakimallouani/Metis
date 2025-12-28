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

while (true) {

    echo "\n==============================\n";
    echo "         MENU PRINCIPAL        \n";
    echo "==============================\n";
    echo "1. Gestion des membres\n";
    echo "2. Gestion des projets\n";
    echo "3. Gestion des activites\n";
    echo "0. Quitter\n";

    $choix = readline("Votre choix : ");

    switch ($choix) {

        /* ================= MEMBRES ================= */
        case 1:
            echo "\n--- Gestion des membres ---\n";
            echo "1. Ajouter membre\n";
            echo "2. Liste membres\n";
            echo "3. Modifier membre\n";
            echo "4. Supprimer membre\n";
            echo "5. Afficher membre par ID\n";

            $c = readline("Choix : ");
            $membre = new Membre();

            switch ($c) {
                case 1:
                    $nom = readline("Nom : ");
                    $prenom = readline("Prenom : ");
                    $email = readline("Email : ");
                    $membre = new Membre($nom, $prenom, $email);
                    $membre->createMembre();
                    break;

                case 2:
                    $membre = new Membre();
                    $membres = $membre->getAllMembre();

                    if (count($membres) > 0) {
                        echo "\n Liste des membres :\n\n";
                        foreach ($membres as $m) {
                            echo "ID : {$m['id_membre']} | "
                                . "Nom : {$m['nom']} | "
                                . "Prenom : {$m['prenom']} | "
                                . "Email : {$m['email']} | "
                                . "Inscription : {$m['date_inscription']}\n";
                        }
                    }
                    break;

                case 3:
                    $id = readline("ID membre : ");
                    echo "1. Nom\n";
                    echo "2. Prenom\n";
                    echo "3. Email\n";

                    $choixChamp = readline("Choix : ");
                    $data = [];

                    switch ($choixChamp) {
                        case 1:
                            $data['nom'] = readline("Nouveau nom : ");
                            break;
                        case 2:
                            $data['prenom'] = readline("Nouveau prenom : ");
                            break;
                        case 3:
                            $data['email'] = readline("Nouvel email : ");
                            break;
                        default:
                            echo " Choix invalide\n";
                            break 2;
                    }

                    $membre->updateMembre($id, $data);
                    break;

                case 4:
                    $id = readline("ID membre : ");
                    $membre->deleteMembre($id);
                    break;

                case 5:
                    $id = readline("ID membre : ");
                    print_r($membre->MembreById($id));
                    break;
            }
            break;

        /* ================= PROJETS ================= */
        case 2:
            echo "\n--- Gestion des projets ---\n";
            echo "1. Ajouter projet court\n";
            echo "2. Ajouter projet long\n";
            echo "3. Lister projets par membre\n";
            echo "4. Supprimer projet\n";
            echo "5. Consulter tous les projets\n";


            $c = readline("Choix : ");

            switch ($c) {
                case 1:
                    $titre = readline("Titre : ");
                    $dd = readline("Date debut : ");
                    $df = readline("Date fin : ");
                    $idM = readline("ID membre : ");
                    $p = new ProjetCourt($titre, $dd, $df, $idM);
                    $p->saveProjet();
                    break;

                case 2:
                    $titre = readline("Titre : ");
                    $dd = readline("Date debut : ");
                    $df = readline("Date fin : ");
                    $idM = readline("ID membre : ");
                    $p = new ProjetLong($titre, $dd, $df, $idM);
                    $p->saveProjet();
                    break;

                case 3:
                    $idM = readline("ID membre : ");
                    $p = new ProjetCourt();
                    print_r($p->getProjetsByMembre($idM));
                    break;

                case 4:
                    $idP = readline("ID projet : ");
                    $act = new Activite();
                    if (count($act->getActiviteByProjet($idP)) > 0) {
                        echo " projet contient des activites !\n";
                    } else {
                        $p = new ProjetCourt();
                        $p->deleteProjetById($idP);
                    }
                    break;
                case 5:
                    $projet = new ProjetCourt(); 
                    $projets = $projet->getAllProjets();
                    if (count($projets) > 0) {
                        echo " Liste de tous les projets :\n";
                        foreach ($projets as $p) {
                            echo "- ID: {$p['id_projet']} | Titre: {$p['titre']} | Statut: {$p['statut']} | ID Membre: {$p['id_membre']} | Date debut: {$p['date_debut']} | Date fin: {$p['date_fin']}\n";
                        }
                    }
                    break;
            }
            break;

        /* ================= ACTIVITES ================= */
        case 3:
            echo "\n--- Gestion des activites ---\n";
            echo "1. Ajouter activite\n";
            echo "2. Modifier activite\n";
            echo "3. Supprimer activite\n";
            echo "4. Historique d'un projet\n";

            $c = readline("Choix : ");

            switch ($c) {
                case 1:
                    $titre = readline("Titre : ");
                    $date = readline("Date activite : ");
                    $statut = readline("Statut : ");
                    $idP = readline("ID projet : ");
                    $a = new Activite($titre, $date, $statut, $idP);
                    $a->createActivite();
                    break;

                case 2:
                    $id = readline("ID activite : ");

                    $a = new Activite();
                    $activite = $a->getActiviteById($id);

                    if (!$activite) {
                        echo " L'activite avec ID $id n'existe pas\n";
                        break;
                    }
                    echo "1. Titre\n";
                    echo "2. Date activite (YYYY-MM-DD HH:MM:SS)\n";
                    echo "3. Statut\n";
                    echo "4. ID Projet\n";

                    $choixChamp = readline("Choix : ");
                    $data = [];

                    switch ($choixChamp) {
                        case 1:
                            $data['titre'] = readline("Nouveau titre : ");
                            break;
                        case 2:
                            $data['date_activite'] = readline("Nouvelle date (YYYY-MM-DD HH:MM:SS) : ");
                            break;
                        case 3:
                            $data['statut'] = readline("Nouveau statut : ");
                            break;
                        case 4:
                            $data['id_projet'] = readline("Nouvel ID projet : ");
                            break;
                        default:
                            echo " Choix invalide\n";
                            break 2;
                    }

                    $a->updateActivite($id, $data);
                    break;

                case 3:
                    $id = readline("ID activite : ");
                    $a = new Activite();
                    $a->deleteActivite($id);
                    break;

                case 4:
                    $idP = readline("ID projet : ");
                    $a = new Activite();
                    print_r($a->getActiviteByProjet($idP));
                    break;

            }
            break;

        case 0:
            echo " Application fermee\n";
            exit;

        default:
            echo " Choix invalide\n";
    }
}
