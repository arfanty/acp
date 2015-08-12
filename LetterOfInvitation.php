<?php  
session_start();  

session_destroy();  

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Letter of Invitation ::ACP 2014::</title>
<!-- InstanceEndEditable -->
<script src="jquery-1.11.0.min.js"></script>
<script>
	$(document).ready(function()
	{
		var timerShow,timerHide;
		$(".detailLI").hide();
		$(".buttonUp").hide();

		$(".detailLI").each(function(index, element) {
			var marginleft = new Number(index*137);
            element.style.marginLeft = marginleft.toString()+"px";
        });/*
		$(".headerlist").mouseover(function(){
			$("#dropList").fadeIn("fast");
		});
		$(".headerlist").mouseleave(function(){
			$("#dropList").fadeOut("fast");
		});*/
		$("td.headerTd").mouseover(function(){
			//this.getElementsByTagName("a")[0].style.color="#32509E";
			//if (timerHide){window.clearInterval(timerHide);}
			var index = jQuery.inArray(this,$("td.headerTd"));
			//timerShow = window.setTimeout($("li.detailLI").eq(index).fadeIn("fast"),2000);
			$(this).stop(true,true).addClass("tdHover");
			$("li.detailLI").eq(index).stop(true).fadeIn(100);
		})
		$("td.headerTd").mouseleave(function(){
			//this.getElementsByTagName("a")[0].style.color="#FFF";
				var index = jQuery.inArray(this,$("td.headerTd"));
//				timerHide = window.setTimeout(($("li.detailLI").eq(index).fadeOut("fast")),2000);
				$("li.detailLI").eq(index).delay(60).fadeOut(100);
				$(this).delay(60).queue(function(){ $(this).removeClass("tdHover");});
		})
		$("li.detailLI").mouseover(function(){
					
				//if(timerHide) { window.clearInterval(timerHide);}
				var index = jQuery.inArray(this,$("li.detailLI"));
				$("td.headerTd").eq(index).stop(true,true);
				$(this).stop(true,true);
		})
		$("li.detailLI").mouseleave(function(){
					
				//timerHide = window.setTimeout($(this).fadeOut("fast"),200);
				var index = jQuery.inArray(this,$("li.detailLI"));
				$("td.headerTd").eq(index).delay(60).queue(function(){ $("td.headerTd").eq(index).removeClass("tdHover");});
				$(this).delay(60).fadeOut(100);
		})
		$(window).scroll(function(){
			if($(document).scrollTop()>600 && $(".buttonUp").is(":visible")==false)
			{
				//$(".buttonUp").css("left",950+$(".container").offset().left-$(window).scrollLeft());
				$(".buttonUp").fadeIn(300);
			}
			if($(document).scrollTop()<600 && $(".buttonUp").is(":visible")==true)
			{
				$(".buttonUp").fadeOut(300);
			}
			//$(".buttonUp").css("left",950+$(".container").offset().left-$(window).scrollLeft());
			
			//if($(document).scrollTop()>360)
			//{
			//	$(".leftSidebar").css("margin-top",$(document).scrollTop()-332);
			//	$(".rightSiderbar").css("margin-top",$(document).scrollTop()-332);
			//}
			//else
			//{
			//	$(".leftSidebar").css("margin-top","30px");
			//	$(".rightSiderbar").css("margin-top","30px");
			//}
		})
		//$(window).resize(function(){
		//	$(".buttonUp").css("left",950+$(".container").offset().left-$(window).scrollLeft());
		//})
		$(".buttonUp").click(function(){
			$("html, body").animate({scrollTop:0},300);
		})
	});

</script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- InstanceBeginEditable name="CSSEditRegion" -->
<style type="text/css">
.content{
	width:850px;
}
.content form#Invitation p{
	margin-top:20px;
	font-size:14px;
}
.content form#Invitation input{
	font-size:16px;
	margin-top:5px;
	margin-left:15px;
	width:250px;
	height:26px;
}
.content form#Invitation select{
	font-size:16px;
	margin-top:5px;
	margin-left:15px;
	width:250px;
	height:26px;
}
.content form#Invitation input#submit{
	margin-top:20px;
	margin-left:15px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
	color:#FFF;
	height:26px;
	width:70px;
	border:none;
	background:#FFC000;
}
.errorMessage
{
	display:none;
	font-size:14px;
	font-weight:bold;
	color:#F00;
}
.ValidateCodeErrorMessage
{
	font-size:14px;
	font-weight:bold;
	color:#F00;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

 <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth:true,  //月份下拉列表
        	changeYear: true,  //月份下拉列表
			yearRange: "1930:2014",
		});
	});
