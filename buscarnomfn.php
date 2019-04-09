<?php
require_once"assets\query/sql_connect.php";
$searchTerm=$_GET["term"];
$query = "SELECT ProductID,ProductName from Products where ProductName like '%$searchTerm%'  and estatus ='A'";

$auto = array();
$stmt = sqlsrv_query( $conn, $query);
/*
if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}

/* Retrieve each row as an associative array and display the results.*/  
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))  
{  
    array_push($auto,array("id" => $row["ProductID"]));
    array_push($auto,array("value" => $row["ProductName"]));

}  
/*
while ($row = $query->sqlsrv_fetch()) {
    $data[] = $row['ProductName'];
}
//return json data
*/
echo json_encode($auto);
//sqlsrv_free_stmt($stmt);
?>