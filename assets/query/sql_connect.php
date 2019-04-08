<?php
//$serverName = "PANDEMNONIUM-PC"; //serverName\instanceName
$serverName = "Master"; //serverName\instanceName


// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"BDVIESAIH","UID"=>"sa","PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>