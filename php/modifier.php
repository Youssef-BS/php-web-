<?php
// require("./cofirmerModififer.php")

require_once "Etudiants.php";

if (isset($_GET["code"])) {  // kn staamlt code ta etudiant hka raw chyekhdem khedma jya 
  
    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["adresse"]) && !empty($_POST["classe"])) {
        $nom = $_POST["nom"];   // khdina nom m form    
        $prenom = $_POST["prenom"]; // prenom m form
        $adresse = $_POST["adresse"]; // adresse m form
        $classe = $_POST["classe"]; // classe m form
    $code = $_GET["code"];   // khdina code m form 
    $e = new Etudiants($code, $nom , $prenom , $adresse, $classe); // aayatna l constructeur b code hka 
    $success = $e->update_Etudiant($code , $nom , $prenom , $adresse , $classe);  // aayatna l fonction ala hasb code 
    if ($success) {
        header('Location: ../index.php'); // thez l page index.php 
        exit();
    } else {
        echo "etudiant modifier";
    }
} else {
    echo "completer les inputs";
}
} else {
    echo "error";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css"/>
</head>
<body>
<h1>Modifier Etudiants</h1>
    <form method="POST">
        nom: <input type="text" name="nom"/>
        prénom: <input type="text" name="prenom" />
        adresse: <input type="text" name="adresse" />
        classe: <input type="text" name="classe" />
        <input type="submit" value="Ajouter" />
    </form>
</body>
</html>