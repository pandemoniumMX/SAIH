<?php

// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'electronicax';

// Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get search term
$searchTerm = $_GET['term'];

// Get matched data from skills table
$query = $db->query("SELECT * FROM clientes WHERE nombre like '%".$searchTerm."%'");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        //$data['id'] = $row['id_folio'];
        $data['value'] = $row['nombre'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);



?>