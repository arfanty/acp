<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index-origin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Asia Communications and Photonics Conference 2014</title>
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
		$("td").mouseover(function(){
			//this.getElementsByTagName("a")[0].style.color="#32509E";
			//if (timerHide){window.clearInterval(timerHide);}
			var index = jQuery.inArray(this,$("td"));
			//timerShow = window.setTimeout($("li.detailLI").eq(index).fadeIn("fast"),2000);
			$(this).stop(true,true).addClass("tdHover");
			$("li.detailLI").eq(index).stop(true).fadeIn(100);
		});
		$("td").mouseleave(function(){
			//this.getElementsByTagName("a")[0].style.color="#FFF";
				var index = jQuery.inArray(this,$("td"));
//				timerHide = window.setTimeout(($("li.detailLI").eq(index).fadeOut("fast")),2000);
				$("li.detailLI").eq(index).delay(60).fadeOut(100);
				$(this).delay(60).queue(function(){ $(this).removeClass("tdHover");});
		});
		$("li.detailLI").mouseover(function(){
					
				//if(timerHide) { window.clearInterval(timerHide);}
				var index = jQuery.inArray(this,$("li.detailLI"));
				$("td").eq(index).stop(true,true);
				$(this).stop(true,true);

		});
		$("li.detailLI").mouseleave(function(){
					
				//timerHide = window.setTimeout($(this).fadeOut("fast"),200);
				var index = jQuery.inArray(this,$("li.detailLI"));
				$("td").eq(index).delay(60).queue(function(){ $("td").eq(index).removeClass("tdHover");});
				$(this).delay(60).fadeOut(100);
		});
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
		});
		//$(window).resize(function(){
		//	$(".buttonUp").css("left",950+$(".container").offset().left-$(window).scrollLeft());
		//})
		$(".buttonUp").click(function(){
			$("html, body").animate({scrollTop:0},300);
		});
	});

</script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- InstanceBeginEditable name="CSSEditRegion" -->
<style type="text/css">
.content {
	padding: 10px 0;
	width: 660px;
	float: left;
}

.content tr#highlights{
	margin-left:-10px;
	margin-top:20px;
	text-align:center;

}
.content tr#highlights td{
	font-family:Arial, Helvetica, sans-serif;/*Century Gothic;*/
	font-size:17px;
	vertical-align:middle;
	width: 150px;
	margin-left:5px;
	list-style:none;
}	
.rightSiderbar
{
	float: left;
	margin-top:30px;
	width:165px;
}

.rightSiderbar button
{
	text-align:center;
	color:#FFF;
	font-size:22px;
	font-family:Arial, Helvetica, sans-serif;
	border:none;
	width:145px;
	padding-right:5px;
	margin-right:5px;
	height:62px;
	border-radius:5px;
	background:#FFC000;
	/*background:url(../ACP_2014/images/headerlisthighlightbackground.png);*/
	margin-top:20px;
}
.rightSiderbar button span {
      display: block;
	  padding:5px 1px 5px 6px;
	  line-height: 52px;
}
.rightSiderbar button:active{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	
	background:#FFB400;
}
.rightSiderbar button:focus{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	outline:none;
	
}
.rightSiderbar ul
{
	margin-top:10px;
}
.rightSiderbar li
{
	list-style:none;
	float:left;
}

.content ul#speeches li img
{
	width:100px;
	height:auto;
	float:left;
}

.content ul#speeches li
{
	height:80px;
	list-style:none;
	clear:left;
	margin-top:10px;
	margin-bottom:40px;
}
.content ul#speeches p
{
	margin-top:0px;
}
.content ul#speeches p#Name
{
	margin-top:10px;
	font-size:14px;
	font-weight:bold;
}
.content ul#speeches p#topic
{
	margin-top:10px;
	font-size:14px;
	font-weight:bold;
}
.content div#introduce
{
	margin-left:78px;
}
.content div#introduce p
{
	font-size:14px;
}
.content div#tracks
{
	margin-left:15px;
}

