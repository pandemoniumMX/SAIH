<?php
require"sql_connect.php";


$sql="SELECT ProductID,ProductName from Products where ProductName like '%jeringa%'  and estatus ='A'";
$res=sqlsrv_query($conn,$sql);

while ($fila = sqlsrv_fetch_array($res)) {
    echo $fila['ProductName'];

	}


?>