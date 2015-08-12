<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Organization ::ACP 2014::</title>
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
.content p {
	font-size:15px;
}
.content p#subtitle{
	clear:left;
	color:#FFC000;
	font-size:17px;
	font-weight:bold;
	margin-top:15px;
}
.content  p#Name
{
	font-size:16px;
	font-weight:bold;
}
.content div#SCChair img {
	padding: 0 15px 15px 40px; 	
	float:left;
	width:130px;
	height:auto;
}
.content ul#PeopleList{
	margin-top:10px;	
}
.content ul#PeopleList li{
	height:170px;
	margin-bottom:20px;
	float:left;
	list-style:none;
}
.content ul#PeopleList img {
	float:left;
	width:130px;
	height:auto;
}
.content ul#PeopleList div#intro {
	float:left;
	width:250px;
	height:auto;
}
.content ul#PeopleList div#intro p{
	line-width:20px;
}
.content ul#Member{
	margin-left:-30px;
}
.content ul#Member li{
	list-style:none;
	clear:left;
}
.content ul#Member p#Name{
	font-size:14px;
	font-weight:normal;
}
.content ul#Member img{
	display:none;
}
.content div#trackdiv p#tracktitle{
	color:#06C;
	font-size:17px;
	font-weight:bold;
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
	  	echo "<p>$drplstOrganization->stringTitle</p>";
  		echo "<ul class=\"nav\">";
		foreach($drplstOrganization->arrayContent as $organizationContent)
		{
			echo"<li><a href=\"$organizationContent->stringLink\">$organizationContent->stringTitle</a></li>";
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
  <div class="content"> <?php
  	$count=0;
  	foreach ($drplstOrganization->arrayContent as $organizationContent)
	{
		echo "<h1 id='$organizationContent->stringID' >$organizationContent->stringTitle</h1> $organizationContent->stringContent";
		$count=$count+1;
		if($count>3)
			break;
	}
	?>
     
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