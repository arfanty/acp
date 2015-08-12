<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="TitleEditRegion" -->
<title>Payment Methods ::ACP 2014::</title>
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
	margin-left:10px;
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
  <div class="content"> <?php echo "<h1>$drpcttPaymentMethods->stringTitle</h1> 
<div class='wholeRegister'>  
  	<!--ul id='buttonUL'>
      <li><button><span>Register link for foreigners<br />国外单位注册入口</span></button></li>
  	  <li><button>Register link for domestic<br />国内单位注册入口</button></li>
    </ul--> 
<div class='register' >
 <div id='foreignRegister'>
 	<p class='emphasize'>The Non-Chinese Register(国外注册者)</p>
 	<p> Please clicked following link and complete the register</p>
	<p><a href='http://www.cvent.com/d/h4q30n/4W'> Register Now. </a></p>
 </div>
 <div id='domesticRegister'> 
 	<p class='emphasize'>The Chinese Register(国内注册者)</p>
 <form action='Registertest.php' method='post'>
 <div class='section'>
 <p class='subtitle'> Section 1. 基本信息 </p>
	<div class='forminput'>
		<label class='information'>姓:*</label>
		<input name='FamilyName' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[FamilyName]' ";
		}
		echo " /><span class='errorMessage'>  Family Name is required.</span>
	</div>
	
	<div class='forminput'>
		<label class='information'>名:*</label>
		<input name='FirstName' type='text'";
		if (isset($_POST['issubmitted'])) 
		{
			echo " value='$_POST[FirstName]' ";
		}
		echo "/><span class='errorMessage'>  First Name is required.</span>
	</div>
	

	<div class='forminput'>
		<label class='information'>称谓:*</label>
		<input name='Title' type='text'";
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
		<input name='ZIP' type='text' onKeyPress='LimitToNumber(event)' style='ime-mode:disabled;' onKeyUp='this.value=this.value.replace(/\D/g,\'\')' ";
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
	<div class='forminput' id='email'>
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
		<input name='PaperCode' type='text' onKeyPress='LimitToNumber(event)'";
		if (isset($_POST['issubmitted'])) 
		{
		  echo " value='$_POST[PaperCode]' ";
		}
		echo " /><span class='errorMessage'>  Paper code is required.</span>
	</div>
	<div class='forminput' id='needinvoice'>
		<label class='information' onKeyPress='LimitToNumber(event)'>是否需要发票:</label>
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
		<th width='300' scope='col'>10月10日(包括)之前注册</th>
		<th width='300' scope='col'>10月10日之后注册</th>
	  </tr>
	  <tr>
		<td height='40'>OSA/IEEE/SPIE/COS/CIC<br/>会员注册</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-0' checked='true' /><label for='RegisterFee-0'> 2800元</label></td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-1' /><label for='RegisterFee-1'> 3400元</label></td>
	  </tr>
	  <tr>
		<td height='40'>非会员注册</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-2' /><label for='RegisterFee-2'> 3100元</label></td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-3' /><label for='RegisterFee-3'> 3700元</label></td>
	  </tr>
	  <tr>
		<td height='40'>学生注册</td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-4' /><label for='RegisterFee-4'> 1600元</label></td>
		<td><input type='radio' name='RegisterFee' id='RegisterFee-5' /><label for='RegisterFee-5'> 2200元</label></td>
	  </tr>
	</table>
	<div class='payment'>
		<p>注册费用: <b>2800</b>元</p>
	</div>
  </div>
  <div class='section'>
  <p class='subtitle'> Section 3.  附加项</p>	

	<div class='additional'>	
		<label class='banquet'><b>宴会券(不包含在注册费中):</b></label>
		<input type='text' name='banquet' maxlength='1' onKeyPress='LimitToNumber(event)' id='banquet' /> <label for='banquet'>× 600元 </label>
	</div>		
	<div class='additional'>		
		<label class='lunch'><b>午餐券,可用于11月12到14日场馆提供的自助餐:</b></label>
		<input type='radio' name='lunch' id='lunch-0' value=0 checked='true' /><label for='lunch-0'>不需要</label>
		<input type='radio' name='lunch' id='lunch-1' value=1 /><label for='lunch-1'>1天，90元</label>
		<input type='radio' name='lunch' id='lunch-2' value=2 /><label for='lunch-2'>2天，180元</label>
		<input type='radio' name='lunch' id='lunch-3' value=3 /><label for='lunch-3'>3天，270元</label>				
	</div>
  	<div class='additional'>
  		<label class='reception'><b>额外的接待券:</b></label> 
		<input type='text' name='reception' maxlength='1' onKeyPress='LimitToNumber(event)' id='reception' />  <label for='reception'>× 300元 </label>
		<!--input type='checkbox' name='paidregistrant'  id='paidregistrant'/><label for='paidregistrant'>Paid Registrant – No Charge</label -->
	</div>			
	<div class='additional'>
  		<label class='publication'><b>额外的会议手册和U盘资料数:</b></label>
		<input type='text' name='publicationnumber' id='publicationnumber' maxlength='1' onKeyPress='LimitToNumber(event)' /> <label for='publicationnumber'>× 450元</label>
	</div>
	<div class='payment'>
		<p>附加项费用: <b>0</b>元</p>
	</div>
  </div>  
  <div class='payment'>
	<p>总费用: <b>2800</b>元</p>
  </div> 
  <div class='checkbutton'>
  	<button class='checkbutton' onclick='return FormValidate(this.form)'>提交注册</button>
  </div>
 </div> 