</script>

<!-- InstanceEndEditable -->
<style type="text/css">
.buttonUp{
	width:50px;
	height:50px;
	right:0px;
	bottom:50px;
	background:0xEEE;
	/*border:3px solid #FFC000;*/
	position:fixed;
	bottom:150px;
}
</style>

</head>

<body>


<div class="container">
  <div class="header"><div id='headerImage'><a href='index.php'><img src="images/ACP2014.png" name="header_logo" style="width:400px;height:112px" id="header_logo" /></a> </div>
  <div id='headerIntro'><p style="font-size:21px;"><b> Asia Communications and Photonics Conference</b></p>
  <p  style="font-size:15px;">Nov. 11-14, 2014, Shanghai International Convention Center, Shanghai, China</p>
  <div id='headerSearch'><div style="margin-left:20px;margin-top:20px;float:left;font-size:16px;color:#FFC000"><a><b>Search onsite</b> </a></div>
<script>
  (function() {
    var cx = '001578320587051794967:-cvl9mdqrea';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<div style="width:480px; float:left;"><gcse:search ></gcse:search></div>
</div></div>
    <!-- end .header --></div>
    
  <div class = "headerlist">

    <?php 
	require "headerList.php";
	echo "<table><tr>";//"<table><tr>";
	foreach ($HeaderList as $HeaderListElement)
	{
		echo "<td class='headerTd' id=\"$HeaderListElement->stringId\"><a  href=\"$HeaderListElement->stringLink\">$HeaderListElement->stringTitle</a></td>";
	}
	echo "</tr></table>";
	echo "<ul class=\"detailUL\">";
	foreach ($HeaderList as $HeaderListElement)
	{	
		echo "<li style=\"display:none\" class=\"detailLI\"><ul id=\"dropList\" class =\"menuElem\"> ";
		foreach ($HeaderListElement->arrayContent as $MenuContent)
		{
			echo "<li><a href=\"$MenuContent->stringLink\"><div class='outbox'><div>$MenuContent->stringTitle</div></div></a></li>";
		}
		echo "</ul></li>";
	}
	echo "</ul>";		
	?>
                    
  </div>
 <div class="content_one">
  <div class="leftSidebar"><!-- InstanceBeginEditable name="NavEditRegion" -->
  <?php 
	  	echo "<p>$drplstRegistrationTravel->stringTitle</p>";
  		echo "<ul class=\"nav\">";
		foreach($drplstRegistrationTravel->arrayContent as $registerTravelContent)
		{
			echo"<li><a href=\"$registerTravelContent->stringLink\">$registerTravelContent->stringTitle</a></li>";
		}
    	echo "</ul>";
		
	?>
  <!-- InstanceEndEditable -->

    <?php 
	  	echo $stringLeftSideBar_Announcement_Content;
		echo $stringLeftSideBar_ImportantDate_Content;
		?>
  <!-- end .sidebar1 --></div>
  <!-- InstanceBeginEditable name="ContentEditRegion" -->
  <div class="content"> <?php echo "<h1>$drpcttLetterOfInvitation->stringTitle</h1>" ;
  
   echo "
   <div id='FormForInvitation'>
<p> Individuals requiring letters of invitation to obtain travel visas may fill out the following form.Please include your full name as it appears on your passport, complete mail address, phone and fax number and indicate which meeting you will be attending. If you are presenting a paper, include the title and session that the paper will be presented in, or if you are exhibiting please indicate that in your request.  When requesting letters for more than one individual, please fill out one form for each person.</p>
<p>Please avoid using any accent marks when filling out your application as it will delay processing.</p>
<form id='Invitation' method='post' action='LetterOfInvitationTest.php'  >
  <p>First Name:*</p>
  <input name='FirstName' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[FirstName]' ";
  }
  echo "/><span class='errorMessage'>  First Name is required.</span><br />
  <p>Family Name:*</p>
  <input name='FamilyName' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[FamilyName]' ";
  }
  echo " /><span class='errorMessage'>  Family Name is required.</span><br />
  <p>Title:</p>
  <input name='Title' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Title]' ";
  }
  echo " /><span class='errorMessage'>  Title is required.</span>
  <p>Company/Institute:*</p>
  <input name='Company' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Company]' ";
  }
  echo "' /><span class='errorMessage'>  Company is required.</span><br />
  <p>Address:*</p>
  <input name='Address' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Address]' ";
  }
  echo " /><span class='errorMessage'>  Address is required.</span><br />
  <p>Address (cont'd):</p>
  <input name='AddressC' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[AddressC]' ";
  }
  echo " /><span class='errorMessage'>  Address (cont'd) is required.</span>
  <p>City:*</p>
  <input name='City' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[City]' ";
  }
  echo " /><span class='errorMessage'>  City is required.</span><br />
  <p>State/Province:</p>
  <input name='State' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[State]' ";
  }
  echo " /><span class='errorMessage'>  State/Province is required.</span>
  <p>ZIP/Postal Code:*</p>
  <input name='ZIP' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[ZIP]' ";
  }
  echo " /><span class='errorMessage'>  ZIP/Postal Code is required.</span><br />
  <p>Country: *</p>
  <input name='Country' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Country]' ";
  }
  echo " /><span class='errorMessage'>  Country is required.</span><br />
  <p>Email:*</p>
  <input name='Email' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Email]' ";
  }
  echo " /><span class='errorMessage'>  Email is required.</span><br />
  <p>Telephone:*</p>
  <input name='Telephone' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Telephone]' ";
  }
  echo " /><span class='errorMessage'>  Telephone is required.</span><br />
  <p>Ext:</p>
  <input name='Ext' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Ext]' ";
  }
  echo " /><span class='errorMessage'>  Ext is required.</span>
  <p>Fax:</p>
  <input name='Fax' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Fax]' ";
  }
  echo " /><span class='errorMessage'>  Fax is required.</span>
  <p>What is your birthdate?*(MUST be in the following format MM/DD/YYYY):</p>
 <input name='Birthdate' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Birthdate]'";
  }
  echo " id='datepicker'>
 <span class='errorMessage'>  Birthdate is required.</span><br />
  <p>What is your gender?*</p>
  <select name='Gender'>";
  if (isset($_POST['issubmitted']) && $_POST['Gender'] == 'Female') 
  {
	  echo "<option>Male</option>
			<option selected='selected'>Female</option>";
  }
  else
  {
	  echo "<option selected='selected'>Male</option>
			<option>Female</option>";
  }
  echo "
  </select>
  <span class='errorMessage'>  Gender is required.</span><br />
  <p>Did you submit a paper to the meeting?*</p>
   <select name='IsSubmission'>";
  if (isset($_POST['issubmitted']) && $_POST['IsSubmission'] == 'No') 
  {

		  echo "<option>Yes</option>
    			<option selected='selected'>No</option>";

  }
  else
  {
	  echo "<option selected='selected'>Yes</option>
			<option>No</option>";
  }
  echo "
  </select><span class='errorMessage'>  Required.</span><br />
  <p>Please provide your accepted paper title</p>
  <input name='PaperTitle' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[PaperTitle]' ";
  }
  echo " /><span class='errorMessage'>  Paper Title is required.</span>
  <p>Please provide the  control number of your paper</p>
  <input name='PaperSession' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[PaperSession]' ";
  }
  echo " /><span class='errorMessage'>  Paper control number is required.</span>
  <p>Is your company exhibiting at the meeting?*</p>
   <select name='IsExhibition'>";
  if (isset($_POST['issubmitted']) && $_POST['IsExhibition'] == 'No') 
  {

		  echo "<option>Yes</option>
    			<option selected='selected'>No</option>";

  }
  else
  {
	  echo "<option selected='selected'>Yes</option>
			<option>No</option>";
  }

  echo "
  </select><span class='errorMessage'>  Required.</span><br />
  <p>What is your passport number?</p>
  <input name='Passport' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[Passport]' ";
  }
  echo " /><span class='errorMessage'>  Passport Number is required.</span><br />
  <p>From what country is your passport issued?</p>
  <input name='CountryPassport' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[CountryPassport]' ";
  }
  echo " /><span class='errorMessage'>  Required.</span><br />
  <p>How long will you stay in the destination country?</p>
  <input name='StayTime' type='text'";
  if (isset($_POST['issubmitted'])) 
  {
	  echo " value='$_POST[StayTime]' ";
  }
  $validate='"captcha.php?"';
  echo " /><span class='errorMessage'>  Required.</span><br />
  <!-- p>Form Check: Type the characters that you see in this picture.*</p>
  <input name='validate' type='text' /> <img  title='Click to refresh' src='./captcha.php' align='absbottom' onclick='this.src=$validate+Math.random();'></img>  <span class='errorMessage'>Validate code is required.</span><span class='ValidateCodeErrorMessage' style='display:none'>Validate code is incorrect.</span><br/ --!>
  <input id='submit' value='Submit' type='submit' onclick='return FormValidate(this.form)' />
  <input name='issubmitted' value='' type='text' style='display:none' />
  <p>If didn't receive your Invitation Letter after 24 hours, or have any questions, please contact us via <a href='mailto:invitation@acp-conf.org'>invitation@acp-conf.org</a></p>
  <script>
  
  function FormValidate(form)
  {
	  var index;
	  var rev=true;
	  for(index=0;index < $('#Invitation > :input').length;index++)
	  {
		  if($('#Invitation > p').eq(index).text().indexOf('*')>0)
		  {
			  if($('#Invitation > :input').eq(index).val() == '')
			  {
				  $('.errorMessage').eq(index).show();
				  rev = false;
			  }
			  else
			  {
				  $('.errorMessage').eq(index).hide();
			  }
		  }
	  }
	  if (rev==true) 
	  {
		  form.issubmitted.value = 'yes';
	  }
	  return rev;
	  

  }
  </script>
