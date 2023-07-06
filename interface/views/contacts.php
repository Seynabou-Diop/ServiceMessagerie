<!DOCTYPE html>
<html>
<head>
    <title>Service de messagerie - Liste des Contacts</title>
</head>
<body>
    <h1>Liste des Contacts</h1>
    
    <?php
    // Chargement du fichier XML
    include '../model/model.php';
    $xml = chargerXML();

    // Vérification que le fichier XML est correctement chargé
    if (!$xml) {
        echo "Erreur lors du chargement du fichier XML.";
        exit();
    }

    // Récupération des contacts
    $contacts = $xml->utilisateurs->utilisateur->contacts->contact;

    // Affichage des contacts avec les noms
    echo "<ul>";
    foreach ($contacts as $contact) {
        $contactId = (string)$contact['id'];
        $nom = getNomUtilisateur($contactId); // Appel à la fonction pour obtenir le nom
        echo "<li>".$nom."</li>";
    }
    echo "</ul>";
    ?>
    
    <br>
    
    <a href="../index.php">Retour</a>
</body>
</html>
