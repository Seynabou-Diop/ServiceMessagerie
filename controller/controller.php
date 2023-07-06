<?php
$action = $_GET['action'];

if ($action == "ajouterMessage") {
    $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $message = $_POST['message'];

    include '../model/model.php';
    ajouterMessage($expediteur, $destinataire, $message);

    // Redirection vers la vue
    header("Location: ../index.php");
    exit();
} 
elseif ($action == "ajouterContact") {
    $contactNom = $_POST['contactNom'];
    $contactNumero = $_POST['contactNumero'];


    include '../model/model.php';
    ajouterContact($contactNom, $contactNumero);

    // Redirection vers la vue des contacts
    header("Location: ../views/contacts.php");
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