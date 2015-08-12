<?php
	require "back-end/content.php";
	function check_input($value)
	{
		// 去除斜杠
		if (get_magic_quotes_gpc())
		  {
		  $value = stripslashes($value);
		  }
		// 如果不是数字则加引号
		if (!is_numeric($value))
		  {
		  $value = "'" . mysql_real_escape_string($value) . "'";
		  }
		return $value;
	}
	/**
	 * 配置文件操作(查询了与修改)
	 * 默认没有第三个参数时，按照字符串读取提取''中或""中的内容
	 * 如果有第三个参数时为int时按照数字int处理。
	 *调用demo
		$name="admin";//kkkk
		$bb='234';
		
		$bb=getconfig("./2.php", "bb", "string");
		updateconfig("./2.php", "name", "admin");
	*/
	function get_config($file, $ini, $type="string"){
		if(!file_exists($file)) return false;
		$str = file_get_contents($file);
		if ($type=="int"){
			$config = preg_match("/".preg_quote($ini)."=(.*);/", $str, $res);
			return $res[1];
		}
		else{
			$config = preg_match("/".preg_quote($ini)."=\"(.*)\";/", $str, $res);
			if($res[1]==null){	
				$config = preg_match("/".preg_quote($ini)."='(.*)';/", $str, $res);
			}
			return $res[1];
		}
	}
	
	function update_config($file, $ini, $value,$type="string"){
		if(!file_exists($file)) return false;
		$str = file_get_contents($file);
		$str2="";
		if($type=="int"){	
			$str2 = preg_replace("/".preg_quote($ini)."=(.*);/", $ini."=".$value.";",$str);
		}
		else{
			$str2 = preg_replace("/".preg_quote($ini)."=(.*);/",$ini."=\"".$value."\";",$str);
		}
		file_put_contents($file, $str2);
	} 	
	
	
	class DropList
	{
		public $stringTitle;
		public $arrayContent;
		public $stringLink;
		public $stringId;
		function __construct($string1,$string2,$string3)
		{
			$this->stringTitle  = $string1;
			$this->stringLink = $string2;
			$this->stringId = $string3;			
		}
	}

	class DropListContent
	{
		public $stringTitle;
		public $stringLink;	
		public $stringID;
		public $stringContent;
		function __construct($string1,$string2,$string3,$string4)
		{
			$this->stringTitle  = $string1;
			$this->stringLink = $string2;		
			$this->stringID = $string3;		
			$this->stringContent = $string4;	
		}
	}
	
	$HomeLink = "http://127.0.0.1/ACP_2014/";
	
	$drplstWelcome 					= new DropList("Welcome to ACP 2014","index.php","welcome");	
	$drplstOrganization 			= new DropList("Organizations","Organizations.php","organi");	
	$drplstConferenceProgram 		= new DropList("Conference Program","Program.php","program");	
	$drplstExhibition				= new DropList("Sponsorship & Exhibition","Exhibition.php","exhbi");	
	$drplstPaperSubmission 			= new DropList("Paper Submission","Submit.php","submission");	
	$drplstRegistrationTravel 		= new DropList("Registration & Travel","Register.php","regist");
	$drplstAboutACP			 		= new DropList("About ACP","About.php","about");		
//Welcome	
	$drpcttWelcomeMessage			= new DropListContent("Welcome Message","index.php#WelcomeMessage","WelcomeMessage",$stringWelcomeMessageContent);
	$drpcttHighLights				= new DropListContent("Conference Highlights","index.php#HighLights","HighLights",$stringHighLightsContent);
	$drpcttNews						= new DropListContent("News & Information","index.php#News","News",$stringNewsContent);
	$drpcttTimeNodes				= new DropListContent("Important Dates","index.php#TimeNodes","TimeNodes",$stringTimeNodesContent);
	
	$arraycttWelcome =array(
		$drpcttWelcomeMessage,
		$drpcttHighLights,
		$drpcttNews,
		$drpcttTimeNodes
	);
	$drplstWelcome->arrayContent = $arraycttWelcome;