</form>
</div>
<p id='Submitting' style='display:none;' class='emphasize'>Submitting, Please wait a minute.</p>";
  
	if (isset($_POST['issubmitted']))
  {
	  $validate=$_POST["validate"];
	  /*if($validate!=$_SESSION["authnum_session"]){  
	  	echo "<script>
		$(document).ready(function()
		{
			$('span.ValidateCodeErrorMessage').show();
		});
		</script>";
	  }
	  else*/
	  {
		echo "<script>
		$(document).ready(function()
		{
			$('span.ValidateCodeErrorMessage').hide();
			$('div#FormForInvitation').hide();
			$('p#Submitting').show();
		});
		</script>";
		  $con = mysql_connect("localhost","acpconf1_0","GUANG2013yan&&&");
		  mysql_select_db("acpconf1_invitationLetter",$con);
		  mysql_query("create table if not exists InvitationLetter_table
		  (
			  FirstName varchar(30),
			  FamilyName varchar(30),
			  Name varchar(60),
			  Title varchar(30),
			  Company varchar(255),
			  Address varchar(1000),
			  AddressC varchar(1000),
			  City varchar(30),
			  State varchar(30),
			  ZIP varchar(30),
			  Country varchar(100),
			  Email varchar(100),
			  Telephone varchar(30),
			  Ext varchar(30),
			  Fax varchar(30),
			  Birthdate date,
			  Gender enum('Male','Female'),
			  IsSubmission enum('Yes','No'),
			  PaperTitle varchar(100),
			  PaperSession varchar(30),
			  IsExhibition enum('Yes','No'),
			  Passport varchar(30),
			  CountryPassport varchar(30),
			  StayTime varchar(30)
		  )",$con);
		  //$Birthdate = date("%Y-%m-%d",strtotime($_POST['Birthdate']));
		  $FirstName = check_input($_POST['FirstName']);
		  $FamilyName = check_input($_POST['FamilyName']);
		  $Name = $FirstName." ".$FamilyName;
		  $Title = check_input($_POST['Title']);
		  $Company = check_input($_POST['Company']);
		  $Address = check_input($_POST['Address']);
		  $AddressC = check_input($_POST['AddressC']);
		  $City = check_input($_POST['City']);
		  $State = check_input($_POST['State']);
		  $ZIP = check_input($_POST['ZIP']);
		  $Country = check_input($_POST['Country']);
		  $Email = check_input($_POST['Email']);
		  $Telephone = check_input($_POST['Telephone']);
		  $Ext = check_input($_POST['Ext']);
		  $Fax = check_input($_POST['Fax']);
		  $Birthdate = check_input($_POST['Birthdate']);
		  $Gender = check_input($_POST['Gender']);
		  $IsSubmission = check_input($_POST['IsSubmission']);
		  $PaperTitle = check_input($_POST['PaperTitle']);
		  $PaperSession = check_input($_POST['PaperSession']);
		  $IsExhibition = check_input($_POST['IsExhibition']);
		  $Passport = check_input($_POST['Passport']);
		  $CountryPassport = check_input($_POST['CountryPassport']);
		  $StayTime = check_input($_POST['StayTime']);
		  
		  if(!mysql_query("delete from InvitationLetter_table where 
		  FirstName='$_POST[FirstName]' and 
		  FamilyName='$_POST[FamilyName]' and
		  Company='$_POST[Company]'",$con))
		  {
			  echo"<script>
			  alert('Failed to connect to server. Pleas submit again later.');
			  </script>";
			  die('Could not connect: ' . mysql_error());
		  }
		  
		  else if(!mysql_query("insert into InvitationLetter_table 
		  (
			  FirstName,
			  FamilyName,
			  Name,
			  Title,
			  Company,
			  Address,
			  AddressC,
			  City,
			  State,
			  ZIP,
			  Country,
			  Email,
			  Telephone,
			  Ext,
			  Fax,
			  Birthdate,
			  Gender,
			  IsSubmission,
			  PaperTitle,
			  PaperSession,
			  IsExhibition,
			  Passport,
			  CountryPassport,
			  StayTime
		   )
		   values
		   (
			  $FirstName,
			  $FamilyName,
			  $Name,
			  $Title,
			  $Company,
			  $Address,
			  $AddressC,
			  $City,
			  $State,
			  $ZIP,
			  $Country,
			  $Email,
			  $Telephone,
			  $Ext,
			  $Fax,
			  STR_TO_DATE($Birthdate,'%m/%d/%Y'),
			  $Gender,
			  $IsSubmission,
			  $PaperTitle,
			  $PaperSession,
			  $IsExhibition,
			  $Passport,
			  $CountryPassport,
			  $StayTime
		   )
		   ",$con))
		   {
			  echo"<script>
			  alert('Failed to connect to server. Pleas submit again later.');
			  </script>";
			  die('Could not connect: ' . mysql_error());
		   }
		   else
		   {
			   	
		   
$FirstName = $_POST['FirstName'];
$FamilyName = $_POST['FamilyName'];
$Name = $FirstName." ".$FamilyName;
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
$PaperTitle = $_POST['PaperTitle'];
$PaperSession = $_POST['PaperSession'];
$IsExhibition = $_POST['IsExhibition'];
$Passport = $_POST['Passport'];
$CountryPassport = $_POST['CountryPassport'];
$StayTime = $_POST['StayTime'];
$Today = date("j F, Y");
if($PaperTitle != '' && $PaperSession != '')
{
	$TitleAndCode = ' '.$PaperTitle.'(Control number:'.$PaperSession.')';
}
else
{
	$TitleAndCode = '';
}
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
		  &nbsp; &nbsp; &nbsp; &nbsp; Your participation in the meeting includes presenting your paper<i>$TitleAndCode</i>, attending sessions in your area of interest, and an opportunity to communicate with others working in the field of optical science.<br><br>
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
$pdf->Output('./Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf', 'F');
	
	
// Generate Image.
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
       $Var->setImageFormat('png');
       $Filename = $Path.'/'.$ImageName.'.png';
	   
       if($Var->writeImage($Filename) == true){
           $Return[] = $Filename;
       }
	   
   }
   return $Return;
}

	$pdfstr = './Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf';  
	$imagepath = 'Invitation Letters/Image'; 
	$imagename = 'Invitation Letter For '.$Title.' '.$Name;
	pdf2png($pdfstr,$imagepath,$imagename);	
	
// Transfer.	
	echo "
	<form action='http://acp.sjtu.edu.cn/acp-transfer-mail/transferInvitationLetter.php' method='post' id='form-transfer'>

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
		$('form#form-transfer').submit();
	</script>";
		   }
	  }
	  
	  
  }  ?>
   </div>
  <!-- InstanceEndEditable -->
  <div class="sponsor"> <a>Technically Sponsored by:<a>
    <ul  style="margin-top:10px">
      <li><img src="images/foot/foot1.jpg" style="width: auto; height:65px" href="#"/></li>
      <li><img src="images/foot/foot2.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="images/foot/foot3.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="images/foot/foot4.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="images/foot/foot5.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="images/foot/foot6.gif" style="width: auto; height: 65px" href="#"/></li>
    </ul>
  </a></a></div>
  <div class="footer">
  	<div>
  	<a href="sitemap.xml">Sitemap</a> <a> | </a><a href="About.php#FAQ">Frequently Asked Questions</a><a> | </a><a>Copyright © Shanghai Jiao Tong University</a>
    </div>
    <!-- end .footer --></div>
    
     <div class="buttonUp">
  	<a><img style="width:100%; height:100%" src="images/button/buttonUp.png" /></a>
  </div> 
  <!-- end .container --></div>
  



</body>
<!-- InstanceEnd --></html>
<!-- site made by ZQ, arfanty2000@126.com !-->