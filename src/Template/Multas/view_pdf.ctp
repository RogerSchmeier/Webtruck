<?php
require_once( 'fpdf/fpdf.php');
$pdf= new FPDF("P");
$pdf-> AddPage();
$pdf->SetFont('Arial','B', 12); 
$pdf->Image('img/logo sistema.png',5,5,-1250);
$pdf->cell(0,15,'WebTruck - Relatorio de Multa',"B",0,"C");
$pdf->Ln(30);





$pdf->Cell(40,10,'Local:',0,0);
$pdf->Cell(40,10,$multa->local);
$pdf->Ln(10);

$pdf->Cell(40,10,'Data:' ,0,0);
$pdf->Cell(40,10,$multa->data);
$pdf->Ln(10);

$pdf->Cell(40,10,'Valor:',0,0);
$pdf->Cell(40,10,$multa->valor);
$pdf->Ln(10);

$pdf->Cell(40,10,'Pontos:',0,0);
$pdf->Cell(40,10,$multa->pontos);
$pdf->Ln(10);

$pdf->Cell(40,10,'Motivo:',0,0);
$pdf->Cell(40,10,$multa->motivo);
$pdf->Ln(10);

$pdf->Cell(40,10,'Implemento:',0,0);
$pdf->Cell(40,10,$multa-> implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $multa->implemento->id]);
$pdf->Ln(10);

$pdf->Cell(40,10,'Veiculo:',0,0);
$pdf->Cell(40,10,$multa-> veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $multa->veiculo->id]);
$pdf->Ln(10);



$pdf->Cell(40,10,'Motorista:',0,0);
$pdf->Cell(40,10,$multa-> motorista->nome, ['controller' => 'Motoristas', 'action' => 'view', $multa->motorista->id]);
$pdf->Ln(10);



$pdf->Cell(40,10,'Cidade:',0,0);
$pdf->Cell(40,10,$multa->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $multa->cidade->id]);
$pdf->Ln(10);






$pdf->Output('veiculo.pdf','I');
?>