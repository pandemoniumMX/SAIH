<?php
require"assets\query/sql_connect.php";
// Get search term

// Get matched data from skills table
$sql="SELECT ProductID,ProductName from Products where estatus ='A'";

$res=sqlsrv_query($conn,$sql);

$skillData = array();

//while ($fila = sqlsrv_fetch_array($res)) {
    while($row = $sql->fetch_assoc()){
    $data['id'] = $fila['ProductID'];
    $data['value'] = $fila['ProductName'];
    array_push($skillData, $data);
}
}

// Return results as json encoded array
echo json_encode($skillData);

?>