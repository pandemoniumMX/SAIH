<?php
include"assets\query/sql_connect.php";

$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];

  $query = "SELECT * from Products where ProductID = $id and estatus ='A'";
  $stmt = sqlsrv_query( $conn, $query);
  
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))  {

    //array_push($response,array("prod" => $row["ProductID"]));
    
      $response['data'] = array (
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],
        "prod"        =>  $row["ProductID"],
        "name"        =>  $row["ProductName"],

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