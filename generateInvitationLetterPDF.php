<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
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
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$fontname = $pdf->addTTFfont('font/arial.ttf','TrueTypeUnicode','',32);

// set document information
$pdf->SetCreator('2014 ACP Committee');
$pdf->SetAuthor('2014 ACP Committee');
$pdf->SetTitle('Invitation Letter');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData('header.jpg', PDF_HEADER_LOGO_WIDTH, ''.'', '', array(255,255,255), array(255,255,255));
$pdf->setFooterData(array(23,54,93), array(255,255,255));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array($fontname, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(1);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('times', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
		<br>
		31 March 2014<br>
		
		$Title $FirstName $FamilyName<br>
		$Company<br>
		$Address<br>
		$City $ZIP<br>
		$Country<br>
		
		Phone: $Telephone<br>
		Fax: $Fax<br>
		Email: $Email<br>
		 
		Passport No.: $Passport<br>
		Citizenship: $CountryPassport<br>
		Date of Birth (mm/dd/yyyy): date("m/d/Y",strtotime($Birthdate)) <br>
		Gender: $Gender<br>
		
		Dear $Title $FamilyName,
		  <p>&nbsp &nbsp &nbsp &nbsp Thank you for your interest in attending the <b>Asia Communications and Photonics Conference (ACP)</b>, which will be held 11-14 November 2014 in Shanghai, China at the Shanghai International Convention Center.  The meeting is open to all Optical Society of America (OSA), Society of Photographic Instrumentation Engineers (SPIE), IEEE Photonics Society, IEEE Communications Society, Chinese Optical Society (COS), China Institute of Communications (CIC) members, and those with related optics interest.</p>
		  <p>&nbsp &nbsp &nbsp &nbsp This letter serves as a formal invitation for you to participate in the meeting.  Your participation in the meeting includes presenting your paper, attending sessions in your area of interest, and an opportunity to communicate with others working in the field of optical science.</p>
		  <p>&nbsp &nbsp &nbsp &nbsp This is an invitation to participate in the meeting but not a personal sponsorship of your stay in China.  You will need to secure your own funding for travel, registration, and housing expenses for the meeting.</p>
		  <p>&nbsp &nbsp &nbsp &nbsp Additional meeting information, including visa requirements, is available on the ACP website at www.acp-conf.org.  Thank you for your interest in the meeting and we look forward to seeing you in Shanghai.</p>
		<br>
		Sincerely,<br>
		<br>
		<br>
		Zuyuan He<br>
		General Chair of ACP 2014<br>
		Professor, Shanghai Jiao Tong University<br>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Invitation Letter.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>