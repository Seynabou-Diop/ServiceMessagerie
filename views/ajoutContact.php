<!DOCTYPE html>
<html>
<head>
    <title>Service de messagerie - Ajouter un Contact ou une Discussion</title>
</head>
<body>
    <h1>Ajouter un Contact ou une Discussion</h1>
    
    <h2>Ajouter un Contact</h2>
    <form method="POST" action="../controller/controller.php?action=ajouterContact">
        <!-- <input type="hidden" name="action" value="ajouterContact"> -->
        <label>Nom:</label>
        <input type="text" name="contactNom"><br>
        <label>Numéro:</label>
        <input type="text" name="contactNumero"><br>
        <input type="submit" value="Ajouter Contact">
    </form>
    
    <a href="../index.php">Retour</a>
</body>
</html>
