<?php
require_once "Etudiants.php";

if(isset($_GET["code"])) {
    $code = $_GET["code"];
    $e = new Etudiants(null, null, null, null, null);
    $student = $e->Recherche_Etudiant($code);
    
    if ($student) {
        echo "Student found! Details:<br>";
        echo "ID: " . $student['codeetudiant'] . "<br>";
        echo "Name: " . $student['nom'] . "<br>";
        echo "Surname: " . $student['prenom'] . "<br>";
        echo "Address: " . $student['adresse'] . "<br>";
        echo "Class: " . $student['classe'] . "<br>";
    } else {
        echo "Student not found!";
    }
} else {
    echo "No code provided!";
}
?>
