<?php
include "./php/Etudiants.php";

$c = new Etudiants(null, null, null, null, null);
$tab = $c->list_Etudiants();

if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["adresse"]) && !empty($_POST["classe"])) { // knhom mch fehgrin 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $classe = $_POST["classe"];

    $etu = new Etudiants(null, $nom, $prenom, $adresse, $classe); //snaana cetudiant b parametre l hatithom 
    if ($etu->ajouterEtudiant()) {  // zednehom k ayatna l fnction ajoout 
        echo "Etudiant ajouté avec succès.";
    } else {
        echo "<script>error</script>";
    }
} else {
    echo "<script>Paramètres manquants pour l'ajout.</script>";
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="./assets/style.css"/>
</head>
<body>
    <h1>Trouver un etudiant</h1>
        <form method="GET" action="./php/rechercheEtudiant.php"> 
        <input type="text" name="code" placeholder="Enter student code">
        <button>recherche</button>
        </form>
    <h1>Ajouter Étudiant</h1>
    <form method="POST">
        nom: <input type="text" name="nom" />
        prénom: <input type="text" name="prenom" />
        adresse: <input type="text" name="adresse" />
        classe: <input type="text" name="classe" />
        <input type="submit" value="Ajouter" />
    </form>
    
    <h1>Liste des Étudiants</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prénom</th>
                <th>adresse</th>
                <th>classe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <th>Voir</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($tab)) { ?> <!-- boucle aal table teena -->
            <tr id="<?php echo $row['codeetudiant']; ?>">
                <td><?php echo $row['codeetudiant']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['adresse']; ?></td>
                <td><?php echo $row['classe']; ?></td>
                <td><button><a href="./php/modifier.php?code=<?php echo $row['codeetudiant']; ?>">Update</a></button></td>
                <td><a href="./php/supprimerEtu.php?code=<?php echo $row['codeetudiant']; ?>">Delete</a></td>
                <td><button>Voir profile</button></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
