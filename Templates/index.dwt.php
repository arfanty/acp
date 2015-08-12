﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="TitleEditRegion" -->
<title>Asia Communications and Photonics Conference 2014</title>
<!-- TemplateEndEditable -->
<script src="../jquery-1.11.0.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="../style.css"/>
<!-- TemplateBeginEditable name="CSSEditRegion" -->
<style type="text/css">
.content{
	padding: 10px 0;
	width: 680px;
	float: left;
}
</style>
<!-- TemplateEndEditable -->
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
	require "../headerList.php";
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
			echo "<li><a href=\"$MenuContent->stringLink\">$MenuContent->stringTitle</a></li>";
		}
		echo "</ul></li>";
	}
	echo "</ul>";		
	?>
                    
  </div>
 <div class="content_one">
  <div class="leftSidebar"><!-- TemplateBeginEditable name="NavEditRegion" -->
  <?php 
	  	echo "<p>$drplstWelcome->stringTitle</p>";
  		echo "<ul class=\"nav\">";
		foreach($drplstWelcome->arrayContent as $welcomeContent)
		{
			echo"<li><a href=\"$welcomeContent->stringLink\">$welcomeContent->stringTitle</a></li>";
		}
    	echo "</ul>";
		
	?>
  <!-- TemplateEndEditable -->

    <div class="announcement">
        <a id="title">Announcements</a><br />
        <ul>
        	<li><a href='http://www.osa.org/en-us/meetings/topical_meetings/asia_communications_and_photonics_conference_(2)/submission_guidelines/' style="color:#000"><b>Online Submission</b></a></li>
            <li><a href="../files/Call_for_Papers.pdf">First call for submission</a></li>
            <li><a href='../Program.php#InvitedTalk'><b>Updated:</b>Invited Talk</a></li>
            <li><a href='../Track.php'><b>Updated:</b>Tracks</a></li>
            <li><a href='../Workshop.php'><b>Updated:</b>Workshops</a></li>            
        </ul>
    </div>
    <div class="importantdates">
        <a id="title">Important Dates</a><br />
        <ul>
            <li><a style="color:#FFC000"><b>Aug. 3rd, 2014</b></a><br />
            	<a>Deadline for Abstract Submission</a></li>
            <li><a style="color:#FFC000"><b>10 Oct. 2014</b></a><br />
            	<a>Deadline for Pre-registration</a></li>
            <li><a style="color:#FFC000"><b>24 Oct. 2014</b></a><br />
            	<a>Deadline for Post-deadline Paper Submission</a></li>                                
        </ul>
    </div>
  <!-- end .sidebar1 --></div>
  <!-- TemplateBeginEditable name="ContentEditRegion" -->
  <div class="content"> <?php echo "<h1>$drpcttWelcomeMessage->stringTitle</h1>" ?>
    <p>Asia Communications and Photonics Conference (ACP) is now the largest conference in the Asia-Pacific region on photonics and relevant technologies. ACP has been held annually tracing back to 2001 and jointly sponsored by OSA, SPIE, IEEE Photonics Society, COS and CIC. ACP‘2014 will be held in Shanghai, China, on November 11-14, 2014. </p>
    <p>Shanghai, Hu for short, is a renowned international metropolis drawing more and more attention from all over the world. Situated on the estuary of Yangtze River, it serves as the most influential economic, financial, international trade, cultural, science and technology center in East China. Also it is a popular destination for visitors to sense the pulsating development of the country.</p>
    <p>In addition to its modernization, the city’s multicultural flair endows it with a unique glamour. Here, one finds the perfect blend of cultures, the modern and the traditional , and the western and the oriental. New skyscrapers and old Shikumen together draw the skyline of the city. Western customs and Chinese traditions intertwined and formed Shanghai's culture, making a visitor's stay truly memorable.</p>
    <p>Dear colleagues and friends from all over the world, join us, join this special event! You are warmestly welcome and our gathering in Shanghai will be a precious and pleasant experience of everyone! </p>
 <p>Asia Communications and Photonics Conference (ACP) is now the largest conference in the Asia-Pacific region on photonics and relevant technologies. ACP has been held annually tracing back to 2001 and jointly sponsored by OSA, SPIE, IEEE Photonics Society, COS and CIC. ACP‘2014 will be held in Shanghai, China, on November 11-14, 2014. </p>
    <p>Shanghai, Hu for short, is a renowned international metropolis drawing more and more attention from all over the world. Situated on the estuary of Yangtze River, it serves as the most influential economic, financial, international trade, cultural, science and technology center in East China. Also it is a popular destination for visitors to sense the pulsating development of the country.</p>
    <p>In addition to its modernization, the city’s multicultural flair endows it with a unique glamour. Here, one finds the perfect blend of cultures, the modern and the traditional , and the western and the oriental. New skyscrapers and old Shikumen together draw the skyline of the city. Western customs and Chinese traditions intertwined and formed Shanghai's culture, making a visitor's stay truly memorable.</p>
    <p>Dear colleagues and friends from all over the world, join us, join this special event! You are warmestly welcome and our gathering in Shanghai will be a precious and pleasant experience of everyone! </p>
 <p>Asia Communications and Photonics Conference (ACP) is now the largest conference in the Asia-Pacific region on photonics and relevant technologies. ACP has been held annually tracing back to 2001 and jointly sponsored by OSA, SPIE, IEEE Photonics Society, COS and CIC. ACP‘2014 will be held in Shanghai, China, on November 11-14, 2014. </p>
    <p>Shanghai, Hu for short, is a renowned international metropolis drawing more and more attention from all over the world. Situated on the estuary of Yangtze River, it serves as the most influential economic, financial, international trade, cultural, science and technology center in East China. Also it is a popular destination for visitors to sense the pulsating development of the country.</p>
    <p>In addition to its modernization, the city’s multicultural flair endows it with a unique glamour. Here, one finds the perfect blend of cultures, the modern and the traditional , and the western and the oriental. New skyscrapers and old Shikumen together draw the skyline of the city. Western customs and Chinese traditions intertwined and formed Shanghai's culture, making a visitor's stay truly memorable.</p>
    <p>Dear colleagues and friends from all over the world, join us, join this special event! You are warmestly welcome and our gathering in Shanghai will be a precious and pleasant experience of everyone! </p>
 <p>Asia Communications and Photonics Conference (ACP) is now the largest conference in the Asia-Pacific region on photonics and relevant technologies. ACP has been held annually tracing back to 2001 and jointly sponsored by OSA, SPIE, IEEE Photonics Society, COS and CIC. ACP‘2014 will be held in Shanghai, China, on November 11-14, 2014. </p>
    <p>Shanghai, Hu for short, is a renowned international metropolis drawing more and more attention from all over the world. Situated on the estuary of Yangtze River, it serves as the most influential economic, financial, international trade, cultural, science and technology center in East China. Also it is a popular destination for visitors to sense the pulsating development of the country.</p>
    <p>In addition to its modernization, the city’s multicultural flair endows it with a unique glamour. Here, one finds the perfect blend of cultures, the modern and the traditional , and the western and the oriental. New skyscrapers and old Shikumen together draw the skyline of the city. Western customs and Chinese traditions intertwined and formed Shanghai's culture, making a visitor's stay truly memorable.</p>
    <p>Dear colleagues and friends from all over the world, join us, join this special event! You are warmestly welcome and our gathering in Shanghai will be a precious and pleasant experience of everyone! </p>            
    <?php echo "<h1>$drpcttHighLights->stringTitle</h1>" ?>
    <p>We are honored to announce that in the plenary sessions, the leading scientists will give talks.</p>
    <?php echo "<h3>$drpcttNews->stringTitle</h1>" ?> <?php echo "<h1>$drpcttTimeNodes->stringTitle</h1>" ?>
    <p>Deadline for Abstract Submissions (<font color="#FFC000"><b>August 3rd, 2014</b></font>)</p>
    <p> Official Notifications (<font color="#FFC000"><b>August 29, 2014</b></font>)</p>
    <p>Deadline for Pre-registration (<font color="#FFC000"><b>October 10, 2014</b></font>)</p>
    <p>Deadline for Post-deadline Papers Submissions (<font color="#FFC000"><b>October 24, 2014</b></font>)</p>
    <!-- end .content -->
  </div>
  <div class="rightSiderbar">
    <button type="button">Submit Now</button>
    <button type="button">Register Now</button>
    <br />
    <br />
    <br />
    <br />
    <a>Organized by:<a><br />
      <br />
      <a href="http://www.sjtu.edu.cn"><img src="../images/organizor/organizor1.png" style="width: 110%; height: 110%"/></a> <br />
      <br />
      <a>Co-organized by:<a><br />
        <br />
        <img src="../images/organizor/organizor2.png" style="width: 110%; height: 110%" href="#"/> <img src="../images/organizor/organizor3.png" style="width: 110%; height: 110%" href="#"/> <img src="../images/organizor/organizor4.png" style="width: 110%; height: 110%" href="#"/></a></a></a></a></div>
  <!-- TemplateEndEditable -->
  <div class="sponsor"> <a>Technically Sponsored by:<a>
    <ul  style="margin-top:10px">
      <li><img src="../images/foot/foot1.jpg" style="width: auto; height:65px" href="#"/></li>
      <li><img src="../images/foot/foot2.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="../images/foot/foot3.png" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="../images/foot/foot4.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="../images/foot/foot5.jpg" style="width: auto; height: 65px" href="#"/></li>
      <li><img src="../images/foot/foot6.gif" style="width: auto; height: 65px" href="#"/></li>
    </ul>
  </a></a></div>
  <div class="footer">
  	<div>
  	<a href="../sitemap.xml">Sitemap</a> <a> | </a><a href="../About.php#FAQ">Frequently Asked Questions</a><a> | </a><a>Copyright © Shanghai Jiao Tong University</a>
    </div>
    <!-- end .footer --></div>
    
     <div class="buttonUp">
  	<a><img style="width:100%; height:100%" src="../images/button/buttonUp.png" /></a>
  </div> 
  <!-- end .container --></div>
  



</body>
</html>
<!-- site made by ZQ, arfanty2000@126.com !-->