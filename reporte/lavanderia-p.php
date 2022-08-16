
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
	// Cabecera de página

	function Header()
	{

		$this->Image('fpdf/logo.png', 2, 2, 25);

		$this->SetFont('Arial', 'B', 8);
		$this->Cell(30);


		$this->Cell(150, 8, 'GERENCIA DE IMAGEM ', 1, 1, 'C');
		$this->Ln(20);
		$this->Cell(195, 10, 'CONTROL DE VESTUARIO', 1, 1, 'C');
		$this->Cell(195, 10, 'LAVANDERIA', 1, 1, 'C');
		$this->Cell(40, 10, 'Fecha', 1, 0, 'C', 0);
		$this->Cell(44, 10, 'Usuario', 1, 0, 'C', 0);
		$this->Cell(54, 10, 'Accesorio', 1, 0, 'C', 0);
		$this->Cell(57, 10, 'Cantidad', 1, 1, 'C', 0);
		
		
		
	}


	function Footer()
	{

		$this->SetY(-30);

		$this->SetFont('Arial', 'B', 8);
		$this->Ln(5);
		$this->Cell(64, 8, 'Gerente del Area', 1, 0, 'C', 0);
		$this->Cell(64, 8, 'Entrega', 1, 0, 'C', 0);
		$this->Cell(62, 8, 'Recibe', 1, 1, 'C', 0);
		$this->Cell(64, 10, '', 1, 0, 'C', 0);
		$this->Cell(64, 10, '', 1, 0, 'C', 0);
		$this->Cell(62, 10, '', 1, 0, 'C', 0);
		$this->Ln(15);
		$this->Cell(0, 0, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}
}
require('conexion.php');
$query = "SELECT * FROM lavanderia";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);


while ($mostrar = pg_fetch_array($result)) {

	$pdf->Cell(40, 10, $mostrar['fecha'], 1, 0, 'C', 0);
	$pdf->Cell(44, 10, $mostrar['usuario'], 1, 0, 'C', 0);
	$pdf->Cell(54, 10, $mostrar['accesorio'], 1, 0, 'C', 0);
	$pdf->Cell(57, 10, $mostrar['cantidad'], 1, 1, 'C', 0);
	
	$total +=  $mostrar['cantidad'];
	
	

}







$total1 = "TOTAL";


while ($mostrar = pg_fetch_assoc($resul)) {

	$total +=  $mostrar['cantidad'];
}

$pdf->Cell(195, 10, $total1, 1, 1, 'C', 0);
$pdf->Cell(195, 10, $total, 1, 1, 'C', 0);










$pdf->Output();

?>



