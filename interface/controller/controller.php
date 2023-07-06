<?php
$action = $_POST['action'];

if ($action == "ajouterMessage") {
    $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $message = $_POST['message'];

    include '../model/model.php';
    ajouterMessage($expediteur, $destinataire, $message);

    // Redirection vers la vue
    header("Location: ../index.php");
    exit();
} elseif ($action == "ajouterContact") {
    $contactId = $_POST['contactId'];

    include 'model.php';
    ajouterContact($contactId);

    // Redirection vers la vue des contacts
    header("Location: contacts.php");
    exit();
} elseif ($action == "ajouterDiscussion") {
    $discussionId = $_POST['discussionId'];
    $categorie = $_POST['categorie'];

    include 'model.php';
    ajouterDiscussion($discussionId, $categorie);

    // Redirection vers la vue
    header("Location: index.php");
    exit();
} else {
    // Action invalide, rediriger vers la vue par défaut
    header("Location: index.php");
    exit();
}
?>
