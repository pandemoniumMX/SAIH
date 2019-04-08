<?php
require"assets\query/sql_connect.php";
// Get search term
$searchTerm=$_GET["term"];
//$searchTerm = "%" . strtolower($_GET["term"]) . "%";

// Get matched data from skills table
//$query = "SELECT ProductID,ProductName from Products where ProductName like '%jeringa%'  and estatus ='A'";


$query = "SELECT ProductID,ProductName from Products where ProductName like '%$searchTerm%'  and estatus ='A'";
$stmt = sqlsrv_query( $conn, $query);
/*
if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}
*/
$autocomplete = array();

//if (sqlsrv_num_rows($stmt) >= 0) { //checa si hay resultados
  
//while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {  
    while ($row = sqlsrv_fetch_array($stmt)) {
        
        
 
     $data['id'] = $row['ProductID'];
    $data['value'] = $row['ProductName'];
    array_push($autocomplete, $data);

    }  
  

echo json_encode($data);

 

?>