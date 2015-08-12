<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php


$FirstName = $_POST['FirstName'];
$FamilyName = $_POST['FamilyName'];
$Name = $_POST['Name'];
$Title = $_POST['Title'];
$Company = $_POST['Company'];
$Address = $_POST['Address'];
$AddressC = $_POST['AddressC'];
$City = $_POST['City'];
$State = $_POST['State'];
$ZIP = $_POST['ZIP'];
$Country = $_POST['Country'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];
$Ext = $_POST['Ext'];
$Fax = $_POST['Fax'];
$Birthdate = $_POST['Birthdate'];
$Gender = $_POST['Gender'];
$IsSubmission = $_POST['IsSubmission'];
$PaperTitle = 	'Modeling of Information Asynchronization Caused by Packet Loss and Its Effect on Distributed Optical';
$PaperSession = 2060567;
$IsExhibition = $_POST['IsExhibition'];
$Passport = $_POST['Passport'];
$CountryPassport = $_POST['CountryPassport'];
$StayTime = $_POST['StayTime'];
$Today = $_POST['Today'];
$TitleAndCode = ' '.$PaperTitle.'(Control number:'.$PaperSession.')';
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
$pdf->SetAlpha(1,'Normal',0,false);
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
$pdf->Image('./images/visa/SKL & ZHE.png',18,217,60,45,'PNG','','',true,300);

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html1 = <<<EOD
		<div style='background-color:white'>
		$Today<br>
		<br>
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
		Date of Birth: $Birthdate <br>
		Gender: $Gender<br>
		<br>
		Dear $Title $FamilyName,<br><br>
		&nbsp; &nbsp; &nbsp; &nbsp; On behalf of the Program Committee of the <b>Asia Communications and Photonics Conference (ACP)</b>, I am sending you this letter to welcome your participation in the ACP 2014 conference, which is to be held 11-14 November 2014 in Shanghai, China at the Shanghai International Convention Center. The meeting is open to all Optical Society of America (OSA), Society of Photographic Instrumentation Engineers (SPIE), IEEE Photonics Society, IEEE Communications Society, Chinese Optical Society (COS), China Institute of Communications (CIC) members, and those with related optics interest.<br><br>
		  &nbsp; &nbsp; &nbsp; &nbsp; Your participation in the meeting includes presenting your paper, attending sessions in your area of interest, and an opportunity to communicate with others working in the field of optical science.<br><br>
		  &nbsp; &nbsp;&nbsp; &nbsp; This is an invitation to participate in the meeting but not a personal sponsorship of your stay in China.  You will need to secure your own funding for travel, registration, and housing expenses for the meeting.<br><br>
		  &nbsp; &nbsp;  Additional meeting information, including visa requirements, is available on the ACP website at  &nbsp;<a href="www.acp-conf.org">www.acp-conf.org</a>. Thank you for your interest in the meeting and we look forward to seeing you in Shanghai.<br>
EOD;

$html2 = <<<EOD
		Sincerely,
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>						
		Zuyuan He<br>
		General Chair of ACP 2014<br>
		Professor, Shanghai Jiao Tong University
	</div>
EOD;


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, false, true, 'J', true); 
$pdf->writeHTMLCell(0, 0, '', 219, $html2, 0, 1, false, true, 'J', true); 

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('./Invitation Letters/Invitation Letter For 1.pdf', 'F');

function pdf2png($PDF,$Path,$ImageName){
   if(!extension_loaded('imagick')){
	   echo "<p>no imagick'</p>";
       return false;
   }
   if(!file_exists($PDF)){
	   echo "<p>no file'</p>";	   
       return false;
   }
 
   $IM = new imagick();
   $IM->setOption('density','200');
   $IM->setOption('antialias','');
   $IM->setOption('sharpen','0x1.0');
   //$IM->setResolution(794,1123);
  // echo 'image resolution';
   $IM->setCompressionQuality(100);  
   $IM->readImage($PDF);     
   foreach ($IM as $Key => $Var){
	   $Var->paintTransparentImage($Var->getImageBackgroundColor(), 1, 10000);
       $Var->setImageFormat('png');

       $Filename = $Path.'/'.$ImageName.'.png';
	   
       if($Var->writeImage($Filename) == true){
           $Return[] = $Filename;
       }
	   
   }
   
   return $Return;
}

	$pdfstr = './Invitation Letters/Invitation Letter For 1.pdf';  
	$imagepath = 'Invitation Letters/Image'; 
	$imagename = '1';
	pdf2png($pdfstr,$imagepath,$imagename);

