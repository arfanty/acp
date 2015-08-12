<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

    <form method="post" action="generateInvitationLetterWord.php">
    <p> Please input the name </p>
    <label> First Name :</label><input type='text' name='FirstName'/> <br/>
    <label> Family Name :</label><input type='text' name='FamilyName'/> <br/>
    <input type='text' value='' name='issubmitted' style='display:none' />
    <input type='submit' onclick='Submitted(this.form)'/>
    <script>
  	function FormValidate(form)
  	{
		  form.issubmitted.value = 'yes';
  	}
	</script>
    </form>
<?php 

	require "back-end/getword.php";
	$con = mysql_connect("localhost","acpconf1_0","GUANG2013yan&&&");
	if (!$con)
	{
	
		die('Could not connect: ' . mysql_error());
	}

	if (!mysql_select_db("acpconf1_invitationLetter",$con))
	{
	
		die('Could not connect: ' . mysql_error());
	}
	//mysql_query("drop table if exists InvitationLetter_table",$con);
	$result = mysql_query("SELECT * FROM InvitationLetter_table ",$con);
	echo "
		<form method='post' action='generateInvitationLetterWord.php'>
		<p> Please input the name </p>
		<select name='Name'>";
		while($row = mysql_fetch_array($result))
		{
			echo "<option>".$row['Name']."</option>";
		}
		echo "</select>
		<input type='text' value='' name='issubmittedFullName' style='display:none' />
		<input type='submit' onclick='Submitted(this.form)'/>";


	$issubmitted = FALSE;
	if (isset($_POST['issubmitted']))
	{    		
		$result = mysql_query("SELECT * FROM InvitationLetter_table where FirstName = '$_POST[FirstName]' and FamilyName='$_POST[FamilyName]'",$con);
		$issubmitted = TRUE;
	}
	if (isset($_POST['issubmittedFullName']))
	{    		
		$result = mysql_query("SELECT * FROM InvitationLetter_table where Name = '$_POST[Name]'",$con);
		$issubmitted = TRUE;
	}
	if($issubmitted == TRUE)
	{
		while($row = mysql_fetch_array($result))
		  {
			  
$FirstName = $row['FirstName'];
$FamilyName = $row['FamilyName'];
$Name = $FirstName." ".$FamilyName;
$Title = $row['Title'];
$Company = $row['Company'];
$Address = $row['Address'];
$AddressC = $row['AddressC'];
$City = $row['City'];
$State = $row['State'];
$ZIP = $row['ZIP'];
$Country = $row['Country'];
$Email = $row['Email'];
$Telephone = $row['Telephone'];
$Ext = $row['Ext'];
$Fax = $row['Fax'];
$Birthdate = $row['Birthdate'];
$Gender = $row['Gender'];
$IsSubmission = $row['IsSubmission'];
$PaperTitle = $row['PaperTitle'];
$PaperSession = $row['PaperSession'];
$IsExhibition = $row['IsExhibition'];
$Passport = $row['Passport'];
$CountryPassport = $row['CountryPassport'];
$StayTime = $row['StayTime'];
$Today = date("j F, Y");

require_once('tcpdf_include.php');
class myPDF extends TCPDF
{
	public function Footer() 
	{
		$this->SetY(-15);
		$this->SetColor('text',23,54,93,false,'');
		$this->Cell(180,0,'5-108 SEIEE BUILDINGS, SHANGHAI JIAO TONG UNIVERSITY,',0,1,'C',false,'',0);
		$this->Cell(180,0,'800 DONGCHUAN ROAD, MINHANG, SHANGHAI 200240, CHINA',0,1,'C',false,'',0);
		$this->Cell(180,0,'Phone: +86 2134208259 Email: info@acp-conf.org www.acp-conf.org',0,1,'C',false,'',0);
	}
}


// create new PDF document
$pdf = new myPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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



// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('times', '', 11, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
		<br>
		$Today<br>
		<br>
		$Title $FirstName $FamilyName<br>
		$Company<br>
		$Address<br>
		$City $ZIP<br>
		$Country<br>
		<br>
		Phone: $Telephone<br>
		Fax: $Fax<br>
		Email: $Email<br>
		 <br>
		Passport No.: $Passport<br>
		Citizenship: $CountryPassport<br>
		Date of Birth: $Birthdate <br>
		Gender: $Gender<br>
		<br>
		Dear $Title $FamilyName,
		  <p>&nbsp; &nbsp; &nbsp; &nbsp; Thank you for your interest in attending the <b>Asia Communications and Photonics Conference (ACP)</b>, which will be held 11-14 November 2014 in Shanghai, China at the Shanghai International Convention Center.  The meeting is open to all Optical Society of America (OSA), Society of Photographic Instrumentation Engineers (SPIE), IEEE Photonics Society, IEEE Communications Society, Chinese Optical Society (COS), China Institute of Communications (CIC) members, and those with related optics interest.</p>
		  <p>&nbsp; &nbsp; &nbsp; &nbsp; This letter serves as a formal invitation for you to participate in the meeting.  Your participation in the meeting includes presenting your paper, attending sessions in your area of interest, and an opportunity to communicate with others working in the field of optical science.</p>
		  <p>&nbsp; &nbsp; &nbsp; &nbsp; This is an invitation to participate in the meeting but not a personal sponsorship of your stay in China.  You will need to secure your own funding for travel, registration, and housing expenses for the meeting.</p>
		  <p>&nbsp; &nbsp; &nbsp; &nbsp; Additional meeting information, including visa requirements, is available on the ACP website at <a href="www.acp-conf.org">www.acp-conf.org</a>.  Thank you for your interest in the meeting and we look forward to seeing you in Shanghai.</p>
		<br>
		Sincerely,<br>
		<br>
		<img src="./images/visa/ZuyuanHe_signature.png" / >
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
$pdfName = './Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf';
$pdf->Output($pdfName, 'F');
			  

		echo "<script>
           window.location.href= '". $pdfName."'; 
    	</script>";
		}

	}

?>
    

</body>
</html>