//Organization

	$drpcttChairs			= new DropListContent("Conference Chairs","Organizations.php#Chairs","Chairs",$stringChairsContent);
	$drpcttSteeringCommittee			= new DropListContent("Steering Committee","Organizations.php#SteeringCommittee","SteeringCommittee",$stringSteeringCommitteeContent);
	$drpcttTechnicalProgramCommittee			= new DropListContent("Technical Program Committee","Organizations.php#TechnicalProgramCommittee","TechnicalProgramCommittee",$stringTechnicalProgramCommitteeContent);
	$drpcttLocalOrganizingCommittee				= new DropListContent("Local Organizing Committee","Organizations.php#LocalOrganizingCommittee","LocalOrganizingCommittee",$stringLocalOrganizingCommitteeContent);
	$drpcttSubCommittee				= new DropListContent("Sub-Committees","SubCommittee.php","SubCommittee",$stringSubCommitteeContent);


	$arraycttOrganization =array(
		$drpcttChairs,
		$drpcttTechnicalProgramCommittee,
		$drpcttLocalOrganizingCommittee,
		$drpcttSteeringCommittee,
		$drpcttSubCommittee
	);			
	
	$drplstOrganization->arrayContent = $arraycttOrganization;
//Conference Program	
	$drpcttSpeeches					= new DropListContent("Plenary Speeches","Program.php","Speeches",$stringSpeechesContent);			
	$drpcttTrack				= new DropListContent("Tracks","Track.php","Track",$stringTrackContent);
	$drpcttWorkshop				= new DropListContent("Workshops","Workshop.php","Workshop",$stringWorkshopContent);
	$drpcttSpecialSymposium			= new DropListContent("Special Symposium","SpecialSymposium.php","SpecialSymposium",$stringSpecialSymposiumContent);
	$drpcttIndustryForum			= new DropListContent("Industry Forum","IndustryForum.php","IndustryForum",$stringIndustryForumContent);
	$drpcttProgram					= new DropListContent("Conference Program","ConferenceProgram.php","Program",$stringProgramContent);
	$drpcttInvitedTalk				= new DropListContent("Invited Talks","InvitedTalk.php","InvitedTalk",$stringInvitedTalkContent);
	$arraycttConferenceProgram =array(
		$drpcttSpeeches,	
		$drpcttInvitedTalk,
		$drpcttTrack,
		$drpcttWorkshop,
		$drpcttSpecialSymposium,
		$drpcttIndustryForum,
		$drpcttProgram
	);			
	
	$drplstConferenceProgram->arrayContent = $arraycttConferenceProgram;
//Exhibition&Sponsonship	
	$drpcttExhibitor				= new DropListContent("Exhibitor","Exhibition.php#Exhibitor","Exhibitor",$stringExhibitorContent);
	$drpcttExhibitionOpportunities			= new DropListContent("Exhibition Opportunities","Exhibition.php#ExhibitionOpportunities","ExhibitionOpportunities",$stringExhibitionOpportunitiesContent);
	$drpcttSponsors			= new DropListContent("Sponsors & Exhibitors","Exhibition.php#Sponsors","Sponsors",$stringSponsorsContent);
	$drpcttExhibitionContactUs	= new DropListContent("Contact us","Exhibition.php#ExhibitionContact","ExhibitionContact",$stringExhibitionContactContent);
	
	$arraycttExhibition =array(
		$drpcttSponsors,
		$drpcttExhibitionOpportunities,
		$drpcttExhibitionContactUs
		
	);			
	$drplstExhibition->arrayContent = $arraycttExhibition;
