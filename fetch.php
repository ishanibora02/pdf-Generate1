<?php
require "fpdf.php";
$conn=new PDO('mysql:host=localhost;dbname=test1','root','');
//$conn=new mysqli('localhost','root','','test1');

class myPDF extends FPDF{
function header(){
$this->Image('logo3.png',2,2);
$this->SetFont('Arial','B',16);
$this->Cell(276,12,'Employee Invoice',0,0,'C');
$this->Ln();
}
function footer(){
$this->SetY(-15);
$this->SetFont('Arial','',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
$this->SetFont('Times','B',12);
$this->Cell(20,10,'ID',1,0,'C');
$this->Cell(30,10,'Name',1,0,'C');
$this->Cell(50,10,'Email',1,0,'C');
$this->Cell(60,10,'Address',1,0,'C');
$this->Cell(40,10,'Contact',1,0,'C');
$this->Cell(75,10,'Your Question',1,0,'C');
$this->Ln();
}

function viewTable($conn){
$this->SetFont('Times','',12);
$stmt=$conn->query('SELECT * FROM registration');
//while($data=$stmt->fetch_assoc()){
while($data=$stmt->fetch(PDO::FETCH_OBJ)){
$this->Cell(20,10,$data->id,1,0,'C');
$this->Cell(30,10,$data->name,1,0,'L');
$this->Cell(50,10,$data->email,1,0,'L');
$this->Cell(60,10,$data->address,1,0,'L');
$this->Cell(40,10,$data->contact,1,0,'L');
$this->Cell(75,10,$data->question,1,0,'L');
$this->Ln();
}
}

}

$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($conn);
$pdf->Output();
?>