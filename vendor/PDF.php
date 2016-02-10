<?php

App::import('Vendor','fpdf/fpdf');

class PDF extends FPDF {
    
    function Header()
{
    // Seleciona fonte Arial bold 15
    $this->SetFont('Arial','B',15);

    // Move para a direita
    $this->Cell(80);
    // Titulo dentro de uma caixa
    $this->Cell(30,10,'WebTruck - Sua Frota em Boas Mãos',1,0,'C');
    // Quebra de linha
    $this->Ln(20);
}
    
function Footer()
{
    // Vai para 1.5 cm da borda inferior
    $this->SetY(-15);
    // Seleciona Arial itálico 8
    $this->SetFont('Arial','I',8);
    // Imprime o número da página centralizado
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    
}

    
}