<?php
require"assets\query/sql_connect.php";
// Get search term
$searchTerm=$_GET["term"];
$query = "SELECT ProductID,ProductName from Products where ProductName like '%$searchTerm%'  and estatus ='A'";
$autocomplete = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );

$stmt = sqlsrv_query( $conn, $query,$autocomplete, $options);

//if (sqlsrv_num_rows($stmt) >= 0) { //checa si hay resultados
  
//while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {  
    $row_count = sqlsrv_num_rows( $stmt );  
  
    if ($row_count >=0) { 

    while ($row = sqlsrv_fetch_array($stmt)) {       
     $data['id'] = $row['ProductID'];
    //$data['id'] = $row['ProductName'];  
    array_push($autocomplete, $data);
    }   
    }
echo json_encode($data);

?>