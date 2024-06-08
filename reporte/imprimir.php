<?php
//============================================================+
// File name   : example_021.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 021 for TCPDF class
//               WriteHTML text flow
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML text flow.
 * @author Nicola Asuni
 * @since 2008-03-04
 * @group html
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
require_once('../app/TCPDF-main/examples/tcpdf_include.php');


include('../config.php');
include('../layout/sesion.php');
$dia_reporte=$_POST["dia_reporte"];
$personas_atendidas=$_POST["personas_atendidas"];
$servicios_realizados=$_POST["servicios_realizados"];
$uñas_realizadas=$_POST["uñas_realizadas"];
$cejas_realizadas=$_POST["cejas_realizadas"];
$pestañas_realizadas=$_POST["pestañas_realizadas"];
$depilaciones_realizadas=$_POST["depilaciones_realizadas"];
$epilaciones_realizadas=$_POST["epilaciones_realizadas"];
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Tu eres preciosa');
$pdf->setTitle('Reporte del dia');
$pdf->setSubject('Reporte del dia');
$pdf->setKeywords('Reporte del dia');

// set default header data
$pdf->setHeaderData(false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->setFont('helvetica', '', 9);

// add a page
$pdf->AddPage();

// create some HTML content
$html = '<table>


<tr>
<td><h2>Tu eres preciosa </h2></td>

</tr>
<tr>
<td><h2>Reporte del dia por '.$nombres_sesion.'</h2></td>
</tr>
<tr>
<td><h2> Realizado el '.$dia_reporte.' </h2></td>
</tr>
<tr>
<td><h2> Se atendieron a  '.$personas_atendidas.' personas </h2></td>
</tr>
<hr>
<div></div>
<tr>
<td><h2> Se realizaron '.$servicios_realizados.' servicios </h2></td>
</tr>
<tr>
<td><h2> De los cuales estos se distribuyen de la siguiente manera: </h2></td>
</tr>
<div></div>
<tr>
<td><h2> Se realizaron '.$pestañas_realizadas.' pestañas</h2></td>
</tr>
<div></div>
<tr>
<td><h2> Se realizaron '.$uñas_realizadas.' uñas</h2></td>
</tr>
<div></div>
<tr>
<td><h2> Se realizaron '.$cejas_realizadas.' cejas</h2></td>
</tr>
<div></div>
<tr>
<td><h2> Se realizaron '.$depilaciones_realizadas.' depilaciones</h2></td>
</tr>
<div></div>
<tr>
<td><h2> Se realizaron '.$epilaciones_realizadas.' epilaciones</h2></td>
</tr>
</table>'
;

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Reporte', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>