<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Payment ::ACP 2014::</title>
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
	margin-top:10px;
}
.content ul#buttonUL li
{
	margin-left:30px;
	list-style:none;
	float:left;
	width:290px;
	height:63px;
}

.content ul#buttonUL button {
	text-align:center;
	border:1px #FFDDCC;;
	color:#FFF;
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	background:#FFC000;
	border-radius:10px;
	font-size:22px;
	width:280px;
	height:70px;
}

.content ul#buttonUL button:active{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	
	background:#FFB400;
}
.content ul#buttonUL button:focus{
	/*background:url(images/button/submitbackground.png) no-repeat;*/
	outline:none;
}
.content div.register
{
	position:relative;
	height:auto;
}
.content div#foreignRegister
{
	clear:left;
}
.content div#domesticRegister
{

	clear:left;
}

.content div.section{
	overflow:auto;
	margin-left:0px;

}
.content input 
{
	font-weight:bold;
}
.content div.forminput {
	float:left;
	margin-top:16px;

}
.content label.information{
	font-size:15px;
	width:160px;
	display:inline-block;
	text-align:right;
}
.content label.publication{
	font-size:15px;
}
.content div.forminput input{
	width:160px;
	font-size:15px;
	border:1px solid #bbbbbb;
	margin-left:10px;
}
.content div#needinvoice input{
	width:33px;
} 
.content table.registerfee {
	margin-left:100px;
}
.content table.registerfee input{
	font-weight:bold;
	/*height:10px;*/
}


.content table.registerfee td{
	text-align:center;
	font-size:15px;
	font-family:Arial, Helvetica, sans-serif;
}
.content table.registerfee label{
	font-weight:bold;
}
.content div.additional {
	margin-top:15px;
	margin-left:30px;
	font-size:15px;
}
.content div.additional input {
	width:30px;
}
.content div.checkbutton {
	text-align:center;
}
.content button.checkbutton {
	margin-top:10px;
	border-radius:5px;
	font-size:20px;
	color:#FFF;
	border:none;
	width:200px;
	height:50px;
	background:#FFC000;
}
.content button.checkbutton:hover{
	background:#FFBC00;
}
.content button.checkbutton:active{
	
	background:#FFB400;
}
.content button.checkbutton:focus{
	outline:none;
}

.content div.submit {
	text-align:center;
}
.content input#submit {
	margin-top:10px;
	border-radius:5px;
	font-size:20px;
	color:#FFF;
	border:none;
	width:200px;
	height:50px;
	background:#FFC000;
}
.content input#submit:hover{
	background:#FFBC00;
}
.content input#submit:active{
	
	background:#FFB400;
}

.content input#submit:focus{
	outline:none;
}
.content div.check ul{
	list-style:none;
	padding-left:0px;
	margin-left:30px;
}
.content div.check ul p{
	font-size:16px;
	color:#000;
}
.content div.check p
{
	font-size:20px;
	color:#06C;
}
.content div.remit
{
	margin-left:10px;
}
.content div.payment{
	text-align:right;
}
.content div.payment p{
	color:#F60;
	font-size:16px;
}
.errorMessage
{
	display:none;
	font-size:14px;
	font-weight:bold;
	color:#F00;
}
</style>
<?php

	echo "
	<script>
		$(document).ready(function(e) {";
	if (isset($_POST['issubmitted']))
	{
		echo "
			$('div#foreignRegister').hide();
		";
	}
	else 
	{
		echo"			
			//$('div#domesticRegister').hide();
			//$('div#foreignRegister').hide();";
	}
		echo "
			/*$('button').eq(1).click(function(e){
				if($('div#foreignRegister').is(':visible')==true)
					{
						$('div#foreignRegister').fadeOut(500,function(){
							$('div#domesticRegister').fadeIn(500);
							});
					}
				else
					$('div#domesticRegister').fadeIn(500);
			});
			
			$('button').eq(0).click(function(e){
				if($('div#domesticRegister').is(':visible')==true)
					{
						$('div#domesticRegister').fadeOut(500,function(){
							$('div#foreignRegister').fadeIn(500);
							});
					}
				else
					$('div#foreignRegister').fadeIn(500);
			});*/
			$('div.check').hide();
			$('div.submit').hide();			
	
		});
	</script>
	";