.content p.littletitle
{
	margin-top:0px;
	font-weight:bold;
}
.content p.highlighttext
{
	margin-top:0px;
	margin-left:10px;
}
.content div#workshop
{
	margin-left:15px;
}
.content ul#highlightlist
{
	padding-left:0px;
}
.content ul#highlightlist li
{
	margin-top:15px;
	list-style:none;
}
.content div#specialsymposium
{
	margin-left:15px;
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
  <div class="header"><a><img src="images/header.jpg" name="header_logo" width="1056" height="281" id="header_logo" /></a> 
    <!-- end .header --></div>
    
  <div class = "headerlist">

    <?php 
	require "headerList.php";
	echo "<table><tr>";//"<table><tr>";
	foreach ($HeaderList as $HeaderListElement)
	{
		echo "<td id=\"$HeaderListElement->stringId\"><a  href=\"$HeaderListElement->stringLink\">$HeaderListElement->stringTitle</a></td>";
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
	  	echo "<p>$drplstWelcome->stringTitle</p>";
  		echo "<ul class=\"nav\">";
		foreach($drplstWelcome->arrayContent as $welcomeContent)
		{
			echo"<li><a href=\"$welcomeContent->stringLink\">$welcomeContent->stringTitle</a></li>";
		}
    	echo "</ul>";
		
	?>
  <!-- InstanceEndEditable -->
 <!--   <div class="search">
  <a>Search onsite</a>
<form id="cse-search-box" action="http://google.com/cse">
  <input type="hidden" name="cx" value='001578320587051794967:-cvl9mdqrea'/>
  <input type="hidden" name="ie" value="UTF-8" />
  <input id='text' type="text" name="q"  />
  <input id='submit' type="submit" name="sa" value="Go" />
</form>
  </div> !-->
    <?php 
	  	echo $stringLeftSideBar_Announcement_Content;
		echo $stringLeftSideBar_ImportantDate_Content;
		?>
  <!-- end .sidebar1 --></div>
  <!-- InstanceBeginEditable name="ContentEditRegion" -->
  <div class="content"> 
  <?php 
  		echo "<h1 id=\"$drpcttWelcomeMessage->stringID\">$drpcttWelcomeMessage->stringTitle</h1>";
		echo $drpcttWelcomeMessage->stringContent;
		echo "<h1 id=\"$drpcttHighLights->stringID\">$drpcttHighLights->stringTitle</h1>";
	?>
  <!--  <p>We are honored to announce that in the plenary sessions, the leading scientists will give talks.</p>
    <table>
    <tr id="highlights">
    	<td><img  src="images/people/Alferov.Z.I.jpg" /></td>
        <td><img src="images/people/Xiang.L.jpg" /></td>
        <td><img  src="images/people/Gulyaev.Y.jpg" /></td>
        <td><img src="images/people/Kazuro.K.jpg" /></td>
    </tr>
    <tr id="highlights">
    	<td>Alferov ,Zhores I.</td>
    	<td>Xiang Liu</td>
    	<td>Gulyaev, Yuri V.</td>
    	<td>Kazuro Kikuchi</td>
    </tr>                        
    </table>
 !-->
 <p class='subtitle'>Plenary Speeches</p>
 	<ul id='speeches'>
    	<li><img src="images/people/WuHequan3_small.jpg" style="width:auto;height:110px"/>
	        <div id="introduce">
            	<p id="Name">Prof. Hequan Wu</p>
				<p>Chinese Academy of Engineering, China</p>
                <p id="topic">Topic:</p>
                <p>The Strategy and Technology of Broadband China</p>
                <p>Nov. 12 (Wednesday) 09:00-09:40</p>
            </div>
        </li>    
    	<li><img src="images/people/Prof_Masataka_Nakazawa-2_small.jpg" style="width:auto;height:110px"/>
	        <div id="introduce">
            	<p id="Name">Prof. Masataka Nakazawa</p>
				<p>Tohoku University, Japan</p>
                <p id="topic">Topic:</p>
                <p>Exabit Optical Communication Infrastructure Using 3M Scheme</p>
                <p>Nov. 12 (Wednesday) 09:40-10:20</p>
            </div>
        </li>        
    	<li><img src="images/people/Prof_John_Bowers_small.jpg" style="width:auto;height:110px"/> 
        	<div id="introduce">
            	<p id="Name">Prof. John Bowers</p>
				<p>University of California, Santa Barbara, USA</p>
                <p id="topic">Topic:</p>
                <p>The Future of Hybrid Silicon Photonic Integrated Circuits</p>
                <p>Nov. 12 (Wednesday) 10:40-11:20</p>
            </div>
        </li>
    	<li><img src="images/people/Prof_Philip Russell-2_small.jpg" style="width:auto;height:110px"/>
	        <div id="introduce">
            	<p id="Name">Prof. Philip Russell</p>
				<p>Max-Planck Institute for the Science of Light, Erlangen, Germany</p>
                <p id="topic">Topic:</p>
                <p>Frequency Conversion via Enhanced Light-matter Interactions in Fibre Microstructures</p>
                <p>Nov. 12 (Wednesday) 11:20-12:00</p>
            </div>
        </li>        

    </ul>
 <p class='subtitle'>Tracks</p>
 <div id='tracks'>
 <ul id='highlightlist'>
 <li><p class='littletitle'>Track 1:</p><p class='highlighttext'>Optoelectronic Materials, Devices, and Integration</p>
 <p class='littletitle'>Chair:</p><p class='highlighttext'>Prof. Dieter Bimberg, Technical University of Berlin, Germany</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Prof. Hon Tsang, The Chinese University of Hong Kong, China</p>
<p class='highlighttext'>Prof. Yidong Huang, Tsinghua University, China</p></li>

 <li><p class='littletitle'>Track 2:</p><p class='highlighttext'>Novel Fibers and Fiber-based Devices</p>
 <p class='littletitle'>Chair:</p><p class='highlighttext'>Prof. Shinji Yamashita, University of Tokyo, Japan</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Prof. Luc Thévenaz, EPFL Swiss Federal Institute of Technology, Switzerland</p>
<p class='highlighttext'>Prof. Limin Tong, Zhejiang University, China</p>
<p class='highlighttext'>Prof. Gang-Ding Peng, University of New South Wales, Australia</p></li>
 
<li><p class='littletitle'>Track 3:</p><p class='highlighttext'>Optical Transmission Systems, Subsystems, and Technologies</p>
<p class='littletitle'>Chair:</p><p class='highlighttext'>Prof. Lianshan Yan, Southwest Jiaotong University, China</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Dr. Ting Wang, NEC Lab, USA</p>
<p class='highlighttext'>Dr. Naoya Wada, NICT, Japan</p>
<p class='highlighttext'>Prof. Werner Rosenkranz, University of Kiel, Germany</p>
<p class='highlighttext'>Prof. Jaouen Yves, Telecom ParisTech, France</p></li>
 
<li><p class='littletitle'>Track 4:</p><p class='highlighttext'>Network Architectures, Management, and Applications</p>
<p class='littletitle'>Chair:</p><p class='highlighttext'>Dr. Frank Effenberger, Huawei Technologies, USA</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Dr. Tiejun Xia, Verizon, USA</p>
<p class='highlighttext'>Prof. Jie Zhang, Beijing University Posts and Telecommunications, China</p>
<p class='highlighttext'>Prof. Weisheng Hu, Shanghai Jiao Tong University, China</p></li>
 
<li><p class='littletitle'>Track 5:</p><p class='highlighttext'>Biophotonics and Optical Sensors</p>
<p class='littletitle'>Chair:</p><p class='highlighttext'>Prof. Pengcheng Li, Huazhong University of Science and Technology, China</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Prof. Valery V Tuchin, Saratov State University, Russia</p>
<p class='highlighttext'>Prof. BaiOu Guan, Jinan University, China</p>
<p class='highlighttext'>Prof. Fu-Jen Kao, National Yang-Ming University, Taiwan, China</p></li>
 
<li><p class='littletitle'>Track 6:</p><p class='highlighttext'>Displays, Solid-State Lighting, Photovoltaics, and Energy-Efficient Photonics</p>
<p class='littletitle'>Chair:</p><p class='highlighttext'>Prof. Yi Luo, Tsinghua University, China</p>
 <p class='littletitle'>Co-Chair:</p><p class='highlighttext'>Prof. Nelson Tansu, Lehigh University, USA</p>
<p class='highlighttext'>Prof. Hao-Chung Kuo, National Chiao-Tung University, Taiwan,China</p></li>
</ul>
</div> 

 <p class='subtitle'>Workshop</p>
    <div id='workshop'>
    <ul id='highlightlist'>
        <li><p class='littletitle'>Workshop 1:</p>
        <p class="highlighttext">Microwave Photonics: Devices, Applications and Prospects</p>
        <p class='littletitle'>Organizers:</p>
        <p class="highlighttext">Prof. Xiaoping Zheng, Tsinghua University, China</p>
        <p class="highlighttext">Prof. Zheng Zheng Beihang, University, China</p></li>
        
        <li><p class='littletitle'>Workshop 2:</p>
        <p class="highlighttext">Communications using Orbital Angular Momentum of Electromagnetics Waves</p>
        <p class="littletitle">Organizers:</p>
        <p class="highlighttext">Prof. Siyuan Yu Sun, Yat-sen University, China; University of Bristol, UK</p>
        <p class="highlighttext">Prof. Jian Wang, Huazhong University of Science and Technology, China</p></li>
        
        <li><p class='littletitle'>Workshop 3:</p>
        <p class="highlighttext">High Capacity Optical Transmission: What Else Is Needed For Coherent Transmission? Is SDM life After Coherent?</p>
        <p class="littletitle">Organizer:</p>
        <p class="highlighttext">Prof. Guifang Li, University of Central Florida, USA; Tianjin University, China</p></li>

        <li><p class='littletitle'>Workshop 4:</p>
        <p class="highlighttext">3D Displays</p>
        <p class="littletitle">Organizers:</p>
        <p class="highlighttext">Prof. Yongtian Wang, Beijing Institute of Technology, China</p>
		<p class="highlighttext">Prof. Yikai Su, Shanghai Jiao Tong University, China</p></li>
        
        <li><p class='littletitle'>Workshop 5:</p>
        <p class="highlighttext">Silicon Photonics</p>
        <p class="littletitle">Organizers:</p>
        <p class="highlighttext">Prof. Lin Yang, Institute of Semiconductors, Chinese Academy of Sciences, China</p>
		<p class="highlighttext">Prof. Zhiping Zhou, Peking University, China</p></li>
        
        <li><p class='littletitle'>Workshop 6:</p>
        <p class="highlighttext">Hybrid Nanoplasmonics: Photons Meet Electrons in The Nano-world to Push Optical Communication beyond Terabit Horizon</p>
        <p class="littletitle">Organizer:</p>
        <p class="highlighttext">Prof. Sergei Popov KTH Royal Institute of Technology, Sweden</p></li>
        
        <li><p class='littletitle'>Workshop 7:</p>
        <p class="highlighttext">Optical Datacentre Networks</p>
        <p class="littletitle">Organizer:</p>
        <p class="highlighttext">Prof. Jiajia Chen KTH Royal Institute of Technology, Sweden</p></li>
        
        <li><p class='littletitle'>Workshop 8:</p>
        <p class="highlighttext">Optical interconnection - from devices to systems applications</p>
        <p class="littletitle">Organizers:</p>
        <p class="highlighttext">Prof. Tao Chu CAS Institute of Semiconductors, China</p>
		<p class="highlighttext">Dr. Takashi Mikawa Advanced Photonics, Inc., Japan</p>
		<p class="highlighttext">Prof. Osamu Wada Kobe University, Japan/JSPS Beijing Office, China</p></li>
    </ul>
  </div>
 <p class='subtitle'>Special Symposium</p>
   <div id='specialsymposium'>
	<p><b>Advances and Trends in Fiber Optics and Applications</b></p>
	<p><b>Organizer:</b></p>
        <p class="highlighttext">Prof. Yunjiang Rao, University of Electronic Science and Technology, China</p>
    <p><b>Co-Organizers:</b></p>    
    	<p class="highlighttext">Prof. Sergei Turitsyn Aston University, UK</p>
		<p class="highlighttext">Dr. Zinan Wang, University of Electronic Science and Technology, China</p>
  
  </div>
 <p class='subtitle'>Best Student Paper Awards and Activity</p>
    <div id='specialsymposium'>
	<p><b>IEEE Photonics Society Best Student Paper Awards</b></p>
	<p><b>OSA Student Lunch</b></p>
  </div>
    <?php 
		echo "<h1 style=\"clear:left\" id=\"$drpcttNews->stringID\">$drpcttNews->stringTitle</h1>";
		echo $drpcttNews->stringContent;
		echo "<h1 id=\"$drpcttTimeNodes->stringID\">$drpcttTimeNodes->stringTitle</h1>";
		echo $drpcttTimeNodes->stringContent;
	?>
    <!-- end .content -->
  </div>
  <div class="rightSiderbar">
   <button onclick="window.location.href = 'Register.php#registerEntrance' "><span>Register Now</span></button>
    <!-- button onclick="window.location.href = 'Register.php' "><span>Register Now</span></button>!-->
    <br />
    <br />

    <a>Organized by:</a>
      <br />
      <a target="blank" href="http://www.sjtu.edu.cn"><img src="images/organizor/organizor1.png" style="width: 110%; height: 110%"/></a> <br />
        <a target="blank" href="http://www.wri.com.cn"><img src="images/organizor/organizor2.png" style="width: 110%; height: 110%"/></a> 
        <a target="blank" href="http://www.chinafiberoptic.com/"><img src="images/organizor/china fiber.jpg" style="width: 110%; height: 110%" /></a>
        <br /><br />  
        
    <a>Co-Organized by:</a>
      <br />
      <a target="blank" href="http://www.pku.edu.cn"><img src="images/organizor/organizor3.png" style="width: 110%; height: 110%"/></a> <br />
        <a target="blank" href="http://www.shu.edu.cn"><img src="images/organizor/organizor4.png" style="width: 110%; height: 110%"/></a> 
        <br /><br />   
     <a>Technical Sponsors:</a>
     <br />
      <ul>
      <li><img src="images/foot/foot1.jpg" style="width:150px; height:auto" href="#"/></li>
      <li><img src="images/foot/foot2.jpg" style="width:150px; height:auto" href="#"/></li>
      <li><img src="images/foot/foot3.jpg" style="width:150px; height:auto" href="#"/></li>
      <li><img src="images/foot/foot4.jpg" style="width:150px; height:auto" href="#"/></li>
      <li><img src="images/foot/foot5.jpg" style="width:150px; height:auto" href="#"/></li>
      <li><img src="images/foot/foot6.gif" style="width:150px; height:auto" href="#"/></li>
    </ul>
	<!-- <a>Social Network:</a>
        <br /> 
     <ul>
     	<li><a  alt="Under construction.." target="blank" href="#"><img src="images/social network/weibo.png" style="width: 30px; height: 30px"/></a></li>
	 	<li><a target="blank" href="wechat.php"><img src="images/social network/weixin.png" style="width: 30px; height: 30px"/></a></li>
     </ul>!-->
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