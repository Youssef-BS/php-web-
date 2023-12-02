<?php
$com->close();
if ($com->connect_errno) {
    $msg = 'Echec de la déconnexion : ' . $com->connect_error;
    echo "<script>console.log(".$msg.")</script>";
    
} else {
    echo "<script>console.log('Déconnexion réussite')</script>";
}
?>