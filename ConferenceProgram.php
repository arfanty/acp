<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Confrence Program ::ACP 2014::</title>
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
	padding: 10px 0;
	width: 850px;
	float: left;
}
.content table {
	border-collapse:collapse;
	margin-top:20px;
	margin-left:20px;
	border:none;
	font-size:12px;
}
.content th {
	border:1.5px solid #06C;
	font-family:Arial, Helvetica, sans-serif;
}
.content td {
	text-align:center;
	border:1.5px solid #06C;
	padding-left:6px;
	font-family:Arial, Helvetica, sans-serif;
}
.content tr.odd {
	background:rgba(255,192,0,0.3);
	/*Maybe has problem in IE 6~8*/
}
</style>
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
 <!-- InstanceBeginEditable name="ContentEditRegion" -->

  <div class="content"> <?php echo "<h1 id='$drpcttProgram->stringID' >$drpcttProgram->stringTitle</h1>"; ?>
    <p class='subtitle' id='technicalprogram'>ACP2014 Technical Program</p> 
    <p><b>Download the <a href='./files/ACP2014-Program-final-G.pdf'>ACP 2014 Technical Program (PDF)</a></b></p>
    <p><b>Download the <a href='./files/ACP2014 Update Sheet.pdf'>ACP2014 Update Sheet (By  Nov. 7, 2014)(PDF)</a></b></p>
    <p><b>Download the <a href='./files/Postdeadline Presentations.pdf'>Schedule for Post-deadline Presentations (PDF)</a></b></p>  
  <p class='subtitle'>Program at a glance</p>
  <!-- <p><b>Tuesday, November 11</b></p>
  <table cellspacing="0" cellpadding="0">
   <col width="80" span="11" />
   <tr height='60px'>
   	 <th width="400" align="center" valign="middle">
     	Conference Room 1-8 for Workshop 1-8</th>
   	 <th width="360" align="center" valign="middle">
     	Conference Room 9 for Industry Forum</th>   
	 <th width="280" align="center" valign="middle">
     	Conference Room 10 for Special Symposium</th>         
   </tr>
   <tr>
   	 <td width="500" height="39" align="center" valign="middle"></td>
   	 <td width="300" align="center" valign="middle">	</td>   
	 <td width="300" align="center" valign="middle"></td>         
   </tr>   
  </table>      
  
  <p><b>Wendesday, November 12</b></p>
  <table cellspacing="0" cellpadding="0">
    <col width="80" span="11" />
    <tr  height='60px'>
      <th width="100" align="center" valign="middle">Conference Room 1 for Track 1</th>
      <th width="100" align="center" valign="middle">Conference Room 2 for Track 1</th>
      <th width="100" align="center" valign="middle">Conference Room 3 for Track 2</th>
      <th width="100" align="center" valign="middle">Conference Room 4 for Track 2/5</th>
      <th width="100" align="center" valign="middle">Conference Room 5 for Track 3</th>
      <th width="100" align="center" valign="middle">Conference Room 6 for Track 3</th>
      <th width="100" align="center" valign="middle">Conference Room 7 for Track 4</th>
      <th width="100" align="center" valign="middle">Conference Room 8 for Track 4</th>
      <th width="100" align="center" valign="middle">Conference Room 9 for Track 5</th>
      <th width="100" align="center" valign="middle">Conference Room 10 for Track 6</th>
      <th width="100" align="center" valign="middle">Exhibition    Room </th>
    </tr>
    <tr class='odd'>
      <td colspan="11" align="center" valign="middle" height='40px'>Opening Ceremony (Presider: Prof. Zuyuan He, General Chair)<br />
