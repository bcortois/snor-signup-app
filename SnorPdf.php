<?php
require('fpdf.php');
require('Helpers.php');

class SnorPdf extends FPDF
{
    private $title;

    function setTitle($title) {
        $this->title = $title;
    }

    function Header()
    {
        $w = $this->GetStringWidth($this->title)+6;
        // Logo
        $this->Image('img\snor_logo.jpg',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell($w,10,$this->title,0,0,'L');
        // Line break
        $this->Ln(20);
    }
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    public function getRadioButtonResult($index) 
    {
        if (!\Snor\Tools\Helpers::getRadioButtonResult($index)) {
            return 'Niet ingevuld';
        }
        return \Snor\Tools\Helpers::getRadioButtonResult($index);
    }
}