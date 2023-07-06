<!DOCTYPE html>
<html>
<head>
    <title>Service de messagerie </title>
</head>
<body>
    <h1>Service de messagerie en ligne </h1>
    
    <?php
    // Chargement du fichier XML
    include 'model/model.php';
    $xml = chargerXML();
    
    if ($xml) {
        // Récupération des discussions individuelles
        echo "<h3>Discussions Individuelles</h3>";
        echo "<ul>";
        foreach ($xml->utilisateurs->utilisateur->discussions->discussion as $discussion) {
            if ($discussion['categorie'] == 'individuelle') {
                $correspondantId = (string)$discussion->correspondant['id'];
                $correspondantNom = getNomUtilisateur($correspondantId);
                echo "<li>Discussion avec ".$correspondantNom."</li>";
            }
        }
        echo "</ul>";
        
        // Récupération des discussions de groupe
        echo "<h3>Discussions de Groupe</h3>";
        echo "<ul>";
        foreach ($xml->utilisateurs->utilisateur->discussions->discussion as $discussion) {
            if ($discussion['categorie'] == 'groupe') {
                $groupeId = (string)$discussion->discuGroupe['id'];
                $groupeNom = getNomUtilisateur($groupeId);
                echo "<li>Discussion dans le groupe ".$groupeNom."</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<p>Le fichier XML n'existe pas ou ne peut pas être chargé.</p>";
    }
    ?>
    
    <br>
    
    <a href="views/contacts.php">Liste des Contacts</a><br>
    <a href="views/ajoutContact.php">Ajouter un Contact ou une Discussion</a>
</body>
</html>