8:30-9:00<br />
Opening Ceremony - 30 minutes (ACP Honorary Chairs/OSA Chair)</td>
    </tr>
    <tr >
      <td colspan="10" align="center" valign="middle">Plenary Session (Presider: Prof. Lena Wosinska, General Co-Chair)<br />
        9:00-10:20<br />
        Plenary Presentation 1 - 40 minutes (Prof. Hequan Wu)<br />
        Plenary Presentation 2 - 40 minutes (Prof. Masataka Nakazawa)</td>
      <td width="100" rowspan="21" align="center" valign="middle">Conference Exhibition</td>
    </tr>
    <tr class='odd'>
      <td colspan="10" align="center" valign="middle" height='50px'>Coffee Break<br />
        10:20-10:40</td>
    </tr>
    <tr>
      <td colspan="10" align="center" valign="middle">Plenary Session (Presider: Prof. Yasuhiko Arakawa, General Co-Chair)<br />
        10:40-12:00<br />
        Plenary Presentation 3 - 40 minutes (Prof. John Bowers)<br />
        Plenary Presentation 4 - 40 minutes (Prof. Philip Russell)</td>
    </tr>
    <tr  class='odd'>
      <td colspan="10" align="center" valign="middle" height='70px'>Lunch Break<br />
        12:00-13:30<br />
        Plenary Speaker Lunch<br />
        12:00-13:30</td>
    </tr>
    <tr>
      <td width="100"  rowspan="7" align="center" valign="middle">AW3A • Semiconductor Lasers<br />
        13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW31BA • Grating Couplers and Photonic Integrated Circuits<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW3C • New Fibers for Future Transmission<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle">AW3D • Optical Fiber    Sensing<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW3E • Digital Signal Processing I<br />
      13:30-15:00</td>
      <td width="100" rowspan="7" align="center" valign="middle"><br />
        AW3F • SDM Transmission I<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW3G • Free Space Communi-cations<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW3H • Software Defined Elastic Optical Networks Tutorial<br />
      13:30-15:00</td>
      <td width="100"  rowspan="7" align="center" valign="middle"><br />
        AW3I • Optical Sensors<br />
      13:30-15:00</td>
      <td width="100" rowspan="7" align="center" valign="middle"><br />
        AW3J • Material Growth &amp; Characterization<br />
      13:30-15:00</td>
    </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr  class='odd'>
      <td colspan="10" rowspan="2" align="center" valign="middle">Coffee Break around exhibition    area<br />
        15:00-15:30</td>
    </tr>
    <tr> </tr>
    <tr>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4A • Group III- Nitride Photonic Devices<br />
        15:30-17:00</td>
      <td width="100" rowspan="5" align="center" valign="middle">AW4B    •Energy Efficient Emitters for Interconnects<br />
      15:30-17:00</td>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4C    •Fibers and Devices for SDM<br />
      15:30-17:00</td>
      <td width="100" rowspan="5" align="center" valign="middle">AW4D    •Brillouin-Based Fiber Sensing<br />
      15:30-17:00</td>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4E    •Network Subsytems<br />
      15:30-17:00</td>
      <td width="100" rowspan="5" align="center" valign="middle">AW4F    •High Capacity Transmission Systems<br />
      15:30-17:00</td>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4G    •Data Center Networks<br />
      15:30-17:00</td>
      <td width="100" rowspan="5" align="center" valign="middle" w>AW4H    •OFDM Techniques<br />
      15:30-17:00</td>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4I    •Fiber Optical Sensors<br />
      15:30-17:00</td>
      <td width="100"  rowspan="5" align="center" valign="middle">AW4J    •Material Growth<br />
      15:30-17:00</td>
    </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr>
      <td colspan="10" rowspan="2" align="center" valign="middle" height='50'>　Conference reception, Dragon Boat, 17:30 – 20:30</td>
    </tr>
    <tr> </tr>
    <tr>
      <td colspan="10" align="center" valign="middle">　</td>
    </tr>
  </table>


  
  <p><b>Thursday, November 13</b></p>
 <table cellspacing="0" cellpadding="0">
    <col width="100" span="11" />
    <tr  height='60px'>
      <th width="80" align="center" valign="middle">Conference Room 1 for Track 1</th>
      <th width="80" align="center" valign="middle">Conference Room 2 for Track 1</th>
      <th width="80" align="center" valign="middle">Conference Room 3 for Track 2</th>
      <th width="80" align="center" valign="middle">Conference Room 4 for Track 2/5</th>
      <th width="80" align="center" valign="middle">Conference Room 5 for Track 3</th>
      <th align="center" valign="middle">Conference Room 6 for Track 3</th>
      <th width="103" align="center" valign="middle">Conference Room 7 for Track 4</th>
      <th width="80" align="center" valign="middle">Conference Room 8 for Track 4</th>
      <th width="80" align="center" valign="middle">Conference Room 9 for Track 5</th>
      <th width="80" align="center" valign="middle">Conference Room 10 for Track 6</th>
      <th width="80" align="center" valign="middle">Exhibition    Room </th>
    </tr>
    <tr class='odd'>
      <td colspan="11" align="center" valign="middle" height='40px'>Registration Open 8:00-17:00</td>
    </tr>
    <tr>
      <td width="80"  rowspan="7" align="center" valign="middle">ATh1A • Best Student Paper Award Competition
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle"><br />
        ATh1B • Plasmonics
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle"><br />
       ATh1C • Fibers for Transmission and OAM
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle">ATh1D • Optical Fluorescence Microscopy /Spectroscopy
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle"><br />
        ATh1E •Best Student Paper Award Competition