/*
$output;
exec('/bin/convert -verbose -density 150 -trim ~/public_html/Invitation\ Letters/Invitation\ Letter\ For\ 1.pdf -quality 100 -sharpen 0x1.0 ~/public_html/2.png',$output,$retval);
var_dump($output);
error_reporting(E_ALL);
echo '<br>';
echo $retval;*/
/*
// Send Email To info@acp-conf.org 
date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->Host = 'smtp.exmail.qq.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'invitation@acp-conf.org';                 // SMTP username

$mail->Password = 'lett0919'; 
$mail->SMTPSecure = 'tls'; 

$mail->CharSet     = 'UTF-8';
$mail->Encoding    = '8bit';
$mail->setFrom('invitation@acp-conf.org', 'ACP组委会');
$mail->addAddress($_POST['Email'],$_POST['Title'].' '.$_POST['Name']);
$mail->Subject = 'Invitation letter for '.$Title.' '.$Name;
$mail->msgHTML('<p>Dear '.$Title.' '.$Name.'</p><br/><p>Thanks a lot for your support and contribution on ACP2014. Please find the Invitation Letter in the attachment. </p><br/><p>We are looking forward to meeting you at the conference soon!</p><br/><p>Best regards,</p><p>Local Organizing Committee, ACP2014<br/>
State Key Lab of Advanced Optical Communication Systems and Networks,<br/> Shanghai Jiao Tong University, China</p>', dirname(__FILE__));
$mail->addAttachment('./Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf');
$mail->send();


	echo "
	<form action='http://www.acp-conf.org/InvitationLetterConfirm.php' method='post' id='form-transfer'>

	<input type='text' style='display:none' name='FirstName' value='$FirstName'></input>
	<input type='text' style='display:none' name='FamilyName' value='$FamilyName'></input>	
	<input type='text' style='display:none' name='Name' value='$Name'></input>	
	<input type='text' style='display:none' name='Title' value='$Title'></input>
	<input type='text' style='display:none' name='Company' value='$Company'></input>
	<input type='text' style='display:none' name='Address' value='$Address'></input>		
	<input type='text' style='display:none' name='AddressC' value='$AddressC'></input>
	<input type='text' style='display:none' name='City' value='$City'></input>	
	<input type='text' style='display:none' name='State' value='$State'></input>			
	<input type='text' style='display:none' name='ZIP' value='$ZIP'></input>		
	<input type='text' style='display:none' name='Country' value='$Country'></input>
	<input type='text' style='display:none' name='Email' value='$Email'></input>
	<input type='text' style='display:none' name='Telephone' value='$Telephone'></input>
	<input type='text' style='display:none' name='Ext' value='$Ext'></input>		
	<input type='text' style='display:none' name='Fax' value='$Fax'></input>	
	<input type='text' style='display:none' name='Birthdate' value='$Birthdate'></input>			
	<input type='text' style='display:none' name='Gender' value='$Gender'></input>	
	<input type='text' style='display:none' name='IsSubmission' value='$IsSubmission'></input>
	<input type='text' style='display:none' name='PaperTitle' value='$PaperTitle'></input>
	<input type='text' style='display:none' name='PaperSession' value='$PaperSession'></input>
	<input type='text' style='display:none' name='IsExhibition' value='$IsExhibition'></input>		
	<input type='text' style='display:none' name='Passport' value='$Passport'></input>	
	<input type='text' style='display:none' name='CountryPassport' value='$CountryPassport'></input>			
	<input type='text' style='display:none' name='StayTime' value='$StayTime'></input>			
	<input type='text' style='display:none' name='Today' value='$Today'></input>		
	</form>
	<script type='text/javascript'>
		document.forms[0].submit();
	</script>";
*/
?>
</body>
</html>