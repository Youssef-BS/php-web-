<?php
require_once "Etudiants.php";

if (isset($_GET["code"])) {  // kn staamlt code ta etudiant hka raw chyekhdem khedma jya 
    $code = $_GET["code"];   // khdina code 
    $e = new Etudiants($code, "", "", "", ""); // aayatna l constructeur b code hka 
    $success = $e->remove_Etudiant($code);  // aayatna l fonction ala hasb code 
    if ($success) {
        header('Location: ../index.php'); // thez l page index.php 
        exit();
    } else {
        echo "etudiant supprimer";
    }
} else {
    echo "error";
}
?>