?>
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
		foreach($drplstRegistrationTravel->arrayContent as $RegistrationContent)
		{
			echo"<li><a href=\"$RegistrationContent->stringLink\">$RegistrationContent->stringTitle</a></li>";
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
  echo "<h1>$drpcttPaymentMethods->stringTitle</h1> 
<div class='wholeRegister'>  
  	<!--ul id='buttonUL'>
      <li><button><span>Register link for oversea attendees<br /> 海外参会者入口</span></button></li>
  	  <li><button>Register link for mainland Chinese attendees<br /> 中国大陆参会者入口</button></li>
    </ul--> 
<div class='register' >
 <div id='foreignRegister'>
 	<p class='emphasize'>The Oversea Attendees (海外参会者)</p>
 	<p> Please click the following link to complete the registration. Please note that a paper will not be published without the registration of at least one of its authors. If the first author of the paper is non-student, please make Regular Registration.</p>
	<p><a href='http://www.cvent.com/d/h4q30n/4W'><b><font color=#FF0000>Register Now</font></b></a></p>
	<p>Attention: For the member of a cosponsor organization, the registration type available will remain \"non-member\". However, on the payment page, the applicable discount will appear and you will receive the member pricing. The payment page will be the last page in the registration process.</p>
 </div>
 <div id='domesticRegister'> 
 	<p class='emphasize'>The Mainland Chinese Attendees (中国大陆参会者)</p>
<p> 中国大陆参会者不用经过OSA系统注册，请首先在线提交注册信息，然后将注册费银行汇款至会议账号。每篇录用的论文需至少交一次注册费。如第一作者非学生，请进行普通注册。</p>
<p>若需要邀请信，请在线填写<a href='LetterOfInvitationTest.php'><b>邀请信链接</b></a>，以便给您发送邀请信。注册费发票在会场报到时领取。</p>
<p style='color:red'>在线提交注册的截止日期为2014年10月31日（银行汇款的截止时间是11月3日）。超过此期限请在会议现场进行注册和缴费（可以刷银行卡缴费）。</p>
<p style='color:red'> 上海交通大学的参会者请用校内转账方式缴费，切勿通过银行汇款</p>
  <p><b>如果注册时遇到任何问题，请联系 <a href='mailto:registration@acp-conf.org'>registration@acp-conf.org</a></b>	
  
	<p class='subtitle'>在线注册已关闭，请在会议现场进行注册</p>
 <!-- form action='Paymenttest.php' method='post'>
 <div class='section'>
 <p class='subtitle'> Section 1. 基本信息 </p>
	<div class='forminput'>
		<label class='information'>姓:*</label>
		<input name='FamilyName' type='text' maxlength='3'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[FamilyName]' ";
		}
		echo " /><span class='errorMessage'>  Family Name is required.</span>
	</div>
	
	<div class='forminput'>
		<label class='information'>名:*</label>
		<input name='FirstName' type='text' maxlength='4'";
		if (isset($_POST['issubmitted'])) 
		{
			echo " value='$_POST[FirstName]' ";
		}
		echo "/><span class='errorMessage'>  First Name is required.</span>
	</div>
	

	<div class='forminput'>
		<label class='information'>称谓:*</label>
		<input name='Title' type='text' maxlength='6'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Title]' ";
		}
		echo " /><span class='errorMessage'>  Title is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>就职机构:*</label>
		<input name='Affiliation' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Affiliation]' ";
		}
		echo "' /><span class='errorMessage'>  Affiliation is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>邮寄地址:*</label>
		<input name='Address' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Address]' ";
		}
		echo " /><span class='errorMessage'>   Mailing Address is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>城市:*</label>
		<input name='City' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[City]' ";
		}
		echo " /><span class='errorMessage'>  City is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>省:*</label>
		<input name='Province' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Province]' ";
		}
		echo " /><span class='errorMessage'>  State/Province is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>邮政编码:*</label>
		<input name='ZIP' type='text' onKeyUp='LimitToNumber(this)' style='ime-mode:disabled;' onKeyUp='this.value=this.value.replace(/\D/g,\'\')' ";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[ZIP]' ";
		}
		echo " /><span class='errorMessage'>  ZIP/Postal Code is required.</span>
	</div>
	<!-- div class='forminput'>
		<label class='information'>Country:*</label>
		<input name='Country' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Country]' ";
		}
		echo " /><span class='errorMessage'>  Country is required.</span>
	</div -->
	<!-- div class='forminput' id='email'>
		<label class='information'>邮箱:*</label>
		<input name='Email' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Email]' ";
		}
		echo " /><span class='errorMessage'>  Email is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>电话:*</label>
		<input name='Telephone' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Telephone]' ";
		}
		echo " /><span class='errorMessage'>  Telephone is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>分机:</label>
		<input name='Ext' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Ext]' ";
		}
		echo " /><span class='errorMessage'>  Ext is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>传真:</label>
		<input name='Fax' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[Fax]' ";
		}
		echo " /><span class='errorMessage'>  Fax is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>录用文章标题:</label>
		<input name='PaperTitle' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[PaperTitle]' ";
		}
		echo " /><span class='errorMessage'>  Paper title is required.</span>
	</div>
	<div class='forminput'>
		<label class='information'>录用文章编号:</label>
		<input name='PaperCode' type='text' onKeyUp='LimitToNumber(this)'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[PaperCode]' ";
		}
		echo " /><span class='errorMessage'>  Paper code is required.</span>
	</div>
	<div class='forminput' id='needinvoice'>
		<label class='information' onKeyUp='LimitToNumber(this)'>是否需要发票:</label>
		<input name='NeedInvoice' type='radio' id='NeedInvoice-yes' checked='checked' value='1'/><label for='NeedInvoice-yes'>需要</label>
		<input name='NeedInvoice' type='radio' id='NeedInvoice-no' value='0'/><label for='NeedInvoice-no'>不需要</label>
		<span class='errorMessage'>  Paper code is required.</span>
	</div>
	<div class='forminput' id='invoicetitle'>
		<label class='information'>发票抬头*:</label>
		<input name='InvoiceTitle' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[InvoiceTitle]' ";
		}
		echo " /><span class='errorMessage'>  Paper code is required.</span>
	</div>	
  </div>
  <div class='section'>
  <p class='subtitle' style='clear:left;'> Section 2.  注册类别 </p> 
	<table border='0' class='registerfee'>
	  <tr>
		<th width='250' height='40' scope='col'></th>
		<th width='300' scope='col'>注册费</th>
	  </tr>
	  <tr>
		<td height='40'>普通注册/会员<br/>(OSA/IEEE/SPIE/COS/CIC)</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-1' checked='true' /><label for='RegisterFee-1'> 3400元</label></td>
	  </tr>
	  <tr>
		<td height='40'>普通注册/非会员</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-3' /><label for='RegisterFee-3'> 3700元</label></td>
	  </tr>
	  <tr>
		<td height='40'>学生注册</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-5' /><label for='RegisterFee-5'> 2200元</label></td>
	  </tr>
	</table>
	<div class='payment'>
		<p>注册费用: <b>3400</b>元</p>
	</div>
  </div>
  <div class='section'>
  <p class='subtitle'> Section 3.  附加项</p>	

	<div class='additional'>	
		<label class='banquet'><b>宴会券(用于11月13日在海鸥坊的晚宴，内有最佳学生奖颁奖典礼等活动，不包含在注册费中):</b></label>
		<input type='text' name='banquet' maxlength='1' onKeyUp='LimitToNumber(this)' id='banquet' /> <label for='banquet'>× 600元 </label>
	</div>		
	<div class='additional'>		
		<label class='lunch'><b>午餐券（用于11月12到14日场馆提供的自助餐，不包含在注册费中）:</b></label>
		<input type='checkbox' name='lunch[]' id='lunch-0' value=0 /><label for='lunch-0'>11月12日</label>
		<input type='checkbox' name='lunch[]' id='lunch-1' value=1 /><label for='lunch-1'>11月13日</label>
		<input type='checkbox' name='lunch[]' id='lunch-2' value=2 /><label for='lunch-2'>11月14日</label>
						
	</div>
  	<div class='additional'>
  		<label class='reception'><b>额外的招待会入场券:</b></label> 
		<input type='text' name='reception' maxlength='1' onKeyUp='LimitToNumber(this)' id='reception' />  <label for='reception'>× 300元 </label>
		<!--input type='checkbox' name='paidregistrant'  id='paidregistrant'/><label for='paidregistrant'>Paid Registrant – No Charge</label -->
	<!-- /div>			
	<div class='additional'>
  		<label class='publication'><b>额外的会议手册和U盘资料数:</b></label>
		<input type='text' name='publicationnumber' id='publicationnumber' style='ime-mode:disabled' maxlength='1' onKeyUp='LimitToNumber(this)' /> <label for='publicationnumber'>× 450元</label>
	</div>
	<p>（注：附加项的费用是包含在会议注册费发票中的，不另外开发票）</p>
	<div class='payment'>
		<p>附加项费用: <b>0</b>元</p>
	</div>
  </div>  
  <div class='payment'>
	<p>总费用: <b>3400</b>元</p>
  </div> 
  <div class='section'>
  <p class='subtitle'> Section 4.  备注说明</p>	
    <p>对于作者不能参会、需要由他人代讲的论文，建议仍然以原作者的名义注册，但是要在“备注”一栏中注明代讲人的名字、称谓和单位，以便正确印制参会证。每一份注册费最多能覆盖一名参会者和一篇论文。</p>
	<textarea id='comment' name='comment' onfocus='CommentFocus()' onblur='CommentBlur()' maxlength='200' style='width:800px;margin-left:20px;margin-top:10px;height:90px;overflow-y:hidden;color:#CCC;font-size:14px;font-weight:bold'>备注（限200字以内）</textarea>
  </div>

  <div class='checkbutton'>
  	<button class='checkbutton' onclick='return FormValidate(this.form)'>提交注册</button -->
  </div>
 </div> 
