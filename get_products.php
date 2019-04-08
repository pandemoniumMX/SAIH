<?php
include"assets\query/sql_connect.php";

$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $query = "SELECT * from Products where ProductID ='1' and estatus ='A'";
  $resultado = $conn->query($query);
  while ($row = sqlsrv_fetch_array($stmt)) {

  $response['data'] = array (
    "id"        =>  $row["ProductID"],

  );
   }
   
  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}
echo json_encode($response);
 ?>