8:00-10:00</td>
      <td rowspan="7" align="center" valign="middle"><br />
        ATh1F • Analog Signal Processing and Transmission
8:00-10:00</td>
      <td width="103"  rowspan="7" align="center" valign="middle"><br />
        ATh1G •Software Defined Networks I
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle"><br />
        ATh1H •PON
8:00-10:00</td>
      <td width="80"  rowspan="7" align="center" valign="middle"><br />
        ATh1I •Best Student Award Competition
8:00-10:00</td>
      <td width="80" rowspan="7" align="center" valign="middle"><br />
       ATh1J •Best Student Paper Award Competition
8:00-10:00</td>
	  <td width="80" rowspan="40" align="center" valign="middle">Conference Exhibition</td>
    </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr class='odd'>
      <td colspan="10" align="center" valign="middle" height='50px'>Coffee Break<br />
        10:00-10:30</td>
    </tr>
    <tr>
      <td rowspan="8" width="80">ATh2A •Heterogenous Integration<br />
        10:30-12:00</td>
      <td rowspan="8" width="80">ATh2B •VCSELS<br />
        10:30-12:00</td>
      <td rowspan="8" width="80">ATh2C •Novel Fibers and Devices<br />
        10:30-12:00</td>
      <td rowspan="8" width="80"></td>
      <td rowspan="8" width="80">ATh2D •Digital Signal Processing II<br />
        10:30-12:00</td>
      <td rowspan="8"></td>
      <td rowspan="8" width="103">ATh2E •Radio Over Fiber I<br />
        10:30-12:00</td>
      <td rowspan="8" width="80">ATh2F •TWDM-PON<br />
        10:30-12:00</td>
      <td rowspan="8" width="80">ATh2G •Tissue Optical Imaging<br />
        10:30-12:00</td>
      <td rowspan="8" width="80">ATh2H •Novel LED<br />
        10:30-12:00</td>
      </tr>
         <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr> 
       <tr> </tr>
    <tr> </tr>
    <tr> </tr>
 
    <tr  class='odd'>
      <td colspan="10" align="center" valign="middle" height='50px'>Lunch Break<br />
        12:00-13:30<br /></td>
    </tr>
    <tr>
      <td colspan="10">ATh3A • Joint Poster Session<br />
        13:30-15:30</td>
      </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>

    <tr> </tr>
    <tr   class='odd'>
      <td rowspan="8" width="80">ATh4A • Photonic Integration<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">ATh4B •Optical Materials and Novel Devices<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">ATh4C •New Perspective of Fibers<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">Special Symposium<br />
        (16 slots)<br />
        13:30-18:00</td>
      <td rowspan="8" width="80">ATh4D •Advanced Modulation Formats<br />
        16:00-18:00</td>
      <td rowspan="8">ATh4E •Long-Haul Transmission<br />
        16:00-18:00</td>
      <td rowspan="8" width="103">ATh4F •Software Defined Networks II<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">ATh4G • Optical Transport Networks I<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">ATh4H • Optical Coherence Tomography<br />
        16:00-18:00</td>
      <td rowspan="8" width="80">ATh4I • Physics<br />
        16:00-18:00</td>
      </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>
    <tr> </tr>         
    <tr>
      <td colspan="10" rowspan="2" align="center" valign="middle">Conference banquet, Seagull Palace<br/>
       19:00 – 22:00</td>
    </tr>    

  </table>

  
  <p><b>Friday, November 14</b></p>  
 <table cellspacing="0" cellpadding="0">
   <col width="83" span="11" />
   <tr>
     <td width="83">Conference    Room 1 for Track 1</td>
     <td width="83">Conference Room 2    for Track 1</td>
     <td width="83">Conference Room 3    for Track 2</td>
     <td width="83">Conference Room 4    for Track 2/ Track5</td>
     <td width="83">Conference Room 5    for Track 3</td>
     <td width="83">Conference Room 6    for Track 3</td>
     <td width="83">Conference Room 7    for Track 4</td>
     <td width="83">Conferencre Room    8 for Track 4</td>
     <td width="83">Conferencre Room    9 for Track 5</td>
     <td width="83">Conference Room    10 for Track 6</td>
     <td width="83">Exhibition    Room </td>
   </tr>
   <tr class='odd'>
     <td height='40px' colspan="11">Registration Open 8:00-17:00</td>
   </tr>
   <tr>
     <td rowspan="9" width="83">AF1A • Modulators and Switching<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1B • Micro-resonators<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1C • Nano-Carbon-Based Mode-Locked Fiber Lasers<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1D • Optical Diagnosis and Therapy<br />
       <br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1E • Direct Detection &amp; Coherent Transmission<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1F • High Capacity &amp; SDM Transmission II<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1G • Software Defined Networks III<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1H • Optical Transport Networks II<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1I • Optical Fiber Sensors<br />
       8:00-10:00</td>
     <td rowspan="9" width="83">AF1J • Nanostructure<br />
       8:00-10:00</td>
     <td rowspan="32" width="83">Conference Exhibition</td>
   </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr  class='odd'>
     <td height='50px' colspan="10" rowspan="2" width="830">Coffee Break around exhibition    area<br />
       10:00-10:30</td>
   </tr>
   <tr> </tr>
   <tr>
     <td rowspan="8" width="83">Single Photons and    Metamaterials<br />
       10:30-12:00</td>
     <td rowspan="8" width="83">AF2B • Active Devices for Networks<br />
       10:30-12:00</td>
     <td rowspan="8" width="83">AF2C • Fiber Lasers<br />
       10:30-12:00</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF2D • Transmission Impairments<br />
       10:30-12:00</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF2E • Radio Over Fiber II<br />
       10:30-12:00</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF2F • Optical Trapping and Optical    Microscopy<br />
       10:30-12:00</td>
     <td rowspan="8" width="83">AF2G • Solar Cell &amp; Optics<br />
       10:30-12:00</td>
   </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr class='odd'>
     <td colspan="10" rowspan="2" width="830" height='50px'>Lunch Break<br />
       12:00-13:30</td>
   </tr>
   <tr> </tr>
   <tr>
     <td rowspan="8" width="83">AF3A • Microwave Photonics<br />
       13:30-15:30</td>
     <td rowspan="8" width="83">AF3B • Photonic Devices and Interconnects<br />
       13:30-15:30</td>
     <td rowspan="8" width="83">AF3C • Nonlinearity in Fibers<br />
       13:30-15:30</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF3D • OAM Transmission and Signal Processing<br />
       13:30-15:30</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF3E • Elastic Networking<br />
       13:30-15:30</td>
     <td rowspan="8" width="83"></td>
     <td rowspan="8" width="83">AF3F • Fiber Optical Sensors, Biosensors, and Other Optical    Sensors<br />
       13:30-15:30</td>
     <td rowspan="8" width="83"></td>
   </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr> </tr>
   <tr class='odd'>
     <td colspan="10" rowspan="2" width="830" height='50px'>Coffee Break around exhibition    area<br />
       15:30-16:00</td>
   </tr>
   <tr> </tr>
   <tr>
     <td colspan="10" width="830" height='50px'>Postdeadline Session <br />
       16:00-18:00</td>
   </tr>
 </table>   !-->
  
  	<a href='./images/Conference Program/schedule.png' target='blank'><img  style="width:1200px;height:auto;margin-left:-50px" src='./images/Conference Program/schedule.png'; /></a>
  	<a href='./images/Conference Program/agenda11.png' target='blank'><img  style="width:1200px;height:auto;margin-left:-50px" src='./images/Conference Program/agenda11.png'; /></a>
    <a href='./images/Conference Program/agenda12.png' target='blank'><img  style="width:1200px;height:auto;margin-left:-50px" src='./images/Conference Program/agenda12.png'; /></a>
    <a href='./images/Conference Program/agenda13.png' target='blank'><img  style="width:1200px;height:auto;margin-left:-50px" src='./images/Conference Program/agenda13.png'; /></a>
	<a href='./images/Conference Program/agenda14.png' target='blank'><img  style="width:1200px;height:auto;margin-left:-50px" src='./images/Conference Program/agenda14.png'; /></a>  

   

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