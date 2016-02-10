<?php
require_once( 'fpdf/fpdf.php');
$pdf= new FPDF("P");
$pdf-> AddPage();
$pdf->SetFont('Arial','B', 12); 
$pdf->Image('img/logo sistema.png',5,5,-1250);
$pdf->cell(0,15,'WebTruck - Relatorio de Agendamentos',"B",0,"C");
$pdf->Ln(30);





$pdf->Cell(40,10,'Motivo:',0,0);
$pdf->Cell(40,10,$agendamento->motivo);
$pdf->Ln(10);

$pdf->Cell(40,10,'Cidade:' ,0,0);
$pdf->Cell(40,10,$agendamento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $agendamento->cidade->id]);
$pdf->Ln(10);

$pdf->Cell(40,10,'Endereco:',0,0);
$pdf->Cell(40,10,$agendamento->endereco);
$pdf->Ln(10);

$pdf->Cell(40,10,'Data:',0,0);
$pdf->Cell(40,10,$agendamento->data);
$pdf->Ln(10);

$pdf->Cell(40,10,'Veiculo:',0,0);
$pdf->Cell(40,10,$agendamento->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $agendamento->veiculo->id]);
$pdf->Ln(10);

$pdf->Cell(40,10,'Implemento:',0,0);
$pdf->Cell(40,10,$agendamento-> implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $agendamento->implemento->id]);
$pdf->Ln(10);







$pdf->Output('veiculo.pdf','I');
?>