//Paper Submission
	$drpcttSubmit	= new DropListContent("Submission","Submit.php#Submit","Submit",$stringSubmitContent);
	$drpcttAuthorInstruction = new DropListContent("Author Instruction","Submit.php#AuthorInstruction","AuthorInstruction",$stringAuthorInstructionContent);
	$drpcttAwards  = new DropListContent("IEEE Photonics Society Best Student Paper Awards","Submit.php#Awards","Awards",$stringAwardsContent);
	$drpcttCallForSubmission		= new DropListContent("Call For Submission","Submit.php#CallForSubmission","CallForSubmission",$stringCallForSubmissionContent);
	$drpcttManuscriptTemplate	= new DropListContent("Style Guide & Templates","Submit.php#ManuscriptTemplate","ManuscriptTemplate",$stringManuscriptTemplateContent);
	$drpcttNotification = new DropListContent("Notification","Submit.php#Notification","Notification",$stringNotificationContent);
	$drpcttContactUs = new DropListContent("Contact us","Submit.php#SubmitContact","SubmitContact",$stringSubmitContactContent);
		
	$arraycttPaperSubmission =array(
		$drpcttSubmit,
		$drpcttAuthorInstruction,
		$drpcttAwards,
		//$drpcttCallForSubmission,
		$drpcttManuscriptTemplate,
		$drpcttNotification,
		$drpcttContactUs,
	);			
	$drplstPaperSubmission->arrayContent = $arraycttPaperSubmission;
//Register & Travel	
	$drpcttRegistrationFee			= new DropListContent("Registration","Register.php","RegisterFee",$stringRegisterFeeContent);
	$drpcttPaymentMethods			= new DropListContent("Payment","Paymenttest.php","PaymentMethods",$stringPaymentMethodsContent);
	$drpcttCancellationPolicy		= new DropListContent("Cancellation Policy","Cancellation.php","CancellationPolicy",$stringCancellationPolicyContent);	
	$drpcttVenue					= new DropListContent("Venue","Venue.php","Venue",$stringVenueContent);	
	$drpcttHotel					= new DropListContent("Hotel Reservation","Hotel.php","Hotel",$stringHotelContent);
	$drpcttSocialActivities			= new DropListContent("Social Activities","SocialActivities.php","SocialActivities",$stringSocialActivitiesContent);
	$drpcttVisa						= new DropListContent("Visa Information","Visa.php","Visa",$stringVisaContent);					
	$drpcttLetterOfInvitation		= new DropListContent("Letter of Invitation","LetterOfInvitationTest.php","LetterOfInvitation",$stringLetterOfInvitationContent);
	
	$arraycttRegistrationTravel =array(
		$drpcttRegistrationFee,
		$drpcttPaymentMethods,
		//$drpcttCancellationPolicy,
		$drpcttVenue,
		$drpcttHotel,
		$drpcttSocialActivities,
		$drpcttVisa,
		$drpcttLetterOfInvitation
	);			
	$drplstRegistrationTravel->arrayContent = $arraycttRegistrationTravel;
//About ACP	
	$drpcttACPHistory				= new DropListContent("ACP History","About.php#ACPHistory","ACPHistory",$stringACPHistoryContent);
	//$drpcttOrganizer				= new DropListContent("Organizer","#Organizer","Organizer",$stringOrganizerContent);
	//$drpcttSponsor					= new DropListContent("Sponsor","#Sponsor","Sponsor",$stringSponsorContent);	
	$drpcttContact					= new DropListContent("Contact us","About.php#Contact","Contact",$stringContactContent);		
	$drpcttACPFormerWebsite			= new DropListContent("Former ACP's Website","About.php#ACPFormerWebsite","ACPFormerWebsite",$stringACPFormerWebsiteContent);			
	$drpcttFAQ						= new DropListContent("FAQ","About.php#FAQ","FAQ",$stringFAQContent);		
	
	$arraycttAboutACP =array(
		$drpcttACPHistory,
		//$drpcttOrganizer,
		//$drpcttSponsor,
		$drpcttContact,
		//$drpcttACPFormerWebsite,
		$drpcttFAQ
	);			
	$drplstAboutACP->arrayContent = $arraycttAboutACP;
// Header List	
	$HeaderList = array(
		$drplstWelcome,
		$drplstOrganization,
		$drplstConferenceProgram,
		$drplstExhibition,
		$drplstPaperSubmission,
		$drplstRegistrationTravel,
		$drplstAboutACP
	);
	
	


	
	
?>