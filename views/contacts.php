<!DOCTYPE html>
<html>
<head>
    <title>Service de messagerie - Liste des Contacts</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
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

    // Affichage des contacts sous forme de tableau
    echo "<table>";
    echo "<tr><th>Nom</th><th>Numéro</th></tr>";
    foreach ($contacts as $contact) {
        $contactId = (string)$contact['id'];
        $nom = getNomUtilisateur($contactId); // Appel à la fonction pour obtenir le nom
        $numero = getNumeroUtilisateur($contactId);
        echo "<tr>
            <td>".$nom."</td>
            <td>".$numero."</td>
        </tr>";
    }
    echo "</table>";
    ?>
    
    <br>
    
    <a href="../index.php">Retour</a>
</body>
</html>
