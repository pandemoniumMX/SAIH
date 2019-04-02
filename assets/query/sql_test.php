<?php
require"sql_connect.php";


$sql="SELECT COUNT(dom_municipio) AS Totalmunicipios FROM abonos;";
$res=sqlsrv_query($conn,$sql);

while ($fila = sqlsrv_fetch_array($res)) {
    echo $fila['Totalmunicipios'];

	}


?>