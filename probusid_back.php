<?php
require"assets\query/sql_connect.php";
// Get search term
$term=$_GET["term"];

// Get matched data from skills table
//$query = "SELECT ProductID,ProductName from Products where ProductName like '%jeringa%'  and estatus ='A'";


$query = "SELECT ProductID,ProductName from Products where ProductName like '%".$term."%'  and estatus ='A'";
$stmt = sqlsrv_query( $conn, $query);

if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}

/* Retrieve each row as an associative array and display the results.*/  
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))  
{  
    $data[] = $row['ProductName'];
}  

/*
while ($row = $query->sqlsrv_fetch()) {
    $data[] = $row['ProductName'];
}
//return json data
*/
echo json_encode($data);

?>