</div> 
</div>
  <div class='check'>
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
    var section2payment = 2800;
	var section3payment = 0;
    var section4payment = 0;
	var totalpayment = 2800;
	var needInvoice = true;
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
			var inputValue;
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
					inputValue = $('input[name=\'lunch\']:checked').val();
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
	function TurnBack()
	{
		$('div.wholeRegister').show();
		$('div.check').hide();
		$('div.submit').hide();	
		return false;
	}
    function LimitToNumber(event)
	{
		if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;
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
		var lunchSelectedId = $('input[name=lunch]:checked')[0].id;
		if(lunchSelectedId == 'lunch-0' )
			lunchPay = 0;
		else if(lunchSelectedId == 'lunch-1' )
			lunchPay = 90;	
		else if(lunchSelectedId == 'lunch-2' )
			lunchPay = 180;			
		else if(lunchSelectedId == 'lunch-3' )
			lunchPay = 270;	
			
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
  
   </form>
  ";
  if (isset($_POST['issubmitted']))
  {

	  	echo "
	
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
		  TotalPayment int
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
		$Lunch = check_input($_POST['lunch']);
		$TotalPayment = check_input($_POST['totalpayment']);
		
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
		$PaperCode = 9000000;
		if ($_POST['PaperCode']=='' || !is_numeric($_POST['PaperCode']))
		{
			do 
			{
				$PaperCode = $PaperCode + 1;
				$result = mysql_query("select * from Register_table where 
						  PaperCode=$PaperCode",$con);
				$PaperOrder_o = '';
			    
			}while (mysql_num_rows($result) != 0);
		}
		else 
		{
			$PaperCode = check_input($_POST['PaperCode']);
			$PaperOrder_o = 'A';
			$result = mysql_query("select * from Register_table where 
					  PaperCode=$PaperCode",$con);
			$PaperOrder_o = chr(ord($PaperOrder_o)+mysql_num_rows($result));

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
		  TotalPayment		  
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
		  $TotalPayment				  
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
			$FirstChar = dechex(min(15,$Banquet * 4 + $Lunch));
			$SecondChar = dechex(min(15,$Reception * 4 + $Publication));
			$AffixContent = 'ACP-'.$PaperCode.$PaperOrder_o.'-'.$FirstChar.$SecondChar;
			echo 
			"	<p class='emphasize'>信息提交成功！</p>
				<div class='remit'> 
				
				<p>非常感谢您对ACP 2014的支持，您的注册编号是：$PaperCode$PaperOrder_o 。一封确认邮件将会发送到您的邮箱中以备您参考。请在2014年10月1日之前将注册费 $TotalPayment 元汇款或转账至下述会议账户，以完成注册手续：</p>
				<p>（注：为了能够及时、准确地统计您的汇款明细，请务必在转账汇款时的 “用途”或“附言”栏，写上系统生成的附言。）</p>

					<p><b>账户名称：上海交通大学</b></p>
					<p><b>开户行信息：中国银行上海市交通大学支行</b></p>
					<p><b>银行账号：439059226890</b></p>
					<p><b>汇款用途：$AffixContent</b></p>
			  </div>
			  ";
			  

$FirstName = $_POST['FirstName'];
$FamilyName = $_POST['FamilyName'];
$Name = $FamilyName.$FirstName;
$Title = $_POST['Title'];
$Email = $_POST['Email'];
			  
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

		}
		
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