<!DOCTYPE html>
<html>
<head>
    <title>Service de messagerie - Ajouter un Contact ou une Discussion</title>
</head>
<body>
    <h1>Ajouter un Contact ou une Discussion</h1>
    
    <h2>Ajouter un Contact</h2>
    <form method="POST" action="controller.php">
        <input type="hidden" name="action" value="ajouterContact">
        <label for="contactId">ID du Contact:</label>
        <input type="text" name="contactId"><br>
        <input type="submit" value="Ajouter Contact">
    </form>
    
    <h2>Ajouter une Discussion</h2>
    <form method="POST" action="controller.php">
        <input type="hidden" name="action" value="ajouterDiscussion">
        <label for="discussionId">ID de la Discussion:</label>
        <input type="text" name="discussionId"><br>
        <label for="categorie">Catégorie:</label>
        <select name="categorie">
            <option value="individuelle">Individuelle</option>
            <option value="groupe">Groupe</option>
        </select><br>
        <input type="submit" value="Ajouter Discussion">
    </form>
    
    <br>
    
    <a href="../index.php">Retour</a>
</body>
</html>
