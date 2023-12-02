<?php
function returnConn() {
    $server="localhost";                
    $user="root";
    $pass="";
    $database="web";
    $conn=mysqli_connect($server,$user,$pass,$database);  // connection base donne 
    return $conn;
}
?>