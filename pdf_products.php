<?php
require 'assets/fpdf/fpdf.php';
include "assets\query/sql_connect.php";


$category=$_POST['categoria'];
//$category = $_GET['categoria'];

$horastart=$_POST['datepicker1'];
$horaend=$_POST['datepicker2'];


class PDF extends FPDF
{
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Write(2,utf8_decode('Reporte de productos categoría'));

        // Salto de línea
        $this->Ln(20);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'',0,0,'C');
    }
    }
//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',8);
//Aquí escribimos lo que deseamos mostrar

$query = "SELECT * from Products where BitCat_DiaHora between '$horastart' and '$horaend' and CategoryID=$category";
$stmt = sqlsrv_query( $conn, $query); 
while( $data = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))  {

$pdf->Cell(10,5,$data['ProductID'],1,0,'C');
$pdf->Cell(95,5,$data['NombreSimple'],1,0,'L');
$pdf->Cell(20,5,$data['CPTCode'],1,0,'C');
$pdf->Ln(); 
}  
 
$pdf->Output();
 
?>