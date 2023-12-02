<?php 
require "connexion.php";  // appel ficher connexion 
$conn = returnConn();   // function connection base donne d'apres ficher connexion.php

class Etudiants {

private $codeetudiant;
private $nom;
private $prenom ; 
private $adresse ; 
private $classe ;


public function __construct($codeetudiant , $nom , $prenom , $adresse , $classe){  //constructeur parametrer 
$this->codeetudiant = $codeetudiant;
$this->nom = $nom;
$this->prenom = $prenom;
$this->adresse = $adresse;
$this->classe = $classe;
}


public function setCodeetudiant($codeetudiant){      // setter 
    $this->codeetudiant = $codeetudiant;
}
public function setNom($nom){
    $this->nom = $nom;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;
}
public function setAdresse($adresse){
    $this->codeetudiant = $adresse;
}
public function SetClasse($classe){
    $this->classe = $classe;
}



function getCodeEtudiant(){  //getter 
return $this->codeetudiant;
}

function getNom(){
    return $this->nom;
}

function getPrenom(){
return $this->prenom;
}

function getAdresse(){
    return $this->adresse;
}

function getClasse(){
return $this->classe;
}



    public function list_Etudiants()
    {
        $sql = "SELECT * FROM etudiant";   //select 
        $conn = returnConn();    // connect data base 
        try {
            $liste = $conn->query($sql);   //execute query 
            return $liste;   // return liste 
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterEtudiant()
    {
        $conn = returnConn(); // connect data base 
        $req = $conn->query("INSERT INTO etudiant(nom,prenom,adresse,classe) values('" . $this->nom . "','" . $this->prenom . "','" . $this->adresse . "','" . $this->classe ."')");
        // requete to insert nouveau etudiant
        
        if ($req) {
            return true;
        } else {
            return false;
        }
    }

    
    public function remove_Etudiant($code) {
        $conn = returnConn();
        $flag = $conn->query("DELETE FROM etudiant WHERE codeetudiant = $code");  // supprimer etudiants d'apres le code 
        return $flag ? true : false;  // $flag ? true : false fi3udhha tajam tkteb if($flag) return true; else return false;
    }


function update_Etudiant(){
    $conn = returnConn(); // connection base donne 
    $flag = $conn->query("UPDATE etudiant where codeetudiant".$this->codeetudiant); // execute query b requete 
    if($flag)
    return true ;
else return false ;
}

function Recherche_Etudiant($code){   //recherche d'apres le code 
    $conn = returnConn();
    $flag = $conn->query("SELECT * FROM etudiant WHERE codeetudiant = $code");
    if($flag)
    return true ;
else return false ;
}
    



}


?>