</div> 
</div>
  <!-- div class='check'>
  	<p><b>您所填写的信息如下：</b></p>
	<ul>
		<li><p>姓名：<a></a></p></li>
		<li><p>称谓：<a></a></p></li>
		<li><p>就职单位：<a></a></p></li>
		<li><p>地址：<a></a></p></li>
		<li><p>城市：<a></a></p></li>
		<li><p>省份：<a></a></p></li>
		<li><p>邮政编码：<a></a></p></li>
		<li><p>E-mail：<a></a></p></li>
		<li><p>电话：<a></a></p></li>
		<li><p>分机：<a></a></p></li>
		<li><p>传真：<a></a></p></li>
		<li><p>录用文章标题：<a></a></p></li>
		<li><p>录用文章编号：<a></a></p></li>
		<li><p>是否需要发票：<a></a></p></li>
		<li id='invoicetitle'><p>发票抬头：<a></a></p></li>
		<li><p>宴会券：<a></a></p></li>	
		<li><p>午餐券：<a></a></p></li>		
		<li><p>额外接待券：<a></a></p></li>
		<li><p>额外光盘数：<a></a></p></li>
		<li><p>总金额：<a></a></p></li>
		<li><p>备注：<a></a></p></li>
    </ul>								
	</p>
  </div>
    <input name='issubmitted' value='' type='text' style='display:none' />
	<input name='totalpayment' id='totalpayment' value='0' type='text' style='display:none' />
  <div class='submit'>
  	<input id= 'submit' type='submit' value='确认提交'/>
	<button class='checkbutton' onclick='return TurnBack()'>返回修改</button>
  </div>

  <script>
    var section2payment = 3400;
	var section3payment = 0;
    var section4payment = 0;
	var totalpayment = 3400;
	var needInvoice = true;
	var lunchNumber = 0;
	function FormValidate(form)
  	{
		var index;
		var rev=true;
		$('.forminput').each(function(index,element)
		{
		  if($('label.information',this).text().indexOf('*')>0)
		  {
			  if($('input',this).val() == '')
			  {
				  $('label',this).css('color','#FF0000');
				  $('label',this).css('font-weight','bold');
				  rev = false;
			  }
			  else
			  {
				  $('label',this).css('color','#000000');
				  $('label',this).css('font-weight','normal');
			  }
		  }
		});
		if( rev == true)
		{
			email_field = $('.forminput#email>:input').val();
			apos=email_field.indexOf('@');
			dotpos=email_field.lastIndexOf('.');
			if (apos<1||dotpos-apos<2) 
			{
				  $('.forminput#email>label').css('color','#FF0000');
				  $('.forminput#email>label').css('font-weight','bold');
				  rev = false;
			}
		}
		if (rev == false)
		{
			$('html, body').animate({scrollTop:0},300);
		}
		if (rev==true) 
		{
			$('div.wholeRegister').hide();
			$('div.check').show();
			$('div.submit').show();			
			var inputValue = '';
			
			$('div.check a').each(function(index,element) {
				if (index == 0)
				{
					inputValue = $('div.forminput > :input').eq(0).val() + ' ' + $('div.forminput > :input').eq(1).val();
					$(this).text(inputValue);
				}
				else if (index < $('div.forminput > :input').length-4)
				{
			    	inputValue = $('div.forminput > :input').eq(index+1).val();
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length-4)
				{
					if(needInvoice)
				    	inputValue = '需要';
					else
				    	inputValue = '不需要';						
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length-3)
				{
					if(needInvoice)
				    	inputValue = $('div.forminput > :input').eq(index+2).val();
					else
				    	inputValue = '';						
					$(this).text(inputValue);
				}				
				else if (index == $('div.forminput > :input').length-2)
				{
					inputValue = $('input#banquet').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#banquet').val(0);
					}
					$(this).text(inputValue);					
				}
				else if (index == $('div.forminput > :input').length -1)
				{
					inputValue = '';
					lunchNumber = 0;
					$('input[name=\'lunch[]\']:checked').each(function(index,element){
						if($(this).attr('id') == 'lunch-0') 
						{
							inputValue  = inputValue + '12日';
							lunchNumber = lunchNumber + 1;
						}
						if($(this).attr('id') == 'lunch-1') 
						{
							if(lunchNumber != 0)
								inputValue = inputValue + '、';
							inputValue  = inputValue + '13日 ';
							lunchNumber = lunchNumber + 1;
						}
						if($(this).attr('id') == 'lunch-2') 
						{
							if(lunchNumber != 0)
								inputValue = inputValue + '、';	
							inputValue  = inputValue + '14日 ';
							lunchNumber = lunchNumber + 1;
						}
					});
					if(lunchNumber != 0 )
						inputValue = inputValue + '。共' + lunchNumber + '天'; 	
					else
						inputValue = '0张';				 
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length)
				{
					inputValue = $('input#reception').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#reception').val(0);
					}
					$(this).text(inputValue);
				}

				else if (index == $('div.forminput > :input').length + 1)
				{
					inputValue = $('input#publicationnumber').val();
					if (inputValue == '') 
					{
						inputValue = 0;
						$('input#publicationnumber').val(0);
					}					
					$(this).text(inputValue);
				}				
				else if (index == $('div.forminput > :input').length + 2)
				{
					inputValue = totalpayment;
					$(this).text(inputValue);
				}
				else if (index == $('div.forminput > :input').length + 3)
				{
					inputValue = $('textarea#comment').val();
					$(this).text(inputValue);
				}
			});
			$('input#totalpayment').val(totalpayment);
		}
		return false;
  	}
	function ToggleInvoiceTitle()
	{
		var needInvoiceSelectedId = $('input[name=NeedInvoice]:checked')[0].id;
		if(needInvoiceSelectedId == 'NeedInvoice-yes')
		{
			$('div#invoicetitle').show();
			$('div#invoicetitle > label.information').text('发票抬头*:');
			needInvoice = true;								
		}
		else if(needInvoiceSelectedId == 'NeedInvoice-no')
		{
			$('div#invoicetitle').hide();
			$('div#invoicetitle > label.information').text('发票抬头:');	
			needInvoice = false;					
		}		

	}
	function CommentFocus()
	{
		if($('textarea#comment').val()== '备注（限200字以内）' )
		{
			$('textarea#comment').val('');
			$('textarea#comment').css('color','#000');
		}
	}
	function CommentBlur()
	{
		if($('textarea#comment').val()== '' )
		{
			$('textarea#comment').val('备注（限200字以内）');
			$('textarea#comment').css('color','#CCC');
		}
	}
	function TurnBack()
	{
		$('div.wholeRegister').show();
		$('div.check').hide();
		$('div.submit').hide();	
		return false;
	}
    function LimitToNumber(t)
	{
		//if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;
		t.value = t.value.replace(/[^0-9]/g,'');
	}
	function LimitToNumberA(num, event)
	{
		if (event.keyCode < 48 || event.keyCode > num+48) event.returnValue = false;
	}
	function ChangeSection2Payment()
	{
		var registerfee = 0;
		var registerSelectedId = $('input[name=RegisterFee]:checked')[0].id;
		if(registerSelectedId == 'RegisterFee-0' )
			registerfee = 2800;
		else if(registerSelectedId == 'RegisterFee-1' )
			registerfee = 3400;	
		else if(registerSelectedId == 'RegisterFee-2' )
			registerfee = 3100;			
		else if(registerSelectedId == 'RegisterFee-3' )
			registerfee = 3700;	
		else if(registerSelectedId == 'RegisterFee-4' )
			registerfee = 1600;	
		else if(registerSelectedId == 'RegisterFee-5' )
			registerfee = 2200;
		section2payment = registerfee;
		$('.payment b')[0].textContent = section2payment;
		totalpayment = section2payment + section3payment + section4payment;
		$('.payment b')[2].textContent = totalpayment;
										
	}
	function ChangeSection3Payment()
	{
		var lunchPay = 0;
		$('input[name=\'lunch[]\']:checked').each(function(index,element){
			if($(this).attr('id') == 'lunch-0') 
			{
				lunchPay = lunchPay + 90;
			}
			if($(this).attr('id') == 'lunch-1') 
			{
				lunchPay = lunchPay + 90;
			}
			if($(this).attr('id') == 'lunch-2') 
			{
				lunchPay = lunchPay + 90;
			}
		});

			
		var reception = 0;
		var receptionString = $('input[name=reception]')[0].value;
		if(receptionString == '')
			reception = 0;
		else
			reception = parseInt(receptionString) * 300;
			
		var banquet = 0;
		var banquetString = $('input[name=banquet]')[0].value;
		if(banquetString == '')
			banquet = 0;
		else
			banquet = parseInt(banquetString) * 600;			
		
		var publication = 0;
		var publicationString = $('input[name=publicationnumber]')[0].value;
		if(publicationString == '')
			publication = 0;
		else
			publication = parseInt(publicationString) * 450;
		
		section3payment = lunchPay+reception+banquet+publication;
		$('.payment b')[1].textContent = section3payment;
		totalpayment = section2payment + section3payment;
		$('.payment b')[2].textContent = totalpayment;

	}
	$('input[name=NeedInvoice]').each(function(index,element){
		$(this).click(ToggleInvoiceTitle);
	});	
	$('input[name=RegisterFee]').each(function(index,element){
		$(this).click(ChangeSection2Payment);
	});
	
	$('div.additional input').each(function(index,element){
		$(this).change(ChangeSection3Payment);
		$(this).click(ChangeSection3Payment);
	});		

  </script>
  
   </form !-->
  ";
 /* if (isset($_POST['issubmitted']))
  {

	  	echo "
			<p class = 'emphasize'>提交中……</p>
			<script>
				$('div.wholeRegister').hide();
				$('div.check').hide();
				$('div.submit').hide();	
			</script>";
		$con = mysql_connect("localhost","acpconf1_0","GUANG2013yan&&&");
		mysql_select_db("acpconf1_register",$con);
		mysql_query("create table if not exists Register_table
		(
		  FamilyName varchar(30),		
		  FirstName varchar(30),
		  Name varchar(60),
		  Title varchar(30),
		  Affiliation varchar(255),
		  Address varchar(1000),
		  City varchar(30),
		  Province varchar(30),
		  ZIP varchar(30),
		  Email varchar(100),
		  Telephone varchar(30),
		  Ext varchar(30),
		  Fax varchar(30),
		  PaperTitle varchar(100),
		  PaperCode varchar(30),
		  PaperOrder varchar(1),
		  NeedInvoice int,
		  InvoiceTitle varchar(100),
		  Publication int,
		  Reception int,
		  Banquet int,
		  Lunch int,
		  LunchDate varchar(20),
		  TotalPayment int,
		  RegisterTime datetime,
		  Notes text
		)",$con);


	    $FirstName = check_input($_POST['FirstName']);
		$FamilyName = check_input($_POST['FamilyName']);
		$Name = check_input($_POST['FamilyName']." ".$_POST['FirstName']);
		$Title = check_input($_POST['Title']);
		$Affiliation = check_input($_POST['Affiliation']);
		$Address = check_input($_POST['Address']);
		$City = check_input($_POST['City']);
		$Province = check_input($_POST['Province']);
		$ZIP = check_input($_POST['ZIP']);
		$Email = check_input($_POST['Email']);
		$Telephone = check_input($_POST['Telephone']);
		$Ext = check_input($_POST['Ext']);
		$Fax = check_input($_POST['Fax']);
		$PaperTitle = check_input($_POST['PaperTitle']);
		$NeedInvoice = check_input($_POST['NeedInvoice']);
		if($NeedInvoice == 0)
			$InvoiceTitle = check_input('');
		else
			$InvoiceTitle = check_input($_POST['InvoiceTitle']);
		$Publication = check_input($_POST['publicationnumber']);
		$Reception = check_input($_POST['reception']);
		$Banquet = check_input($_POST['banquet']);
		
		$TotalPayment = check_input($_POST['totalpayment']);
		$Comment = check_input($_POST['comment']);
		
		$Lunch = 0;
		$LunchDate = "";
		$lunchDate = $_POST['lunch'];
		foreach($lunchDate as $key=>$val)
		{
			//foreach($Val as $val)
			//{
				if($val == 0)
				{
					$LunchDate = $LunchDate."12";
					$Lunch = $Lunch + 1;
				}
				if($val == 1)
				{
					$LunchDate = $LunchDate."13";
					$Lunch = $Lunch + 1;
				}
				if($val == 2)
				{
					$LunchDate = $LunchDate."14";
					$Lunch = $Lunch + 1;
				}
			//}

		}
		$LunchDate = check_input($LunchDate);
		
		$result = mysql_query("delete from Register_table where 
		  FirstName=$FirstName and 
		  FamilyName=$FamilyName and
		  Affiliation=$Affiliation",$con);
		if(!$result)
		{
		  echo"<script>
		  alert('Failed to connect to server. Pleas submit again later.');
		  </script>";
		  die('Could not connect: ' . mysql_error());
		}
		$PaperCode = 900000;
		if ($_POST['PaperCode']=='' || !is_numeric($_POST['PaperCode']))
		{
			do 
			{
				$PaperCode = $PaperCode + 1;
				$result = mysql_query("select * from Register_table where 
						  PaperCode=$PaperCode",$con);
				$PaperOrder_o = '';
			    
			}while (mysql_num_rows($result) != 0);
			$PaperCodeLastFiveNumber = $PaperCode;
			$stringCode = sprintf("%06d",$PaperCodeLastFiveNumber);
		}
		else 
		{
			$PaperCode = check_input($_POST['PaperCode']);
			$PaperCodeFirstTwoNumber = floor($PaperCode/100000);
			$PaperCodeLastFiveNumber = $PaperCode - $PaperCodeFirstTwoNumber * 100000;
			if ( $PaperCodeFirstTwoNumber != 20 && $PaperCodeFirstTwoNumber != 17 )
			{
					$PaperOrder_o = 'Z';
					$result = mysql_query("select * from Register_table where 
					  PaperCode=$PaperCode",$con);
					$PaperOrder_o = chr(ord($PaperOrder_o)-mysql_num_rows($result));
			}
			else 
			{
				if ( $PaperCodeFirstTwoNumber == 20)
				{
					$PaperOrder_o = 'A';
				}
				else if ( $PaperCodeFirstTwoNumber == 17)
				{
					$PaperOrder_o = '1';
				}
			
				$result = mysql_query("select * from Register_table where 
					  PaperCode=$PaperCode",$con);
			
				$PaperOrder_o = chr(ord($PaperOrder_o)+mysql_num_rows($result));
			}
			$stringCode = sprintf("%05d",$PaperCodeLastFiveNumber);
			

		}
		$PaperOrder = check_input($PaperOrder_o);
		$result = mysql_query("insert into Register_table 
		(
		  FirstName,
		  FamilyName,
		  Name,
		  Title,
		  Affiliation,
		  Address,
		  City,
		  Province,
		  ZIP,
		  Email,
		  Telephone,
		  Ext,
		  Fax,
		  PaperTitle,
		  PaperCode,
		  PaperOrder,
		  NeedInvoice,
		  InvoiceTitle,
		  Publication,
		  Reception,
		  Banquet,
		  Lunch,
		  LunchDate,
		  TotalPayment,
		  RegisterTime,
		  Notes	  
		)
		values
		(
		  $FirstName,
		  $FamilyName,
		  $Name,
		  $Title,
		  $Affiliation,
		  $Address,
		  $City,
		  $Province,
		  $ZIP,
		  $Email,
		  $Telephone,
		  $Ext,
		  $Fax,
		  $PaperTitle,
		  $PaperCode,
		  $PaperOrder,
		  $NeedInvoice,
		  $InvoiceTitle,		  
		  $Publication,
		  $Reception,
		  $Banquet,
		  $Lunch,
		  $LunchDate,
		  $TotalPayment,
		  NOW(),
		  $Comment				  
		)
		",$con);
		if(!$result)
		{
		  echo"<script>
		  alert('Failed to connect to server. Please submit again later.');
		  </script>";
		  die('Could not connect: ' . mysql_error());		
		}
		else
		{
			//$FirstChar = dechex(min(15,$Banquet * 4 + $Lunch));
			//$SecondChar = dechex(min(15,$Reception * 4 + $Publication)); 
			
			$AffixContent = 'PA030089-'.$stringCode.$PaperOrder_o;

			  

$FirstName = $_POST['FirstName'];
$FamilyName = $_POST['FamilyName'];
$Name = $FamilyName.$FirstName;
$Title = $_POST['Title'];
$Email = $_POST['Email'];

echo "
	<form action='http://acp.sjtu.edu.cn/acp-transfer-mail/transfer.php' method='post' id='form-transfer'>

	<input type='text' style='display:none' name='Name' value='$Name'></input>
	<input type='text' style='display:none' name='Title' value='$Title'></input>
	<input type='text' style='display:none' name='Email' value='$Email'></input>
	<input type='text' style='display:none' name='PaperCode' value='$PaperCode'></input>		
	<input type='text' style='display:none' name='PaperOrder_o' value='$PaperOrder_o'></input>	
	<input type='text' style='display:none' name='TotalPayment' value='$TotalPayment'></input>			
	<input type='text' style='display:none' name='AffixContent' value='$AffixContent'></input>		
	</form>
	<script>
		$('form#form-transfer').submit();
	</script>
		
"; */
/*
require 'PHPMailer-master/PHPMailerAutoload.php';		  
			  
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->Host = 'box921.bluehost.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'registration@acp-conf.org';                 // SMTP username
$mail->Password = 'regmail0826';  
$mail->SMTPSecure = 'tls'; 

$mail->CharSet     = 'UTF-8';
$mail->Encoding    = '8bit';
$mail->setFrom('registration@acp-conf.org', 'ACP组委会');
$mail->addAddress($Email,$Name.$Title);
$mail->addBCC('acp2014@126.com');
$mail->Subject = 'ACP注册确认邮件(编号：'.$PaperCode.$PaperOrder_o.')';
$mail->msgHTML('


<p>'.$Name.' '.$Title.'：您好！</p>

<p>非常感谢您对ACP 2014的支持。您的注册信息已经提交到系统了，请在2014年10月1日之前将注册费'.$TotalPayment.'元汇款或转账至下述会议账户，以完成注册手续：</p>
<p>（注：为了能够及时、准确地统计您的汇款明细，请务必在转账汇款时的 “用途”或“附言”栏，写上系统生成的附言。）</p>

<p>账户名称：上海交通大学</p>
<p>银行账号：439059226890</p>
<p>开户银行：中国银行上海市交通大学支行</p>
<p>附言注明：'.$AffixContent.'</p>
', dirname(__FILE__));
//$mail->addAttachment('./Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf');
$mail->send();
*/

//		}
		
//  }
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