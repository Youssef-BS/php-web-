<?php 

require_once "Etudiants.php";

if (isset($_GET["code"])) {
    $code = $_GET["code"];
    $e = new Etudiants($code, "", "", "", "");
    $success = $e->Recherche_Etudiant($code);
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
</head>
<body>

</body>
</html>