<?php
require_once( 'fpdf/fpdf.php');
$pdf= new FPDF("P");
$pdf-> AddPage();
$pdf->SetFont('Arial','B', 12); 
$pdf->Image('img/logo sistema.png',5,5,-1250);
$pdf->cell(0,15,'WebTruck - Relatorio de Abastecimento',"B",0,"C");
$pdf->Ln(30);





$pdf->Cell(60,10,'Posto:',0,0);
$pdf->Cell(40,10,$abastecimento->Posto);
$pdf->Ln(10);

$pdf->Cell(60,10,'Cidade:',0,0);
$pdf->Cell(40,10,$abastecimento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $abastecimento->cidade->id]);
$pdf->Ln(10);

$pdf->Cell(60,10,'Veiculo:' ,0,0);
$pdf->Cell(40,10,$abastecimento->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $abastecimento->veiculo->id]);
$pdf->Ln(10);

$pdf->Cell(60,10,'Implemento:',0,0);
$pdf->Cell(40,10,$abastecimento->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $abastecimento->implemento->id]);
$pdf->Ln(10);

$pdf->Cell(60,10,'combustivel:',0,0);
$pdf->Cell(40,10,$abastecimento->combustivei->nome, ['controller' => 'Combustiveis', 'action' => 'view', $abastecimento->combustivei->id]);
$pdf->Ln(10);

$pdf->Cell(60,10,'Complemento:',0,0);
$pdf->Cell(40,10,$abastecimento->complemento->modelo, ['controller' => 'Complementos', 'action' => 'view', $abastecimento->complemento->id]);
$pdf->Ln(10);

$pdf->Cell(60,10,'Preco Combustivel:     ',0,0);
$pdf->Cell(40,10,$abastecimento-> preco_comb);
$pdf->Ln(10);


$pdf->Cell(60,10,'Preco Complemento:     ',0,0);
$pdf->Cell(40,10,$abastecimento-> preco_comp);
$pdf->Ln(10);

$pdf->Cell(60,10,'Litros Combustivel:    ',0,0);
$pdf->Cell(40,10,$abastecimento-> litros_comb);
$pdf->Ln(10);

$pdf->Cell(60,10,'Litros Complemento:    ',0,0);
$pdf->Cell(40,10,$abastecimento-> litros_comp);
$pdf->Ln(10);

$pdf->Cell(60,10,'Kilometragem Inicial:   ',0,0);
$pdf->Cell(40,10,$abastecimento-> km_inicio);
$pdf->Ln(10);

$pdf->Cell(60,10,'Kilometragem Final:     ',0,0);
$pdf->Cell(40,10,$abastecimento-> km_fim);
$pdf->Ln(10);

$pdf->Cell(60,10,'Media de consumo km/litros:   ',0,0);
$pdf->Cell(40,10,$abastecimento-> media);
$pdf->Ln(10);

$pdf->Cell(60,10,'Data Abastecimento:       ',0,0);
$pdf->Cell(40,10,$abastecimento-> data);
$pdf->Ln(10);






$pdf->Output('veiculo.pdf','I');
?>