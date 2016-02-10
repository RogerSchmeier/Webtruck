<?php
require_once( 'fpdf/fpdf.php');
$pdf= new FPDF("P");
$pdf-> AddPage();
$pdf->SetFont('Arial','B', 12); 
$pdf->Image('img/logo sistema.png',5,5,-1250);
$pdf->cell(0,15,'WebTruck - Relatorio do Veiculo',"B",0,"C");
$pdf->Ln(30);





$pdf->Cell(40,10,'Modelo:',0,0);
$pdf->Cell(40,10,$veiculo->modelo);
$pdf->Ln(10);

$pdf->Cell(40,10,'Marca:' ,0,0);
$pdf->Cell(40,10,$veiculo->marca);
$pdf->Ln(10);

$pdf->Cell(40,10,'Motor:',0,0);
$pdf->Cell(40,10,$veiculo->motor);
$pdf->Ln(10);

$pdf->Cell(40,10,'Chassis:',0,0);
$pdf->Cell(40,10,$veiculo->chassis);
$pdf->Ln(10);

$pdf->Cell(40,10,'Placa:',0,0);
$pdf->Cell(40,10,$veiculo->placa);
$pdf->Ln(10);

$pdf->Cell(40,10,'Renavam:',0,0);
$pdf->Cell(40,10,$veiculo->renavam);
$pdf->Ln(10);

$pdf->Cell(40,10,'Antt:',0,0);
$pdf->Cell(40,10,$veiculo->antt);
$pdf->Ln(10);

$pdf->Cell(40,10,'Observacoes:',0,0);
$pdf->Cell(40,10,$veiculo->obs);
$pdf->Ln(10);

$pdf->Cell(40,10,'Motorista:',0,0);
$pdf->Cell(40,10,$veiculo-> motorista->nome, ['controller' => 'Motoristas', 'action' => 'view', $veiculo->motorista->id]);
$pdf->Ln(10);

$pdf->Cell(40,10,'Eixos:',0,0);
$pdf->Cell(40,10,$veiculo->eixos);
$pdf->Ln(10);

$pdf->Cell(40,10,'Cidade:',0,0);
$pdf->Cell(40,10,$veiculo->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $veiculo->cidade->id]);
$pdf->Ln(10);

$pdf->Cell(40,10,'Kilometragem:',0,0);
$pdf->Cell(40,10,$veiculo->kilometragem);
$pdf->Ln(10);

$pdf->Cell(40,10,'Cor:',0,0);
$pdf->Cell(40,10,$veiculo->cor);
$pdf->Ln(10);




$pdf->Output('veiculo.pdf','I');
?>