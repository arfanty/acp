<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Registration & Travel ::ACP 2014::</title>
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
.content ul#buttonUL
{
	margin-left:40px;
	margin-top:40px;
}
.content ul#buttonUL li
{
	margin-left:30px;
	list-style:none;
	float:left;
	width:290px;
	height:63px;
}
.content ul#list li
{
	margin-top:5px;
}
.content ul#list p
{
	margin-top:0px;
}
.content button {
	text-align:center;
	border:none;
	color:#FFF;
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	background:#FFC000;
	border-radius:10px;
	font-size:22px;
	width:280px;
	height:70px;
}

.content button:active{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	
	background:#FFB400;
}
.content button:focus{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	outline:none;
}
.content h1{
	margin-top:30px;
	clear:left;
}
.content table {
	border-collapse:collapse;
	margin-top:20px;
	margin-left:20px;
	border:none;
}
.content th {
	border:1.5px solid #06C;
	font-size:16px;
	font-family:Arial, Helvetica, sans-serif;
}
.content td {
	text-align:center;
	border:1.5px solid #06C;
	padding-left:6px;
	font-size:16px;
	font-family:Arial, Helvetica, sans-serif;
}
.content td.odd {
	background:rgba(255,192,0,0.3);
	/*Maybe has problem in IE 6~8*/
}
.content div.registercontent {
	margin-left:10px;
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
  <div class="content"> 
  	<!--ul id="buttonUL" style="display:none">
      <li><button><span>Register link for oversea attendees <br />海外参会者注册入口</span></button></li>
  	  <li><button>Register link for mainland Chinese attendees<br />中国大陆参会者注册入口</button></li>
    </ul-->
   
  <?php echo "<h1 id=\"$drpcttRegistrationFee->stringID\">$drpcttRegistrationFee->stringTitle</h1>" ?>
   <p class='subtitle'>Registration Fee</p>
   <div class='registercontent'>
    <table width="815" border="1">
      <tr>
        <th height="40" colspan="2">&nbsp;</th>
        <th width="241">Member</th>
        <th width="241">Non Member</th>
      </tr>
      <tr>
        <td width="107" rowspan="2">Regular Registration</td>
        <td class="odd" width="198" height="40">Early Bird<br />(On or Before 10/10/2014)</td>
        <td class="odd" >USD 450 (CNY 2800)</td>
        <td class="odd" >USD 500 (CNY 3100)</td>
      </tr>
      <tr>
        <td height="40">Normal<br />(After 10/10/2014)</td>
        <td>USD 550 (CNY 3400)</td>
        <td>USD 600 (CNY 3700)</td>
      </tr>
      <tr>
        <td rowspan="2">Student Registration</td>
        <td class="odd" height="40">Early Bird<br />(On or Before 10/10/2014)</td>
        <td class="odd" colspan="2">USD 250 (CNY 1600)</td>
      </tr>
      <tr>
        <td height="40">Normal<br />(After 10/10/2014)</td>
        <td colspan="2">USD 350 (CNY 2200)</td>
      </tr>
    </table>
    <p style="color:#06C"><b>Notes:</b></p>
    <p>Members are required to select which society listed below they belong to and to enter their membership ID.</p>
    <ul id="list">
    	<li><p>IEEE Photonics Society</p></li>
    	<li><p>The Optical Society of America(OSA)</p></li>
      	<li><p>The International Society for Optical Engineering(SPIE)</p></li>
       	<li><p>The China Optical Society(COS)</p></li>
    	<li><p>China Institute of Communications(CIC)</p></li>
    </ul> 
    <p>Regular/Sdudent Registration Fee includes:</p>
    <ul id="list">
    	<li><p>Access to the conference</p></li>
    	<li><p>Coffee break</p></li>
    	<li><p>Conference reception</p></li>
    	<li><p>Conference materials</p></li>    
    </ul>                    
	<p><b>Early Bird: On or Before Oct. 10, 2014; Normal: After Oct. 10, 2014</b></p>    
    <table width="815" border="1">
      <tr>
        <th height="40" width="275">Items</th>
        <th width="512">Fee per Person</th>
      </tr>
      <tr>
        <td class="odd" height="40">Banquet Ticket (Not included in the registration fee)</td>
        <td class="odd">USD 100  (CNY 600)</td>
      </tr>
      <tr>
        <td  height="40">Lunch Ticket (for each lunch)</td>
        <td >USD 15  (CNY 90)</td>
      </tr>
      <tr>
        <td class="odd" height="40">Extra Reception Ticket (Registration Fee includes a registration ticket)</td>
        <td class="odd" >USD 50  (CNY 300)</td>
      </tr>
      <tr>
        <td  height="55">Extra Conference Program and Technical Digest on CD-ROM</td>
        <td >USD 75  (CNY 450)</td>
      </tr>            
    </table>    
    <p style="color:#06C"><b>Notes:</b></p>
    <p>The Venue provides buffet for lunch on Nov. 12, 13 and 14. The fee of ticket is $15 for each lunch.</p>
	</div>
	<p id='registerEntrance' class='subtitle'>Register Entrance</p>
    <div class='registercontent'>
	<p><b>For the oversea attendees, please register online through OSA via the <a style='color:#F00' href='http://www.cvent.com/d/h4q30n/4W'>registration link</a></b></p>
    
    <p>中国大陆参会者不用经过OSA注册系统，请通过<a style='color:#F00' href='./Paymenttest.php'>注册链接</a>提交注册信息之后，将注册费银行汇款至以下账号：
    <p><b>账户名称：上海交通大学</b></p>
    <p><b>银行账号：439059226890</b></p>
    <p><b>开户银行：中国银行上海市交通大学支行</b></p>					
    <p><b>附言注明：<i>注册后自动生成</i></b></p>
    </div>
     <!--<?php echo "<h1 id=\"$drpcttPaymentMethods->stringID\">$drpcttPaymentMethods->stringTitle</h1>" ?>
    <p></p>
    <?php echo "<h1 id=\"$drpcttCancellationPolicy->stringID\">$drpcttCancellationPolicy->stringTitle</h1>" ?> 
	<p></p>
	<?php echo "<h1 id=\"$drpcttVenue->stringID\">$drpcttVenue->stringTitle</h1>" ?>
    <p></p>
    <?php echo "<h1 id=\"$drpcttHotel->stringID\">$drpcttHotel->stringTitle</h1>" ?> 
    <p></p>
    <?php echo "<h1 id=\"$drpcttSocialActivities->stringID\">$drpcttSocialActivities->stringTitle</h1>" ?> 
    <p></p>
    <?php echo "<h1 id=\"$drpcttVisa->stringID\">$drpcttVisa->stringTitle</h1>" ?>
    <p></p> !-->
    <!-- end .content -->
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